<?php
/*项目需要使用的函数文件*/
//功能函数，递归无限分类,展示排序且子类缩进
function recursion($arr,$id,$pid,$num=0){ 
    static $res_array = array();
    foreach($arr as $key => $val){ 
        if( $num == $val[$pid]){ 
            $res_array[] = $val;
            recursion($arr,$id,$pid,$res_array=array(),$num=$val[$id]);
        }
    }
    return $res_array;
}