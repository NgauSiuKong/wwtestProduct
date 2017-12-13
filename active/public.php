<?php
ini_set('display_errors',0);
$path = dirname(dirname(__FILE__));
//导入初始化的文件
require $path."/requiredfile.php";
$Smarty->assign('header.html');
$Smarty->assign('footer.html');
$selproductObj = App\model\selproduct::getObj($DatabaseOperateObj,$Db);



    
    