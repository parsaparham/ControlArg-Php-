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
$id = $_POST['id'];
$id=check_injection($id);

$active=$_POST['active'];
if($active=="enable"){$active=1;}
if($active=="disable"){$active=0;}


$sql="select * from banks where card=? and id!=$id";
$arr=array($card);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("شماره کارت تکراری است");
    ?> <script> window.history.go(-1);  </script> <?php
    die();
}

$sql="select * from banks where account=? and id!=$id";
$arr=array($account);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("شماره حساب تکراری است");
    ?> <script> window.history.go(-1);  </script> <?php
    die();
}

$sql="select * from banks where sheba=? and id!=$id";
$arr=array($sheba);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("شماره شبا تکراری است");
    ?> <script> window.history.go(-1);  </script> <?php
    die();
}

$sql = "update banks set name='$name',branch='$branch',card='$card',account='$account',sheba='$sheba',owner='$owner', priority='$priority',active='$active' where id=?";
$arr = array($id);
$object->myquery($sql, $arr);

phpAlert(" حساب بانکی با موفقیت ویرایش شد.");
?> <script> location.assign("banks.php");  </script> <?php



