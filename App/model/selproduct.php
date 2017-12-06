<?php
namespace App\model;
class selproduct
{ 
    static $selproductObj;
    private $DBObj;
    private function __construct($DBObj)
    { 
        $this->DBObj = $DBObj;
    }
    static function getObj($DBObj)
    { 
        if(is_null(self::$selproductObj)){ 
            self::$selproductObj = new self($DBObj);
        }
        return self::$selproductObj;
    }
    public function selcountproduct($condition)
    { 
        $sql = "select count(1) from t_product ".$condition;
        $count = $this->DBObj->getAllArray($sql);
        //$count = $count['count(1)'];
        return $count;
    }
    public function selproduct($condition);
    { 
        $sql = "select * from t_product ".$condition;
        $res_arr = $this->DBObj->getAllArray($sql);
        return $res_arr;
    }
}