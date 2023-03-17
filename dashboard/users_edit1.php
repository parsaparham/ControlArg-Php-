<?php
session_start();
include("lib/classDashboard.php");
include("lib/connect.php");
include("lib/jdf.php");


$object = new class_parent();
$mobile = $_SESSION['mobile'];
$sql = "select * from users where mobile=?";
$arr = array($mobile);
$res = $object->select($sql, $arr);
$per_id = $res[0]['per_id'];
if ($per_id == 3) {

    $did = $_GET['id'];

    $date = jdate('Y/n/d');


    $header = new header();
    $header->put_header();
    ?>

    <!-- BEGIN WRAPPER -->
    <div id="wrapper">


        <!-- BEGIN SIDEBAR -->
        <?php
        $sidbar = new sidbar();
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
                        <div class="breadcrumb-left">
                            <?php echo jdate('l,Y/m/d'); ?>
                            <i class="icon-calendar"></i>
                        </div><!-- /.breadcrumb-left -->
                    </div><!-- /.breadcrumb-box -->
                </div><!-- /.col-md-12 -->
                <!-- END BREADCRUMB -->

                <div class="col-md-12">


                    <?php

                    //   $adminButtons=new adminButtons();
                    //  $adminButtons->put_adminButtons();

                    $sql = "select * from users where id=?";
                    $arr = array($did);
                    $res = $object->select($sql, $arr);
                    $fname = $res[0]['fname'];
                    $lname = $res[0]['lname'];
                    $username = $res[0]['username'];
                    $password = $res[0]['password'];
                    $per_id = $res[0]['per_id'];
                    $email = $res[0]['email'];
                    $address = $res[0]['address'];
                    $mobile = $res[0]['mobile'];
                    $active = $res[0]['active'];

                    ?>


                    <div class="col-lg-6">
                        <div class="portlet box border shadow">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h3 class="title">
                                        <i class="icon-settings"></i>
                                        ویرایش کاربر </h3>
                                </div><!-- /.portlet-title -->
                                <div class="buttons-box">
                                    <a class="btn btn-sm btn-default btn-round btn-fullscreen" rel="tooltip"
                                       title="تمام صفحه" href="#">
                                        <i class="icon-size-fullscreen"></i>
                                    </a>
                                    <a class="btn btn-sm btn-default btn-round btn-collapse" rel="tooltip"
                                       title="کوچک کردن" href="#">
                                        <i class="icon-arrow-up"></i>
                                    </a>
                                </div><!-- /.buttons-box -->
                            </div><!-- /.portlet-heading -->
                            <div class="portlet-body">
                                <form id="advanced-form" method="post" role="form" action="users_edit2.php">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>نام</label>
                                            <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-note"></i>
                                    </span>
                                                <input type="text" class="form-control round" id="firstname"
                                                       name="firstname" value="<?php echo $fname; ?>">
                                            </div><!-- /.input-group-->
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>نام خانوادگی</label>
                                            <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-note"></i>
                                    </span>
                                                <input type="text" class="form-control round" id="lastname"
                                                       name="lastname" value="<?php echo $lname; ?>">
                                            </div><!-- /.input-group-->
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>نام کاربری</label>
                                            <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-user"></i>
                                    </span>
                                                <input type="text" class="form-control round" id="username"
                                                       name="username" value="<?php echo $username; ?>">
                                            </div><!-- /.input-group-->
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>تلفن همراه</label>
                                            <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-user"></i>
                                    </span>
                                                <input type="text" class="form-control round" name="mobile"
                                                       value="<?php echo $mobile; ?>" required>
                                            </div><!-- /.input-group-->
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>رمز عبور</label>
                                            <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-key"></i>
                                    </span>
                                                <input type="password" class="form-control round ltr text-left"
                                                       id="password" name="password" value="<?php echo $password; ?>">
                                            </div><!-- /.input-group-->
                                        </div><!-- /.form-group -->

                                        <div class="portlet-body">
                                            <div class="form-group">
                                                <label>انتخاب سطح دسترسی</label>
                                                <select class="form-control select2 round" name="permission">
                                                    <?php if($per_id==1){ ?>
                                                    <option selected><?php echo member(1) ?></option>
                                                        <option><?php echo member(3)  ?></option>
                                                        <?php }else{ ?>
                                                        <option selected><?php echo member(3) ?></option>
                                                        <option><?php echo member(1)  ?></option>
                                                        <?php } ?>
                                                </select>
                                            </div><!-- /.form-group -->
                                        </div>


                                        <div class="form-group">
                                            <label> ایمیل</label>
                                            <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-key"></i>
                                    </span>
                                                <input type="text" class="form-control round ltr text-left"
                                                       id="password" name="email" value="<?php echo $email; ?>">
                                            </div><!-- /.input-group-->
                                        </div><!-- /.form-group -->

                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label> آدرس</label>
                                        <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-key"></i>
                                    </span>
                                            <input type="text" class="form-control round ltr text-left"
                                                   id="password" name="address" value="<?php echo $address; ?>">
                                        </div><!-- /.input-group-->
                                    </div><!-- /.form-group -->


                                    <!-- Input Group  -->
                                    <div class="input-group">
                                        <label>
                                            <input name="active" value="enable"
                                                   type="radio" <?php if ($active == 1) {
                                                echo "checked=checked";
                                            } ?>>
                                            فعال
                                        </label>
                                        <?php echo str_repeat('&nbsp;', 5) ?>
                                        <label>
                                            <input name="active" value="disable"
                                                   type="radio" <?php if ($active == 0) {
                                                echo "checked=checked";
                                            } ?>>
                                            غیرفعال
                                        </label>
                                    </div>
                                    <!-- /Input Group  -->

                                    <br/>

                                    <input type="hidden" name="id" value="<?php echo $did ?>">


                            </div>
                            <!-- /.form-body -->

                            <div class="form-actions">
                                <button type="submit" class="btn btn-info btn-round">
                                    <i class="icon-check"></i>
                                    ثبت
                                </button>
                                <a href="categories.php">
                                    <button type="button" class="btn btn-warning btn-round">
                                        بازگشت
                                        <i class="icon-close"></i>
                                    </button>
                                </a>
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
    $footer = new footer();
    $footer->put_footer();
} else {
    ?>
    <script> location.assign("login.php");  </script> <?php

}
?>