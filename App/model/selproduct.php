<?php
namespace App\model;
class selproduct
{ 
    static $selproductObj;
    private $DBObj;
    private $Db;
    private function __construct($DBObj,$Db)
    { 
        $this->DBObj = $DBObj;
        $this->Db = $Db;
    }
    static function getObj($DBObj,$Db)
    { 
        if(is_null(self::$selproductObj)){ 
            self::$selproductObj = new self($DBObj,$Db);
        }
        return self::$selproductObj;
    }
    //==========================查询=============================
    //查询产品的总数
    public function selcountproduct($condition)
    { 
        $sql = "select count(1) from t_product ".$condition;
        $count = $this->DBObj->getOneArray($sql);
        $count = $count['count(1)'];
        return $count;
    }
    //根据条件查询产品列表
    public function selListProduct($condition)
    { 
        $sql = "select * from t_product ".$condition;
        $list = $this->DBObj->getAllArray($sql);
        return $list;
    }
    //查询某id在产品表中是否存在
    public function selIdExists($id)
    { 
        $sql = "select product_id from t_product where product_id= ".$id;
        $list = $this->DBObj->getOneArray($sql);
        $bool = $list?true:false;
        return $bool;
    }
    //查询某商品详细信息,供修改
    public function selProductInfo($id)
    { 
        $sql="SELECT tp.product_id as productId,product_type,agent_id,agent_name,brand_id,brand_name,product_model, product_stocknum,product_rohs,product_ishot,product_bargain_stock,product_isindex,product_searchstatus,product_order,product_status,product_isconsign,product_datasheet,product_rohs,product_deliverytime,product_deliveryplace,product_batch,product_suspended,isweekly_special,product_eccn,product_stocknum,is_spot,product_package,tpp.currency_id as currencyId,group_concat(tpp.purchase_quantity) as quantity,group_concat(tpp.sales_unitprice) as price,tpc.productcat_id as productcatId,tpc.productcat_name
            FROM t_product AS tp 
            LEFT JOIN t_product_price AS tpp 
            ON tp.product_id = tpp.product_id
            LEFT JOIN t_productcat AS tpc 
            ON tpc.productcat_id = tp.productcat_id
            WHERE tp.product_id= ".$id;
        $list = $this->DBObj->getOneArray($sql);
        $unit_price = explode(',',$list['price']);
        $quantity = explode(',',$list['quantity']);
        $price = array_combine($quantity,$unit_price);
        $list['price'] = $price;
        return $list;
    }
    //查询本项目中的货币分类
    public function selCurrency()
    { 
        $sql = "select currency_id,currency_name,currency_sign from t_currency";
        $list = $this->DBObj->getAllArray($sql);
        return $list;
        $this->DBObj->freeResult();
    }
    //查询产品详细分类详细信息
    public function selproductcat()
    { 
        $sql_productcat = "select productcat_id,productcat_name,parentcat_id from t_productcat order by productcat_order desc";
        $productcat_list = $this->DBObj->getAllArray($sql_productcat);
        $productcat_list = array_slice($productcat_list,3);
        $productcat_list = recursion($productcat_list,'productcat_id','parentcat_id',0,0);
        foreach($productcat_list as $key => $val){ 
            $productcat_list[$key]['productcat_name'] = str_repeat('|--',$val['productcat_grade']).$val['productcat_name'];
        }
        return $productcat_list;
    }
    //查询代理商
    public function selAgent()
    { 
        $sql = "select agent_id,agent_name from t_agent";
        $list = $this->Db->getAll($sql);
        return $list;
    }
    //查询品牌
    public function selBrand()
    { 
        $sql = "select brand_id,brand_name from t_brand";
        $list = $this->Db->getAll($sql);
        return $list;
    }
    //查询单个代理商
    public function seloneAgent($id)
    { 
        $sql = "select agent_id,agent_name from t_agent where agent_id=".$id;
        $list = $this->Db->getAll($sql);
        return $list['0']['agent_name'];
    }
    //查询单个品牌
    public function seloneBrand($id)
    { 
        $sql = "select brand_id,brand_name from t_brand where brand_id=".$id;
        $list = $this->Db->getAll($sql);
        return $list[0]['brand_name'];
    }
    //查询该商品是否有价格
    public function ifExistsPrice($id)
    { 
        $sql = "select count(1) as c from t_product_price where product_id=".$id;
        $res = $this->Db->getAll($sql);
        if($res[0]['c']){ 
            return true;
        }else{ 
            return false;
        }
    }
    //========================查询结束================================
    //==========================添加=============================
    public function upInsertPrice($arr,$curid,$proid)
    { 
        /*
        $str1 = "INSERT INTO t_product_price (`product_id`,`sales_unitprice`,`purchase_quantity`,`currency_id`) VALUES ";
        $str2 = "";
        foreach($arr as $key => $val){ 
            $str2 .= "({$proid},'{$val}','{$key}','{$curid}'),";
        }
        $sql = $str1.trim($str2,',');
        */
        $sql = upInsertPriceFun($arr,$curid,$proid);
        $res = $this->DBObj->getRows($sql);
        if($res>0){ 
            return true;
        }else{ 
            return false;
        }
    }
    public function insertProduct($arr)
    { 
        $sql = insqlproduct($arr);
        $res_id = $this->DBObj->getAddId($sql);
        return $res_id;
    }
    //========================添加结束===========================
    //=========================修改开始==========================
    public function updateProduct($input_arr,$product_id)
    { 
        $sql = upsqlproduct($input_arr,$product_id);
        $res = $this->DBObj->getRows($sql);
        if($res){ 
            return true;
        }else{ 
            return false;
        }
    }
    //=========================修改结束==========================
    //==========================删除==================================
    //删除商品
    public function delProduct($id)
    { 
        $sql_product="delete from t_product where product_id= ".$id;
        $sql_price = "delete from t_product_price where product_id= ".$id;
        $res_pro = $this->DBObj->getRows($sql_product);
        if($res_pro){ 
            $res_price = $this->DBObj->getRows($sql_price);
            return true;
        }else{ 
            return false;
        }
    }
    //删除限定商品下的价格
    public function delprice($id)
    { 
        $sql = "delete from t_product_price where product_id = ".$id;
        $res = $this->DBObj->getRows($sql);
        if($res){ 
            return true;
        }else{ 
            return false;
        }
        
    }
    //========================删除结束================================
}