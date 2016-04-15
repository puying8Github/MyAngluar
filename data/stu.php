<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad User
 * Date: 2016/4/12
 * Time: 10:43
 */
header("Content-type:text/json");
$stuList=array(
    array("Code"=>"10101","Name"=>"刘真真1","Score"=>"531"),
    array("Code"=>"10102","Name"=>"刘真真2","Score"=>"532"),
    array("Code"=>"10103","Name"=>"刘真真3","Score"=>"533"),
    array("Code"=>"10104","Name"=>"刘真真4","Score"=>"534"),
    array("Code"=>"10105","Name"=>"刘真真5","Score"=>"535"),
    array("Code"=>"10106","Name"=>"刘真真6","Score"=>"536"),
    array("Code"=>"10107","Name"=>"刘真真7","Score"=>"537"),
    array("Code"=>"10108","Name"=>"刘真真8","Score"=>"538"),
    array("Code"=>"10109","Name"=>"刘真真9","Score"=>"539"),
    array("Code"=>"10110","Name"=>"刘真真10","Score"=>"530"),
);
echo json_encode($stuList);?>