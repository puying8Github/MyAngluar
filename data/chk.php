<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad User
 * Date: 2016/4/12
 * Time: 14:16
 */
function checkNum($num){
    return ($num%2)? TRUE:FALSE;
}
$num=$_GET["n"];
if(checkNum($num)===TRUE){
    echo "奇数";
}else{
    echo "偶数";
}