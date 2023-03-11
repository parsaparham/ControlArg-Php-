<?php

include("lib/connect.php");
include("libsms/nusoap.php");

$object=new class_parent();

$name = $_POST['name'];
$name=check_injection($name);
$priority = $_POST['priority'];
$priority=check_injection($priority);
$category = $_POST['category'];
$category=check_injection($category);
$id = $_POST['id'];
$id=check_injection($id);

$active=$_POST['active'];
if($active=="enable"){$active=1;}
if($active=="disable"){$active=0;}

$sql="select * from categories where name=?";
$arr=array($category);
$res=$object->select($sql,$arr);
$cat_id=$res[0]['id'];

$sql="select * from products where name=?";
$arr=array($name);
$num=$object->num($sql,$arr);
if($num>0){
    phpAlert("نام محصول تکراری است");
    ?> <script> window.history.go(-1);  </script> <?php
    die();
}

$sql = "update products set  name='$name',priority='$priority',cat_id='$cat_id',active='$active' where id=?";
$arr = array($id);
$object->myquery($sql, $arr);


//if UploadFile1 Exist First Should delete before adding
if (!empty(basename($_FILES['fileToUpload1']['name']))) {
    $path = "../uploads/products/" . $id . "/" . $id . "-1.*";
    $filenames = glob($path);
    $file = $filenames[0];
    $fileType = pathinfo($file, PATHINFO_EXTENSION);
    $image = "../uploads/products/" . $id . "/" . $id . "-1" . "." . $fileType;
    unlink($image);

//////  Start of Editing Photo  1 //////
    $fileDir= "../uploads/products/".$id."/";
    $fileName= $fileDir. basename($_FILES['fileToUpload1']['name']);
    $uploadOk= 1;
    $fileType= pathinfo($fileName, PATHINFO_EXTENSION);
    $fileName = $fileDir .$id."-1".".".$fileType;
    if (empty(basename($_FILES['fileToUpload1']['name']))) {
        echo "<br>هیچ فایلی انتخاب نشده است.";
        $uploadOk = 0;
    } else {
        //Check file size:
        if ($_FILES['fileToUpload1']['size'] > 10000000) {
            echo "<br>اندازه فایل زیاد است. فایل کوچکتری انتخاب کنید.";
            $uploadOk = 0;
        }
        //check existing file
        if (file_exists($fileName)) {
            echo "<br>فایل تکراری است.";
            $uploadOk = 0;
        }
        //check image- an actual image or fake
        $check = getimagesize($_FILES['fileToUpload1']['tmp_name']);
        //if actual image:
        if ($check !== false) {
            //check file extensions: you can select only (jpg, jpeg, png, gif) file
            if ($fileType != 'jpg' && $fileType != 'JPG' && $fileType != 'jpeg' && $fileType != 'JPEG' && $fileType != 'png' && $fileType != 'PNG' && $fileType != 'gif' && $fileType != 'GIF') {
                echo "<br>فایل انتخاب شده معتبر نیست. پسوند jpg, jpeg, png, gif انتخاب کنید.";
                $uploadOk = 0;
            }
        } //if fake image:
        else {
            echo "<br>فایل انتخاب شده تصویر نیست.";
            $uploadOk = 0;
        }
    }
//check $uploadok variable
    if ($uploadOk !== 0) {
        if (move_uploaded_file($_FILES['fileToUpload1']['tmp_name'], $fileName)) {
            echo "<br>تصویر با موفقیت آپلود شد.";
        } else {
            echo "<br>خطایی هنگام بارگذاری رخ داده است";
            $uploadOk = 0;
        }

    } //If Error, show 'Go back' link
    else {
        echo "<a href='products.php'>Go back</a>";
    }
}
//////  End of Editting Photo  1 //////



