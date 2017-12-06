<?php
    $path = dirname(__FILE__);
    //conposer加载文件
    require_once $path."/vendor/autoload.php";
    //项目配置文件
    require_once $path."./config.php";
    //smarty配置文件
    require_once $path."./smarty.ini.php";
    //实例化数据库类
    $DatabaseOperateObj = new DatabaseOperate(__HOST__,__USER__,__PASS__,__DB__);
    