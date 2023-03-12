<?php

include("lib/connect.php");
include("libsms/nusoap.php");

$object=new class_parent();

$name = $_POST['name'];
$name=check_injection($name);
$branch = $_POST['branch'];
$branch=check_injection($branch);
$card = $_POST['card'];
$card=check_injection($card);
$account = $_POST['account'];
$account=check_injection($account);
$sheba = $_POST['sheba'];
$sheba=check_injection($sheba);
$owner = $_POST['owner'];
$owner=check_injection($owner);
$priority = $_POST['priority'];
$priority=check_injection($priority);


$sql="select * from banks where card=?";
$arr=array($card);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("شماره کارت تکراری است");
    ?> <script> window.history.go(-1);  </script> <?php
    die();
}

$sql="select * from banks where account=?";
$arr=array($account);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("شماره حساب تکراری است");
    ?> <script> window.history.go(-1);  </script> <?php
    die();
}

$sql="select * from banks where sheba=?";
$arr=array($sheba);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("شماره شبا تکراری است");
    ?> <script> window.history.go(-1);  </script> <?php
    die();
}



    $sql = "INSERT INTO banks (name,branch,card,account,sheba,owner,priority) VALUES ('$name','$branch','$card','$account','$sheba','$owner','$priority')";
    $object->myquery($sql);


phpAlert("حساب بانکی با موفقیت ایجاد شد.");
?> <script> location.assign("banks.php");  </script> <?php



