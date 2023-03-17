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
$time=jdate('H:i:s');
$date=jdate('Y/m/d');




$sql="select * from users where mobile=?";
$arr=array($mobile);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("این شماره همراه قبلا در سایت ثبت نام شده است");
    ?>  <script> window.history.go(-1);  </script> <?php
    exit();
}

$sql="select * from users where username=?";
$arr=array($username);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("این نام کاربری قبلا در سایت ثبت نام شده است");
    ?> <script> window.history.go(-1);  </script> <?php
    exit();
}



    $sql = "INSERT INTO users (fname,lname,username,mobile,password,date,time) VALUES ('$firstname','$lastname','$username','$mobile','$password','$date','$time')";
    $object->myquery($sql);




$text =  $firstname.str_repeat('&nbsp;', 2).$lastname. "عزیز! به خانواده کنترل ارگ خوش آمدید. نام کاربری شما " . $username. " و کلمه عبور شما ". $password." می باشد. ";
$client = new nusoap_client('http://panel.raysansms.com/smssendwebserviceforphp.asmx?wsdl', 'wsdl'
    , "", "", "", "");
$client->soap_defencoding = 'UTF-8';
$client->decode_utf8 = false;
$param = array('UserName' => '09392263154', 'Pass' => '123456', 'Domain' => 'panel.raysansms', 'SmsText' => $text, 'MobileNumber' => $mobile, 'SenderNumber' => '30006403868611', 'smsMode' => 'SaveInPhone');
$result = $send = $client->call('SendSingleSms', array('parameters' => $param), ",", false, true);



phpAlert("به خانواده کنترل ارگ خوش آمدید");
?>  <script> location.assign("index.php");  </script> <?php


