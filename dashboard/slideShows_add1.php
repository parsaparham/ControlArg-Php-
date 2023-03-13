<?php
session_start();
include("lib/classDashboard.php");
include("lib/connect.php");
include ("lib/jdf.php");


$object=new class_parent();
$mobile=$_SESSION['mobile'];
$sql="select * from users where mobile=?";
$arr=array($mobile);
$res=$object->select($sql,$arr);
$per_id=$res[0]['per_id'];
if($per_id==3){



$date=jdate('Y/n/d');
$time=jdate('h:i');


$header=new header();
$header->put_header();
?>
              
        <!-- BEGIN WRAPPER -->
        <div id="wrapper">


            <!-- BEGIN SIDEBAR -->
            <?php
            $sidbar=new sidbar();
            $sidbar->put_sidebar();
            ?>
            <!-- END SIDEBAR -->


            <!-- BEGIN PAGE CONTENT -->
            <div id="page-content">
                <div class="row">                    
                    <!-- BEGIN BREADCRUMB -->
                    <div class="col-md-12">
                        <div class="breadcrumb-box border shadow"> 
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php">پیشخوان</a></li>
                            </ul>
                            <div  class="breadcrumb-left">
                                 <?php echo jdate('l,Y/m/d');  ?>
                                <i class="icon-calendar"></i>
                            </div><!-- /.breadcrumb-left -->
                        </div><!-- /.breadcrumb-box -->
                    </div><!-- /.col-md-12 -->
                    <!-- END BREADCRUMB -->                    
                    
                    <div class="col-md-12">




                        <?php

                     //   $adminButtons=new adminButtons();
                      //  $adminButtons->put_adminButtons();

                        ?>





                        <div class="col-lg-6">
                            <div class="portlet box border shadow">
                                <div class="portlet-heading">
                                    <div class="portlet-title">
                                        <h3 class="title">
                                            <i class="icon-settings"></i>
ایجاد اسلایدشو جدید                                        </h3>
                                    </div><!-- /.portlet-title -->
                                    <div class="buttons-box">
                                        <a class="btn btn-sm btn-default btn-round btn-fullscreen" rel="tooltip" title="تمام صفحه" href="#">
                                            <i class="icon-size-fullscreen"></i>
                                        </a>
                                        <a class="btn btn-sm btn-default btn-round btn-collapse" rel="tooltip" title="کوچک کردن" href="#">
                                            <i class="icon-arrow-up"></i>
                                        </a>
                                    </div><!-- /.buttons-box -->
                                </div><!-- /.portlet-heading -->
                                <div class="portlet-body">
                                    <form method="post" role="form" action="slideShows_add2.php" enctype="multipart/form-data">
                                        <div class="form-body">



                                            <div class="form-group">
                                                <label> نام اسلایدشو </label>
                                                <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-user"></i>
                                                </span>
                                                    <input name="name" type="text" class="form-control" placeholder="  مثلا : مناسبت حضرت علی (ع) ">
                                                </div><!-- /.input-group -->
                                            </div><!-- /.form-group -->


                                            <div class="form-group">
                                                <label>اولویت</label>
                                                <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-user"></i>
                                                </span>
                                                    <input name="priority" type="number" class="form-control" placeholder=" مثلا 1 ">
                                                </div><!-- /.input-group -->
                                            </div><!-- /.form-group -->


                                            <div class="form-group relative">
                                                <input type="file" class="form-control">
                                                <label>آپلود فایل</label>
                                                <div class="input-group round">
                                                    <input type="file" name="fileToUpload"  placeholder="برای آپلود کلیک کنید">
                                                    <span class="input-group-btn input-group-sm">
                                                    <button type="button" class="btn btn-info">
                                                        <i class="icon-picture"></i>
                                                        آپلود عکس
                                                    </button>
                                                </span>
                                                </div><!-- /.input-group -->
                                                <div class="help-block"></div>
                                            </div><!-- /.form-group -->



                                        </div><!-- /.form-body -->

                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-info btn-round">
                                                <i class="icon-check"></i>
                                                ثبت
                                            </button>
                                            <a href="slideShows.php"><button type="button" class="btn btn-warning btn-round">
                                                بازگشت
                                                <i class="icon-close"></i>
                                                </button></a>
                                        </div><!-- /.form-actions -->
                                    </form>



                                </div><!-- /.portlet-body -->
                            </div><!-- /.portlet -->

                        </div><!-- /.col-lg-6 -->





                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /#page-content -->
            <!-- END PAGE CONTENT -->

        </div><!-- /#wrapper -->
        <!-- END WRAPPER -->
        
     <?php
$footer=new footer();
$footer->put_footer();
}
else{
    ?>  <script> location.assign("login.php");  </script> <?php

}
?>