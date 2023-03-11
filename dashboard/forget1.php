<?php

include("lib/connect.php");
include("libsms/nusoap.php");

$object=new class_parent();

$mobile = $_POST['mobile'];
$mobile=check_injection($mobile);


$sql="select * from users where mobile=?";
$arr=array($mobile);
$num=$object->num($sql,$arr);
if($num>0){
    $res=$object->select($sql,$arr);
    $password=$res[0]['password'];
    $firstname=$res[0]['fname'];
    $lastname=$res[0]['lname'];
    $username=$res[0]['username'];

    $text =  $firstname.str_repeat('&nbsp;', 2).$lastname. "عزیز! به خانواده کنترل ارگ خوش آمدید. نام کاربری شما " . $username. " و کلمه عبور شما ". $password." می باشد. ";
    $client = new nusoap_client('http://panel.raysansms.com/smssendwebserviceforphp.asmx?wsdl', 'wsdl'
        , "", "", "", "");
    $client->soap_defencoding = 'UTF-8';
    $client->decode_utf8 = false;
    $param = array('UserName' => '09392263154', 'Pass' => '123456', 'Domain' => 'panel.raysansms', 'SmsText' => $text, 'MobileNumber' => $mobile, 'SenderNumber' => '30006403868611', 'smsMode' => 'SaveInPhone');
    $result = $send = $client->call('SendSingleSms', array('parameters' => $param), ",", false, true);



    phpAlert("نام کاربری و کلمه عبور به شماره همراه شما پیامک شد");
    ?>  <script> location.assign("index.php");  </script> <?php
    exit();
}

else{
    phpAlert("این نام کاربری قبلا در سایت ثبت نام نشده است");
    ?> <script> window.history.go(-1);  </script> <?php

}







phpAlert("به خانواده کنترل ارگ خوش آمدید");
?>  <script> location.assign("index.php");  </script> <?php


