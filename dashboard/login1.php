<?php
session_destroy();
session_start();
include("lib/connect.php");

$object = new class_parent();


$username = $_POST['username'];
$username = check_injection($username);
$password = $_POST['password'];
$password = check_injection($password);


$sql1 = "select * from users where username=?";
$arr = array($username);
$num1 = $object->num($sql1, $arr);

$sql2 = "select * from users where mobile=?";
$num2 = $object->num($sql2, $arr);

if ($num1 > 0) {
    $res1 = $object->select($sql1, $arr);
    $pass = $res1[0]['password'];
    $mobile = $res1[0]['mobile'];
    if ($password == $pass) {
        $_SESSION['mobile']=$mobile;
        ?>
        <script> location.assign("dashboard.php");  </script> <?php } else {
        phpAlert("نام کاربری یا کلمه عبور اشتباه است");
        ?>
        <script> window.history.go(-1);  </script> <?php
    }

} elseif ($num2 > 0) {
    $res2 = $object->select($sql2, $arr);
    $pass = $res2[0]['password'];
    $mobile = $res2[0]['mobile'];
    if ($password == $pass) {
        $_SESSION['mobile']=$mobile;
        ?>
        <script> location.assign("dashboard.php");  </script> <?php } else {
        phpAlert("شماره همراه یا کلمه عبور اشتباه است");
        ?>
        <script> window.history.go(-1);  </script> <?php
    }
} else {
    phpAlert("این نام کاربری یا شماره همراه در سامانه وجود ندارد");
    ?>
    <script> window.history.go(-1);  </script> <?php
}



