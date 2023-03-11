<?php

include("lib/connect.php");

$object=new class_parent();

$did=$_GET['id'];

$dir = "../uploads/products/" .$did;

$it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($it,
    RecursiveIteratorIterator::CHILD_FIRST);
foreach($files as $file) {
    if ($file->isDir()){
        rmdir($file->getRealPath());
    } else {
        unlink($file->getRealPath());
    }
}
rmdir($dir);


//Delete record
$sql="delete from products where id=?";
$arr=array($did);
$res=$object->myquery($sql,$arr);


phpAlert(" محصول با موفقیت حذف شد.");
?> <script> location.assign("products.php");  </script> <?php



