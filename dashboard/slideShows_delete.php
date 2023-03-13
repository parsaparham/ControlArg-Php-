<?php

include("lib/connect.php");

$object=new class_parent();

$did=$_GET['id'];

//Get Full name of file (name and extention) for deleting
$path = '../uploads/slideShows/'.$did.".*";
$filenames = glob($path);
$file=$filenames[0];
$fileType= pathinfo($file, PATHINFO_EXTENSION);
$image="../uploads/slideShows/".$did.".".$fileType;
//delete file
unlink($image);


//Delete record
$sql="delete from slideShows where id=?";
$arr=array($did);
$res=$object->myquery($sql,$arr);


phpAlert(" اسلایدشو با موفقیت حذف شد.");
?> <script> location.assign("slideShows.php");  </script> <?php



