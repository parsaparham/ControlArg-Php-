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
$user_id=$res[0]['id'];

if($per_id==3) {

    $header = new header();
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
                            <li><a href="dashboard.html">پیشخوان</a></li>
                        </ul>
                        <div  class="breadcrumb-left">
                            <?php echo jdate('l,Y/m/d G:i');  ?>
                            <i class="icon-calendar"></i>
                        </div><!-- /.breadcrumb-left -->
                    </div><!-- /.breadcrumb-box -->
                </div><!-- /.col-md-12 -->
                <!-- END BREADCRUMB -->

                <?php

                             //   $adminButtons=new adminButtons();
                             //   $adminButtons->put_adminButtons();

                                ?>


                <div class="col-lg-12">
                    <div class="portlet box border shadow">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h3 class="title">
                                    <i class="icon-frane"></i>
                                    آخرین فال های گرفته شده
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
                        </div><!-- /.portlet-heading -->


                        <?php
                        /*                        $sql2="select * from orders where user_id=?";
                                                $arr2=array($user_id);
                                                $num2=$object->num($sql2,$arr2);
                                                if($num2==0){echo "شما تاکنون هیچ درخواست فالی نداشته اید. جهت گرفتن فال، گزینه درخواست فال جدید را انتخاب کنید. ";goto a;}

                                                */?>

                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="data-table">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>تاریخ </th>
                                        <th>ساعت </th>
                                        <th> نوع فال</th>
                                        <th> مبلغ </th>
                                        <th> وضعیت  </th>
                                        <th>نتیجه فال</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    /*                                    $sql3="select * from orders where user_id=? order by id desc";
                                                                        $arr3=array($user_id);
                                                                        $res3=$object->select($sql3,$arr3);
                                                                        $radif=0;
                                                                        foreach ($res3 as $row3){
                                                                            $radif=$radif+1;
                                                                            $date=$row3['date'];
                                                                            $time=$row3['time'];
                                                                            $status=$row3['status'];
                                                                            $product_id=$row3['product_id'];

                                                                            $sql1="select * from products where id=?";
                                                                            $arr1=array($product_id);
                                                                            $res1=$object->select($sql1,$arr1);

                                                                            $product_name=$res1[0]['name'];
                                                                            $price=$res1[0]['price'];

                                                                        //Status
                                                                        $status=status($status);
                                                                        //Status

                                                                            */?>

                                    <tr>
                                        <td><?php /*echo $radif;  */?></td>
                                        <td><?php /*echo $date;  */?></td>
                                        <td><?php /*echo $time;  */?></td>
                                        <td><?php /*echo $product_name;  */?></td>
                                        <td><?php /*echo $price;  */?></td>
                                        <td><?php /*echo $status." (کسر موجودی کیف پول)";  */?></td>
                                        <td> <?php /*echo "پاسخ".str_repeat('&nbsp;', 2)."فال";  */?></td>

                                        <?php
                                        /*                                    }
                                                                            */?>

                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /.portlet-body -->
                    </div><!-- /.portlet -->
                </div><!-- /.col-lg-12 -->

                <?php
                /*                a:;
                                */?>

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




?>