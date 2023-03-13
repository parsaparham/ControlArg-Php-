<?php

include("lib/connect.php");

$object=new class_parent();

$name = $_POST['name'];
$name=check_injection($name);
$priority = $_POST['priority'];
$priority=check_injection($priority);
$id = $_POST['id'];
$id=check_injection($id);

$active=$_POST['active'];
if($active=="enable"){$active=1;}
if($active=="disable"){$active=0;}


$sql="select * from slideShows where name=? and id!=$id";
$arr=array($name);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("نام اسلایدشو تکراری است");
    ?> <script> window.history.go(-1);  </script> <?php
    die();
}




$sql = "update slideShows set name='$name', priority='$priority',active='$active' where id=?";
$arr = array($id);
$object->myquery($sql, $arr);




if (!empty(basename($_FILES['fileToUpload']['name']))) {
//Get Full name of file (name and extention) for deleting
    $path = '../uploads/slideShows/' . $id . ".*";
    $filenames = glob($path);
    $file = $filenames[0];
    $fileType = pathinfo($file, PATHINFO_EXTENSION);
    $image = "../uploads/slideShows/" . $id . "." . $fileType;
//delete file
    unlink($image);
}




//////  Start of Adding Photo   //////

$fileDir= "../uploads/slideShows/";
$fileName= $fileDir. basename($_FILES['fileToUpload']['name']);

$uploadOk= 1;
$fileType= pathinfo($fileName, PATHINFO_EXTENSION);
$fileName = $fileDir .$id.".".$fileType;


if (empty(basename($_FILES['fileToUpload']['name']))) {
    echo "<br>هیچ فایلی انتخاب نشده است.";
    $uploadOk= 0;
}
else {
    //Check file size:
    if ($_FILES['fileToUpload']['size'] > 10000000) {
        echo "<br>اندازه فایل زیاد است. فایل کوچکتری انتخاب کنید.";
        $uploadOk= 0;
    }
    //check existing file
    if (file_exists($fileName)) {
        echo "<br>فایل تکراری است.";
        $uploadOk= 0;
    }
    //check image- an actual image or fake
    $check= getimagesize($_FILES['fileToUpload']['tmp_name']);
    //if actual image:
    if ($check !== false) {
        //check file extensions: you can select only (jpg, jpeg, png, gif) file
        if ($fileType !='jpg' && $fileType !='JPG' && $fileType != 'jpeg' && $fileType!='JPEG' && $fileType != 'png' && $fileType != 'PNG' && $fileType != 'gif' && $fileType != 'GIF') {
            echo "<br>فایل انتخاب شده معتبر نیست. پسوند jpg, jpeg, png, gif انتخاب کنید.";
            $uploadOk= 0;
        }
    }
    //if fake image:
    else {
        echo "<br>فایل انتخاب شده تصویر نیست.";
        $uploadOk= 0;
    }
}
//check $uploadok variable
if ($uploadOk !== 0) {
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $fileName)) {
        echo "<br>تصویر با موفقیت آپلود شد.";
    }
    else {
        echo "<br>خطایی هنگام بارگذاری رخ داده است";
        $uploadOk= 0;
    }

}
//If Error, show 'Go back' link
else {
    echo "<a href='slideShows.php'>Go back</a>";
}

//////  End of Adding Photo   //////




phpAlert(" اسلایدشو با موفقیت ویرایش شد.");
?> <script> location.assign("slideShows.php");  </script> <?php



