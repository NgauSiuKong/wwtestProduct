<?php
$path = dirname(dirname(__FILE__));
require $path."/requiredfile.php";
$MselproductObj = App\model\selproduct::getObj($DatabaseOperateObj);
$res = $MselproductObj->selproduct('limit 500');
dump($res);
$Smarty->display('list.html');

    
    