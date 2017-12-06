<?php
    
    //testfun();
    $obj = new DatabaseOperate(0,0,0,0);
    dump($obj);
    $objc = new \App\controller\controller1();
    $objcc = new \App\controller\controller2();
    dump($objc);
    dump($objcc);
    $arr = $Smarty->template_dir;
    $arr1 = $Smarty->config_dir;
    $arr2 = $Smarty->plugins_dir;
    $arr3 = $Smarty->compile_dir;
    $arr4 = $Smarty->cache_dir;
    dump($arr);
    dump($arr1);
    dump($arr2);
    dump($arr3);
    dump($arr4);
    $Smarty->assign('test',"hello word");
    $Smarty->display('test.html');
    