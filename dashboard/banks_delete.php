<?php

include("lib/connect.php");
include("libsms/nusoap.php");

$object=new class_parent();

$did=$_GET['id'];


//Delete record
$sql="delete from banks where id=?";
$arr=array($did);
$res=$object->myquery($sql,$arr);


phpAlert("حساب بانکی با موفقیت حذف شد.");
?> <script> location.assign("banks.php");  </script> <?php



