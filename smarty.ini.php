<?php
//修改smarty的一些默认值
    $Smarty = new Smarty();
//修改左右分隔符
    $Smarty->left_delimiter = "<{";
    $Smarty->right_delimiter = "}>";
    
/*
    笔记:SMARTY_DIR常量，如果当前页面实例化Smarty类，那么不用常量不用赋值,smarty会自动赋值
    echo SMARTY_DIR; D:/install/wamp64/www/wwtestProduct/vendor/smarty/smarty/libs/
*/