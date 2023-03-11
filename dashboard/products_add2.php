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

$sql = "INSERT INTO products (name,priority,cat_id) VALUES ('$name','$priority','$cat_id')";
$object->myquery($sql);

$sql="select * from products where name=?";
$arr=array($name);
$res=$object->select($sql,$arr);
$id=$res[0]['id'];

$fileDir= "../uploads/products/".$id;
mkdir($fileDir);




//////  Start of Adding Photo  1 //////
$fileDir= "../uploads/products/".$id."/";
$fileName= $fileDir. basename($_FILES['fileToUpload1']['name']);
$uploadOk= 1;
$fileType= pathinfo($fileName, PATHINFO_EXTENSION);
$fileName = $fileDir .$id."-1".".".$fileType;
if (empty(basename($_FILES['fileToUpload1']['name']))) {
    echo "<br>هیچ فایلی انتخاب نشده است.";
    $uploadOk= 0;
}
else {
    //Check file size:
    if ($_FILES['fileToUpload1']['size'] > 10000000) {
        echo "<br>اندازه فایل زیاد است. فایل کوچکتری انتخاب کنید.";
        $uploadOk= 0;
    }
    //check existing file
    if (file_exists($fileName)) {
        echo "<br>فایل تکراری است.";
        $uploadOk= 0;
    }
    //check image- an actual image or fake
    $check= getimagesize($_FILES['fileToUpload1']['tmp_name']);
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
    if (move_uploaded_file($_FILES['fileToUpload1']['tmp_name'], $fileName)) {
        echo "<br>تصویر با موفقیت آپلود شد.";
    }
    else {
        echo "<br>خطایی هنگام بارگذاری رخ داده است";
        $uploadOk= 0;
    }

}
//If Error, show 'Go back' link
else {
    echo "<a href='products.php'>Go back</a>";
}
//////  End of Adding Photo  1 //////
//////  Start of Adding Photo  2 //////
$fileDir= "../uploads/products/".$id."/";
$fileName= $fileDir. basename($_FILES['fileToUpload2']['name']);
$uploadOk= 1;
$fileType= pathinfo($fileName, PATHINFO_EXTENSION);
$fileName = $fileDir .$id."-2".".".$fileType;
if (empty(basename($_FILES['fileToUpload2']['name']))) {
  echo "<br>هیچ فایلی انتخاب نشده است.";
  $uploadOk= 0;
}
else {
  //Check file size:
  if ($_FILES['fileToUpload2']['size'] > 10000000) {
      echo "<br>اندازه فایل زیاد است. فایل کوچکتری انتخاب کنید.";
      $uploadOk= 0;
  }
  //check existing file
  if (file_exists($fileName)) {
      echo "<br>فایل تکراری است.";
      $uploadOk= 0;
  }
  //check image- an actual image or fake
  $check= getimagesize($_FILES['fileToUpload2']['tmp_name']);
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
  if (move_uploaded_file($_FILES['fileToUpload2']['tmp_name'], $fileName)) {
      echo "<br>تصویر با موفقیت آپلود شد.";
  }
  else {
      echo "<br>خطایی هنگام بارگذاری رخ داده است";
      $uploadOk= 0;
  }

}
//If Error, show 'Go back' link
else {
  echo "<a href='products.php'>Go back</a>";
}
//////  End of Adding Photo  2 //////
//////  Start of Adding Photo  3 //////
$fileDir= "../uploads/products/".$id."/";
$fileName= $fileDir. basename($_FILES['fileToUpload3']['name']);
$uploadOk= 1;
$fileType= pathinfo($fileName, PATHINFO_EXTENSION);
$fileName = $fileDir .$id."-3".".".$fileType;
if (empty(basename($_FILES['fileToUpload3']['name']))) {
echo "<br>هیچ فایلی انتخاب نشده است.";
$uploadOk= 0;
}
else {
//Check file size:
if ($_FILES['fileToUpload3']['size'] > 10000000) {
  echo "<br>اندازه فایل زیاد است. فایل کوچکتری انتخاب کنید.";
  $uploadOk= 0;
}
//check existing file
if (file_exists($fileName)) {
  echo "<br>فایل تکراری است.";
  $uploadOk= 0;
}
//check image- an actual image or fake
$check= getimagesize($_FILES['fileToUpload3']['tmp_name']);
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
if (move_uploaded_file($_FILES['fileToUpload3']['tmp_name'], $fileName)) {
  echo "<br>تصویر با موفقیت آپلود شد.";
}
else {
  echo "<br>خطایی هنگام بارگذاری رخ داده است";
  $uploadOk= 0;
}

}
//If Error, show 'Go back' link
else {
echo "<a href='products.php'>Go back</a>";
}
//////  End of Adding Photo  3 //////
  //////  Start of Adding Photo  4 //////
  $fileDir= "../uploads/products/".$id."/";
  $fileName= $fileDir. basename($_FILES['fileToUpload4']['name']);
  $uploadOk= 1;
  $fileType= pathinfo($fileName, PATHINFO_EXTENSION);
  $fileName = $fileDir .$id."-4".".".$fileType;
  if (empty(basename($_FILES['fileToUpload4']['name']))) {
      echo "<br>هیچ فایلی انتخاب نشده است.";
      $uploadOk= 0;
  }
  else {
      //Check file size:
      if ($_FILES['fileToUpload4']['size'] > 10000000) {
          echo "<br>اندازه فایل زیاد است. فایل کوچکتری انتخاب کنید.";
          $uploadOk= 0;
      }
      //check existing file
      if (file_exists($fileName)) {
          echo "<br>فایل تکراری است.";
          $uploadOk= 0;
      }
      //check image- an actual image or fake
      $check= getimagesize($_FILES['fileToUpload4']['tmp_name']);
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
      if (move_uploaded_file($_FILES['fileToUpload4']['tmp_name'], $fileName)) {
          echo "<br>تصویر با موفقیت آپلود شد.";
      }
      else {
          echo "<br>خطایی هنگام بارگذاری رخ داده است";
          $uploadOk= 0;
      }

  }
