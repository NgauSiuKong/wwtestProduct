<?php
require_once "./public.php";
//过滤需要删除的产品id
$bool_reg = preg_match('/\d+/',$_GET['product_id']);
if(!$bool_reg){echo('url错误');die();}
$product_id = $_GET['product_id'];
$selproductObj = App\model\selproduct::getObj($DatabaseOperateObj);
//验证要删除的商品是否存在
$res = $selproductObj->selIdExists($product_id);
if(!$res){echo('该商品在数据库中不存在');die();}
$del_res = $selproductObj->delProduct($product_id);
if($del_res){ 
    echo "删除成功,三秒后跳转";
    header('refresh:3;url=http://localhost/wwtestProduct/index.php');
}else{ 
    echo "删除失败,请重试,三秒后跳转";
    header('refresh:3;url=http://localhost/wwtestProduct/index.php');
}



    
    