<?php

include("lib/connect.php");
include("libsms/nusoap.php");

$object=new class_parent();

$did=$_GET['id'];

//Get Category name for delete file
$sql="select * from categories where id=?";
$arr=array($did);
$res=$object->select($sql,$arr);
$name=$res[0]['name'];
//Get Full name of file (name and extention) for deleting
$path = '../uploads/categories/'.$name.".*";
$filenames = glob($path);
$file=$filenames[0];
$fileType= pathinfo($file, PATHINFO_EXTENSION);
$image="../uploads/categories/".$name.".".$fileType;
//delete file
echo $image;
unlink($image);



//Delete record
$sql="delete from categories where id=?";
$res=$object->myquery($sql,$arr);


phpAlert("دسته بندی با موفقیت حذف شد.");
?> <script> location.assign("categories.php");  </script> <?php



