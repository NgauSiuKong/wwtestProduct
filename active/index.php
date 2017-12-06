<?php
$path = dirname(dirname(__FILE__));
require $path."/requiredfile.php";
$MselproductObj = App\model\selproduct::getObj($DatabaseOperateObj);
$res = $MselproductObj->selproduct();
$page = new Pagination(3,500);
dd($res);
$Smarty->display('list.html');

    
    