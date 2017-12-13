<?php
require_once "./public.php";
//查询商品信息
$product_id = $_POST['product_id'];
//先上传商品价格
//开启事务
$DatabaseOperateObj->beginCommit();
//=====================处理价格=====================
//根据条件删除之前的价格
//查看是否有价格
$res_ifexistsprice = $selproductObj->ifExistsPrice($product_id);
//有价格,则删除价格
if($res_ifexistsprice){ 
    $res_delprice = $selproductObj->delprice($product_id);
}
//重新上传新的价格,如果上传了价格,那么添加价格
if( $_POST['sales_unitprice'] && $_POST['purchase_quantity'] ){
    $pd_price = uniqueprice($_POST['sales_unitprice'],$_POST['purchase_quantity']);
    $res_upinprice = $selproductObj->upInsertPrice($pd_price,$_POST['currency_id'],$product_id);
}
//====================价格处理完毕====================
//======================处理品牌和代理商==============
//查询名字,添加到商品表即可
$input_arr = $_POST;
unset($input_arr['sales_unitprice']);
unset($input_arr['purchase_quantity']);
unset($input_arr['product_id']);
$input_arr['product_modelshort'] = strtolower($input_arr['product_model']);
$input_arr['product_name'] = $input_arr['product_model'];
$input_arr['agent_name'] = $selproductObj->seloneAgent($_POST['agent_id']);
$input_arr['brand_name'] = $selproductObj->seloneBrand($_POST['brand_id']);
$res_updateproduct = $selproductObj->updateProduct($input_arr,$product_id);
if(!$DatabaseOperateObj->mysqli->errno){ 
    $DatabaseOperateObj->submitCommit();
    $DatabaseOperateObj->stopCommit();
    echo "<h1>修改成功,两秒钟跳转</h1>";
    header("refresh:2;url=./index.php");
}else{ 
    $DatabaseOperateObj->rollback();
    $DatabaseOperateObj->stopCommit();
    echo "<h1>修改失败,仔细检查,重新填写,两秒钟跳转</h1>";
    header("refresh:3;url=./exit.php?product_id=".$product_id);
}



    