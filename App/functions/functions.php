<?php
/*项目需要使用的函数文件*/
//功能函数，递归无限分类,展示排序且子类缩进
function recursion($arr,$id,$pid,$num,$grade){ 
    static $list = array();
    foreach($arr as $val){ 
        if($val[$pid] == $num){ 
            $val['productcat_grade'] = $grade; 
            $list[] = $val;
            recursion($arr,$id,$pid,$val[$id],$grade+1);
        }
    }
    return $list;
}
