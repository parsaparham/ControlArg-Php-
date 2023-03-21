<?php

include("lib/connect.php");
include("libsms/nusoap.php");
include ("lib/jdf.php");

$object=new class_parent();

$firstname = $_POST['firstname'];
$firstname=check_injection($firstname);
$lastname = $_POST['lastname'];
$lastname=check_injection($lastname);
$username = $_POST['username'];
$username=check_injection($username);
$mobile = $_POST['mobile'];
$mobile=check_injection($mobile);
$password = $_POST['password'];
$password=check_injection($password);
$email= $_POST['email'];
$email=check_injection($password);
$address= $_POST['address'];
$address=check_injection($address);
$id= $_POST['id'];
$id=check_injection($id);
$active=$_POST['active'];
if($active=="enable"){$active=1;}
if($active=="disable"){$active=0;}







$sql="select * from users where mobile=? AND id!=$id";
$arr=array($mobile);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("این شماره همراه قبلا در سایت ثبت نام شده است");
    ?>  <script> window.history.go(-1);  </script> <?php
    exit();
}

$sql="select * from users where username=? AND id!=$id";
$arr=array($username);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("این نام کاربری قبلا در سایت ثبت نام شده است");
    ?> <script> window.history.go(-1);  </script> <?php
    exit();
}


$sql = "update users set fname='$firstname', lname='$lastname',username='$username',password='$password',mobile='$mobile',email='$email',address='$address',active='$active' where id=?";
$arr = array($id);
$object->myquery($sql, $arr);





phpAlert("مشخصات با موفقیت ویرایش گردید");
?>  <script> location.assign("users.php");  </script> <?php


