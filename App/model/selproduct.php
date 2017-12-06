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
    public function selproduct()
    { 
        $sql = "select * from t_product limit 1000";
        $res_arr = $this->DBObj->getAllArray($sql);
        return $res_arr;
    }
}