//if UploadFile2 Exist First Should delete before adding
if (!empty(basename($_FILES['fileToUpload2']['name']))) {
    $path = "../uploads/products/" . $id . "/" . $id . "-2.*";
    $filenames = glob($path);
    $file = $filenames[0];
    $fileType = pathinfo($file, PATHINFO_EXTENSION);
    $image = "../uploads/products/" . $id . "/" . $id . "-2" . "." . $fileType;
    unlink($image);

//////  Start of Editting Photo  2 //////
    $fileDir = "../uploads/products/" . $id . "/";
    $fileName = $fileDir . basename($_FILES['fileToUpload2']['name']);
    $uploadOk = 1;
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileName = $fileDir . $id . "-2" . "." . $fileType;
    if (empty(basename($_FILES['fileToUpload2']['name']))) {
        echo "<br>هیچ فایلی انتخاب نشده است.";
        $uploadOk = 0;
    } else {
        //Check file size:
        if ($_FILES['fileToUpload2']['size'] > 10000000) {
            echo "<br>اندازه فایل زیاد است. فایل کوچکتری انتخاب کنید.";
            $uploadOk = 0;
        }
        //check existing file
        if (file_exists($fileName)) {
            echo "<br>فایل تکراری است.";
            $uploadOk = 0;
        }
        //check image- an actual image or fake
        $check = getimagesize($_FILES['fileToUpload2']['tmp_name']);
        //if actual image:
        if ($check !== false) {
            //check file extensions: you can select only (jpg, jpeg, png, gif) file
            if ($fileType != 'jpg' && $fileType != 'JPG' && $fileType != 'jpeg' && $fileType != 'JPEG' && $fileType != 'png' && $fileType != 'PNG' && $fileType != 'gif' && $fileType != 'GIF') {
                echo "<br>فایل انتخاب شده معتبر نیست. پسوند jpg, jpeg, png, gif انتخاب کنید.";
                $uploadOk = 0;
            }
        } //if fake image:
        else {
            echo "<br>فایل انتخاب شده تصویر نیست.";
            $uploadOk = 0;
        }
    }
//check $uploadok variable
    if ($uploadOk !== 0) {
        if (move_uploaded_file($_FILES['fileToUpload2']['tmp_name'], $fileName)) {
            echo "<br>تصویر با موفقیت آپلود شد.";
        } else {
            echo "<br>خطایی هنگام بارگذاری رخ داده است";
            $uploadOk = 0;
        }

    } //If Error, show 'Go back' link
    else {
        echo "<a href='products.php'>Go back</a>";
    }
}
//////  End of Editting Photo  2 //////


//if UploadFile3 Exist First Should delete before adding
if (!empty(basename($_FILES['fileToUpload3']['name']))) {
    $path = "../uploads/products/" . $id . "/" . $id . "-3.*";
    $filenames = glob($path);
    $file = $filenames[0];
    $fileType = pathinfo($file, PATHINFO_EXTENSION);
    $image = "../uploads/products/" . $id . "/" . $id . "-3" . "." . $fileType;
    unlink($image);
//////  Start of Editting Photo  3 //////
    $fileDir = "../uploads/products/" . $id . "/";
    $fileName = $fileDir . basename($_FILES['fileToUpload3']['name']);
    $uploadOk = 1;
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileName = $fileDir . $id . "-3" . "." . $fileType;
    if (empty(basename($_FILES['fileToUpload3']['name']))) {
        echo "<br>هیچ فایلی انتخاب نشده است.";
        $uploadOk = 0;
    } else {
//Check file size:
        if ($_FILES['fileToUpload3']['size'] > 10000000) {
            echo "<br>اندازه فایل زیاد است. فایل کوچکتری انتخاب کنید.";
            $uploadOk = 0;
        }
//check existing file
        if (file_exists($fileName)) {
            echo "<br>فایل تکراری است.";
            $uploadOk = 0;
        }
//check image- an actual image or fake
        $check = getimagesize($_FILES['fileToUpload3']['tmp_name']);
//if actual image:
        if ($check !== false) {
            //check file extensions: you can select only (jpg, jpeg, png, gif) file
            if ($fileType != 'jpg' && $fileType != 'JPG' && $fileType != 'jpeg' && $fileType != 'JPEG' && $fileType != 'png' && $fileType != 'PNG' && $fileType != 'gif' && $fileType != 'GIF') {
                echo "<br>فایل انتخاب شده معتبر نیست. پسوند jpg, jpeg, png, gif انتخاب کنید.";
                $uploadOk = 0;
            }
        } //if fake image:
        else {
            echo "<br>فایل انتخاب شده تصویر نیست.";
            $uploadOk = 0;
        }
    }
//check $uploadok variable
    if ($uploadOk !== 0) {
        if (move_uploaded_file($_FILES['fileToUpload3']['tmp_name'], $fileName)) {
            echo "<br>تصویر با موفقیت آپلود شد.";
        } else {
            echo "<br>خطایی هنگام بارگذاری رخ داده است";
            $uploadOk = 0;
        }

    } //If Error, show 'Go back' link
    else {
        echo "<a href='products.php'>Go back</a>";
    }
}
//////  End of Editting Photo  3 //////