//If Error, show 'Go back' link
  else {
      echo "<a href='products.php'>Go back</a>";
  }
  //////  End of Adding Photo  4 //////
  //////  Start of Adding Photo  5 //////
  $fileDir= "../uploads/products/".$id."/";
  $fileName= $fileDir. basename($_FILES['fileToUpload5']['name']);
  $uploadOk= 1;
  $fileType= pathinfo($fileName, PATHINFO_EXTENSION);
  $fileName = $fileDir .$id."-5".".".$fileType;
  if (empty(basename($_FILES['fileToUpload5']['name']))) {
      echo "<br>هیچ فایلی انتخاب نشده است.";
      $uploadOk= 0;
  }
  else {
      //Check file size:
      if ($_FILES['fileToUpload5']['size'] > 10000000) {
          echo "<br>اندازه فایل زیاد است. فایل کوچکتری انتخاب کنید.";
          $uploadOk= 0;
      }
      //check existing file
      if (file_exists($fileName)) {
          echo "<br>فایل تکراری است.";
          $uploadOk= 0;
      }
      //check image- an actual image or fake
      $check= getimagesize($_FILES['fileToUpload5']['tmp_name']);
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
      if (move_uploaded_file($_FILES['fileToUpload5']['tmp_name'], $fileName)) {
          echo "<br>تصویر با موفقیت آپلود شد.";
      }
      else {
          echo "<br>خطایی هنگام بارگذاری رخ داده است";
          $uploadOk= 0;
      }

  }
//If Error, show 'Go back' link
  else {
      echo "<a href='products.php'>Go back</a>";
  }
  //////  End of Adding Photo  5 //////

phpAlert("محصول با موفقیت ایجاد شد.");
?> <script> location.assign("products.php");  </script> <?php



