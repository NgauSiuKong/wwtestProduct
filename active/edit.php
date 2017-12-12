<?php
require_once "./public.php";
//查询商品信息
$bool_reg = preg_match('/\d+/',$_GET['product_id']);
if(!$bool_reg){echo('url错误');die();}
$product_id = $_GET['product_id'];
$selproductObj = App\model\selproduct::getObj($DatabaseOperateObj);
//验证要删除的商品是否存在
$res = $selproductObj->selIdExists($product_id);
if(!$res){echo('该商品在数据库中不存在');die();}
//查询商品详细信息
$product_info = $selproductObj->selProductInfo($product_id);
//查询货币的详细信息
$currency_info = $selproductObj->selCurrency();
//查询产品分类的详细信息,递归分类输出
$productcat_info = $selproductObj->selproductcat();
/*
$Smarty->assign('currency_info',$currency_info);
$Smarty->assign('product_info',$product_info);
$Smarty->display("edit.html");
*/

    
    