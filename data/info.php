<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad User
 * Date: 2016/4/12
 * Time: 15:47
 */
if($_GET["action"]=='search'){
    header("Content-type:text/json");
    $stulist=array(
        array("Code"=>"1001","Name"=>"aaaa","Sex"=>"男"),
        array("Code"=>"1002","Name"=>"bbbb","Sex"=>"女")
    );
    echo json_encode($stulist);
}else if($_GET["action"]=='save'){
    if($_POST["key"]=="1010"){
        echo "1";
    }else{
        echo "0";
    }
}