//if UploadFile4 Exist First Should delete before adding
if (!empty(basename($_FILES['fileToUpload4']['name']))) {
    $path = "../uploads/products/" . $id . "/" . $id . "-4.*";
    $filenames = glob($path);
    $file = $filenames[0];
    $fileType = pathinfo($file, PATHINFO_EXTENSION);
    $image = "../uploads/products/" . $id . "/" . $id . "-4" . "." . $fileType;
    unlink($image);
    //////  Start of Editting Photo  4 //////
    $fileDir = "../uploads/products/" . $id . "/";
    $fileName = $fileDir . basename($_FILES['fileToUpload4']['name']);
    $uploadOk = 1;
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileName = $fileDir . $id . "-4" . "." . $fileType;
    if (empty(basename($_FILES['fileToUpload4']['name']))) {
        echo "<br>هیچ فایلی انتخاب نشده است.";
        $uploadOk = 0;
    } else {
        //Check file size:
        if ($_FILES['fileToUpload4']['size'] > 10000000) {
            echo "<br>اندازه فایل زیاد است. فایل کوچکتری انتخاب کنید.";
            $uploadOk = 0;
        }
        //check existing file
        if (file_exists($fileName)) {
            echo "<br>فایل تکراری است.";
            $uploadOk = 0;
        }
        //check image- an actual image or fake
        $check = getimagesize($_FILES['fileToUpload4']['tmp_name']);
        //if actual image:
        if ($check !== false) {
            //check file extensions: you can select only (jpg, jpeg, png, gif) file
            if ($fileType != 'jpg' && $fileType != 'JPG' && $fileType != 'jpeg' && $fileType != 'JPEG' && $fileType != 'png' && $fileType != 'PNG' && $fileType != 'gif' && $fileType != 'GIF') {
                echo "<br>فایل انتخاب شده معتبر نیست. پسوند jpg, jpeg, png, gif انتخاب کنید.";
                $uploadOk = 0;
            }
        } //if fake image:
        else {
            echo "<br>فایل انتخاب شده تصویر نیست.";
            $uploadOk = 0;
        }
    }
    //check $uploadok variable
    if ($uploadOk !== 0) {
        if (move_uploaded_file($_FILES['fileToUpload4']['tmp_name'], $fileName)) {
            echo "<br>تصویر با موفقیت آپلود شد.";
        } else {
            echo "<br>خطایی هنگام بارگذاری رخ داده است";
            $uploadOk = 0;
        }

    } //If Error, show 'Go back' link
    else {
        echo "<a href='products.php'>Go back</a>";
    }
}
  //////  End of Editting Photo  4 //////



//if UploadFile5 Exist First Should delete before adding
if (!empty(basename($_FILES['fileToUpload5']['name']))) {
    $path = "../uploads/products/" . $id . "/" . $id . "-5.*";
    $filenames = glob($path);
    $file = $filenames[0];
    $fileType = pathinfo($file, PATHINFO_EXTENSION);
    $image = "../uploads/products/" . $id . "/" . $id . "-5" . "." . $fileType;
    unlink($image);
    //////  Start of Editting Photo  5 //////
    $fileDir = "../uploads/products/" . $id . "/";
    $fileName = $fileDir . basename($_FILES['fileToUpload5']['name']);
    $uploadOk = 1;
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileName = $fileDir . $id . "-5" . "." . $fileType;
    if (empty(basename($_FILES['fileToUpload5']['name']))) {
        echo "<br>هیچ فایلی انتخاب نشده است.";
        $uploadOk = 0;
    } else {
        //Check file size:
        if ($_FILES['fileToUpload5']['size'] > 10000000) {
            echo "<br>اندازه فایل زیاد است. فایل کوچکتری انتخاب کنید.";
            $uploadOk = 0;
        }
        //check existing file
        if (file_exists($fileName)) {
            echo "<br>فایل تکراری است.";
            $uploadOk = 0;
        }
        //check image- an actual image or fake
        $check = getimagesize($_FILES['fileToUpload5']['tmp_name']);
        //if actual image:
        if ($check !== false) {
            //check file extensions: you can select only (jpg, jpeg, png, gif) file
            if ($fileType != 'jpg' && $fileType != 'JPG' && $fileType != 'jpeg' && $fileType != 'JPEG' && $fileType != 'png' && $fileType != 'PNG' && $fileType != 'gif' && $fileType != 'GIF') {
                echo "<br>فایل انتخاب شده معتبر نیست. پسوند jpg, jpeg, png, gif انتخاب کنید.";
                $uploadOk = 0;
            }
        } //if fake image:
        else {
            echo "<br>فایل انتخاب شده تصویر نیست.";
            $uploadOk = 0;
        }
    }
    //check $uploadok variable
    if ($uploadOk !== 0) {
        if (move_uploaded_file($_FILES['fileToUpload5']['tmp_name'], $fileName)) {
            echo "<br>تصویر با موفقیت آپلود شد.";
        } else {
            echo "<br>خطایی هنگام بارگذاری رخ داده است";
            $uploadOk = 0;
        }

    } //If Error, show 'Go back' link
    else {
        echo "<a href='products.php'>Go back</a>";
    }
}
  //////  End of Editting Photo  5 //////

phpAlert("محصول با موفقیت ویرایش شد.");
?> <script> location.assign("products.php");  </script> <?php



