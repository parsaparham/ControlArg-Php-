<?php
session_start();
include("lib/classDashboard.php");
include ("lib/connect.php");
include ("lib/jdf.php");

$object=new class_parent();
$mobile=$_SESSION['mobile'];
$sql="select * from users where mobile=?";
$arr=array($mobile);
$res=$object->select($sql,$arr);
$per_id=$res[0]['per_id'];
if($per_id==3){

    $header=new header();
    $header->put_header();


    $date=jdate('Y/m/d');

    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $date = $year_number . "/" . $month_number . "/" . $day_number;

    $day=jdate('l');

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
                            <?php //echo jdate('l,Y/m/d G:i');  ?>
                            <?php echo jdate('l,Y/m/d');  ?>
                            <i class="icon-calendar"></i>
                        </div><!-- /.breadcrumb-left -->
                    </div><!-- /.breadcrumb-box -->
                </div><!-- /.col-md-12 -->
                <!-- END BREADCRUMB -->

                <?php

             //   $adminButtons=new adminButtons();
            //    $adminButtons->put_adminButtons();

                ?>

                <div class="col-lg-12">
                    <div class="portlet box border shadow">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h3 class="title">
                                    <i class="icon-frane"></i>
                                      کاربران
                                </h3>
                            </div><!-- /.portlet-title -->
                            <div class="buttons-box">

                                <div class="code-modal hide">

                                </div>
                                <a class="btn btn-sm btn-default btn-round btn-fullscreen" rel="tooltip" title="تمام صفحه" href="#">
                                    <i class="icon-size-fullscreen"></i>
                                </a>
                                <a class="btn btn-sm btn-default btn-round btn-collapse" rel="tooltip" title="کوچک کردن" href="#">
                                    <i class="icon-arrow-up"></i>
                                </a>
                            </div><!-- /.buttons-box -->
                         <!--   <button onclick="location.href='users_add1.php'" class="btn btn-success curve">ایجاد کاربر جدید</button>  -->
                        </div><!-- /.portlet-heading -->


                        <?php
                        $sql2="select * from users";
                        $num2=$object->num($sql2);
                        if($num2==0){echo " تاکنون هیچ  کاربری نداشته اید. ";goto a;}

                        ?>

                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="data-table">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>ID</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>نام کاربری</th>
                                        <th>کلمه عبور</th>
                                        <th>شماره موبایل</th>
                                        <th>ایمیل</th>
                                        <th>آدرس</th>
                                        <th>تاریخ ثبت نام </th>
                                        <th>ساعت ثبت نام </th>
                                        <th>سطح دسترسی </th>
                                        <th>فعال / غیرفعال </th>
                                        <th>ویرایش </th>
                                        <th>حذف </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $sql4="select * from users order by id desc";
                                    $res4=$object->select($sql4);
                                    $radif=0;
                                    foreach ($res4 as $row4){
                                        $radif=$radif+1;
                                        $fname=$row4['fname'];
                                        $lname=$row4['lname'];
                                        $username=$row4['username'];
                                        $passsword=$row4['password'];
                                        $mobile=$row4['mobile'];
                                        $email=$row4['email'];
                                        $address=$row4['address'];
                                        $dateOfRegistration=$row4['date'];
                                        $timeOfRegistration=$row4['time'];
                                        $address=$row4['address'];
                                        $per_id=$row4['per_id'];
                                        $id=$row4['id'];
                                        $active=$row4['active'];
                                        if($active==0){$s="style=background-color:LightGray;color:black";}else{$s="";}
                                        if($active==0){$n="غیرفعال";}else{$n="فعال";}
                                        $member=member($per_id);

                                    ?>

                                        <tr>
                                            <td <?php echo $s; ?>><?php echo $radif;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $id;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $fname. str_repeat('&nbsp;', 2).$lname;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $username;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $passsword;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $mobile;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $email;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $address;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $dateOfRegistration;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $timeOfRegistration;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $member;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $n;  ?></td>
                                            <td <?php echo $s; ?>><a href="users_edit1.php?id=<?php  echo $id; ?>"><span class="badge badge-warning">ویرایش</span></a></td>
                                            <td <?php echo $s; ?>><a href="users_delete.php?id=<?php  echo $id; ?>"><span class="badge badge-danger">حذف</span></a></td>
                                        <?php
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /.portlet-body -->
                    </div><!-- /.portlet -->
                </div><!-- /.col-lg-12 -->

                <?php
                a:;
                ?>

            </div><!-- /.col-md-12 -->





        </div><!-- /.row -->
    </div><!-- /#page-content -->
    <!-- END PAGE CONTENT -->

    </div><!-- /#wrapper -->
    <!-- END WRAPPER -->






    <!--  For Search Box   END  -->

    <?php
    $footer=new footer();
    $footer->put_footer();
}
else{
    ?>  <script> location.assign("../index.php");  </script> <?php

}
?>