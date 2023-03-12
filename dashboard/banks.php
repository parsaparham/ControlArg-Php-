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
                                    حسابهای بانکی
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
                            <button onclick="location.href='banks_add1.php'" class="btn btn-success curve">ایجاد حساب بانکی جدید</button>
                        </div><!-- /.portlet-heading -->


                        <?php
                        $sql2="select * from banks";
                        $num2=$object->num($sql2);
                        if($num2==0){echo "شما تاکنون هیچ حساب بانکی تعریف نکرده اید. جهت ایجاد حساب جدید، گزینه ایجاد حساب بانکی جدید را انتخاب کنید. ";goto a;}

                        ?>

                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="data-table">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>بانک  </th>
                                        <th>شعبه  </th>
                                        <th>شماره کارت </th>
                                        <th>شماره حساب </th>
                                        <th>شماره شبا </th>
                                        <th>صاحب حساب </th>
                                        <th>اولویت </th>
                                        <th>فعال / غیرفعال </th>
                                        <th>ویرایش </th>
                                        <th>حذف </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $sql4="select * from banks order by id desc";
                                    $res4=$object->select($sql4);
                                    $radif=0;
                                    foreach ($res4 as $row4){
                                        $radif=$radif+1;
                                        $name=$row4['name'];
                                        $branch=$row4['branch'];
                                        $card=$row4['card'];
                                        $account=$row4['account'];
                                        $sheba=$row4['sheba'];
                                        $owner=$row4['owner'];
                                        $id=$row4['id'];
                                        $priority=$row4['priority'];
                                        $active=$row4['active'];
                                        if($active==0){$s="style=background-color:LightGray;color:black";}else{$s="";}
                                        if($active==0){$n="غیرفعال";}else{$n="فعال";}


                                        ?>

                                        <tr>
                                            <td <?php echo $s; ?>><?php echo $radif;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $name;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $branch;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $card;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $account;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $sheba;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $owner;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $priority;  ?></td>
                                            <td <?php echo $s; ?>><?php echo $n;  ?></td>
                                            <td <?php echo $s; ?>><a href="banks_edit1.php?id=<?php  echo $id; ?>"><span class="badge badge-warning">ویرایش</span></a></td>
                                            <td <?php echo $s; ?>><a href="banks_delete.php?id=<?php  echo $id; ?>"><span class="badge badge-danger">حذف</span></a></td>
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