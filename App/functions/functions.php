<?php
/*项目需要使用的函数文件*/
//功能函数，递归无限分类,展示排序且子类缩进
function recursion($arr,$id,$pid,$num,$grade){ 
    static $list = array();
    foreach($arr as $val){ 
        if($val[$pid] == $num){ 
            $val['productcat_grade'] = $grade; 
            $list[] = $val;
            recursion($arr,$id,$pid,$val[$id],$grade+1);
        }
    }
    return $list;
}
function uniqueprice($sales,$purchase){ 
    $res_arr = array();
    for($i=1;$i<=count($sales);$i++){ 
        $res_arr[$purchase[$i]] = $sales[$i];
    }
    return $res_arr;
}
function upInsertPriceFun($arr,$curid,$proid){ 
    $str1 = "INSERT INTO t_product_price (`product_id`,`sales_unitprice`,`purchase_quantity`,`currency_id`) VALUES ";
    $str2 = "";
    foreach($arr as $key => $val){ 
        $str2 .= "({$proid},'{$val}','{$key}','{$curid}'),";
    }
    $sql = $str1.trim($str2,',');
    return $sql;
}
function upsqlproduct($arr,$id){ 
    $start = "UPDATE t_product SET ";
    $ending = " WHERE product_id=".$id;
    $middle = "";
    foreach($arr as $key => $val){ 
        $middle .= "`{$key}` = '{$val}',";
    }
    $sql = $start.trim($middle,',').$ending;
    return $sql;
}
