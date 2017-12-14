<?php
require_once "./public.php";
//添加
$handle = $_GET['handle'];
//此处需要正则判断
$bool_reg = preg_match('',$_GET['handle']);
switch($handle)
{ 
    case "display":
        //展示上传页面
        //查询货币的详细信息
        $currency_info = $selproductObj->selCurrency();
        //查询产品分类的详细信息,递归分类输出
        $productcat_info = $selproductObj->selproductcat();
        //查询代理商
        $agent_info = $selproductObj->selAgent();
        //查询品牌
        $brand_info = $selproductObj->selBrand();
        $Smarty->assign('currency_info',$currency_info);
        $Smarty->assign('productcat_info',$productcat_info);
        $Smarty->assign('agent_info',$agent_info);
        $Smarty->assign('brand_info',$brand_info);
        $Smarty->display("add.html");

    break;
    case "add":
            //开启事务
            //上传商品
            $input_arr = $_POST;
            unset($input_arr['sales_unitprice']);
            unset($input_arr['purchase_quantity']);
            $input_arr['product_modelshort'] = strtolower($input_arr['product_model']);
            $input_arr['product_name'] = $input_arr['product_model'];
            $input_arr['agent_name'] = $selproductObj->seloneAgent($_POST['agent_id']);
            $input_arr['brand_name'] = $selproductObj->seloneBrand($_POST['brand_id']);
            $input_arr['product_createtime'] = date("Y-m-d h:i:s",time());
            $inproduct_id = $selproductObj->insertProduct($input_arr);
            //上传价格
            $pd_price = array_filter(uniqueprice($_POST['sales_unitprice'],$_POST['purchase_quantity']));
            $res_upinprice = $selproductObj->upInsertPrice($pd_price,$_POST['currency_id'],$inproduct_id);
            if($inproduct_id && $res_upinprice){ 
                echo "<h1>添加成功,两秒钟跳转</h1>";
                header("refresh:2;url=./index.php");
            }else{ 
                echo "<h1>添加失败,联系开发人员,两秒钟跳转</h1>";
                header("refresh:3;url=./exit.php?product_id=".$product_id);
            }

            break;
        }
            
    