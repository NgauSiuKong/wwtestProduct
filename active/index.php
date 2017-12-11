<?php
require_once "./public.php";

$selproductObj = App\model\selproduct::getObj($DatabaseOperateObj);
//查询产品总数
$count_product = $selproductObj->selcountproduct("");
//配置页码
$page_id = $_GET['page_id']?$_GET['page_id']:1;
//获取分页条件
$paginationObj = new Pagination;
$condition_page = $paginationObj->page_condition($page_id,$count_product);
//查询产品列表
$another_condition=" order by product_id desc";
$product_list = $selproductObj->selListProduct($another_condition.$condition_page);
//获取分页按钮
$page_button = $paginationObj->page($page_id,$count_product);
$Smarty->assign("page_button",$page_button);
$Smarty->assign("product_list",$product_list);
$Smarty->display('list.html');




    
    