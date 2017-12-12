<?php
namespace App\model;
class selproduct
{ 
    static $selproductObj;
    private $DBObj;
    private function __construct($DBObj)
    { 
        $this->DBObj = $DBObj;
    }
    static function getObj($DBObj)
    { 
        if(is_null(self::$selproductObj)){ 
            self::$selproductObj = new self($DBObj);
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
        $sql="SELECT tp.product_id as productId,product_type,agent_id,agent_name,brand_id,brand_name,product_model, product_stocknum,product_rohs,product_ishot,product_bargain_stock,product_isindex,product_searchstatus,product_order,product_status,product_isconsign,tpp.currency_id as currencyId,group_concat(tpp.purchase_quantity) as quantity,group_concat(tpp.sales_unitprice) as price,tpc.productcat_id as productcatId,tpc.productcat_name
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
        $res = recursion($productcat_list,'productcat_id','$parentcat_id',$num=0);
        echo "<pre>";
            print_r($res);
    }
    //========================查询结束================================
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
    //========================删除结束================================
}