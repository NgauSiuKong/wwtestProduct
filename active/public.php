<?php
ini_set('display_errors',1);
$path = dirname(dirname(__FILE__));
//导入初始化的文件
require $path."/requiredfile.php";
$Smarty->assign('header.html');
$Smarty->assign('footer.html');



    
    