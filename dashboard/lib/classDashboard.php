<?php

	//start class for header
		class header
			{
				public function put_header()
					{

?>
                        <!DOCTYPE html>
                        <html lang="fa" dir="rtl" class="rtl">
                        <head>
                            <title>کنترل ارگ www.ControlArg.com</title>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta name="description" content="می گی بم اولین وب سایت فال قهوه ">
                            <meta name="keywords" content="فال قهوه واقعی ,  گرفتن فال  ,  فال قهوه  ,  اصفهان  ,  بهترین فال قهوه در اصفهان  ">
                            <meta name="fontiran.com:license" content="NE29X">
                            <link rel="shortcut icon" href="assets/images/favicon.png">

                            <!-- BEGIN CSS -->
                            <link href="assets/plugins/bootstrap/bootstrap5/css/bootstrap.rtl.min.css" rel="stylesheet">
                            <link href="assets/plugins/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
                            <link href="assets/plugins/simple-line-icons/css/simple-line-icons.min.css" rel="stylesheet">
                            <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
                            <link href="assets/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
                            <link href="assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet">
                            <link href="assets/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
                            <link href="assets/plugins/paper-ripple/dist/paper-ripple.min.css" rel="stylesheet">
                            <link href="assets/plugins/iCheck/skins/square/_all.css" rel="stylesheet">
                            <link href="assets/css/style.css" rel="stylesheet">
                            <link href="assets/css/colors.css" rel="stylesheet">
                            <!-- END CSS -->

                            <!-- BEGIN PAGE CSS -->
                            <link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet">
                            <!-- END PAGE CSS -->

                        </head>
                        <body class="active-ripple theme-blue fix-header sidebar-extra dark">
                        <!-- BEGIN LOEADING -->
                        <div id="loader">
                            <div class="spinner"></div>
                        </div><!-- /loader -->
                              <!-- END LOEADING -->

                              <!-- BEGIN HEADER -->
                        <div class="navbar navbar-fixed-top" id="main-navbar">
                            <div class="header-right">
                                <a href="dashboard.html" class="logo-con">
                                    <img src="assets/images/logo.png" class="img-responsive center-block" alt="فال قهوه">
                                </a>
                            </div><!-- /.header-right -->
                            <div class="header-left">
                                <div class="top-bar">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                                            <a href="#" class="btn" id="toggle-sidebar">
                                                <span class="menu"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn open" id="toggle-sidebar-top">
                                                <i class="icon-user-following"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" id="toggle-dark-mode">
                                                <i class="icon-bulb"></i>
                                            </a>
                                        </li>
                                    </ul>


                                </div><!-- /.top-bar -->
                            </div><!-- /.header-left -->
                        </div><!-- /.navbar -->
                        <!-- END HEADER -->
<?php
			}
					}
	//end class for header

	//start class for footer
		class footer
			{
				public function put_footer()
					{
?>

                        <div class="row footer-container">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p class="float-start">
                                        ©کلیه حقوق این وبسایت متعلق به می گی بم می باشد. طراحی سایت : محمد جعفری 3154-226-0939
                                    </p>
                                    <p class="float-end ltr tahoma">
                                        <span>©</span>
                                        <a href="#" target="_blank">M.Jafari 0939-226-3154</a>
                                    </p>
                                </div><!-- /.copyright -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                              <!-- BEGIN SETTING -->
                        <div class="settings d-none d-sm-block">
                            <a href="#" class="btn" id="toggle-setting">
                                <i class="icon-settings"></i>
                            </a>
                            <h3 class="text-center">تنظیمات</h3>

                            <div class="fix-header-box">
                                <p class="h6">
                                    هدر ثابت:
                                    <span class="pull-left">
                        <input type="checkbox" class="fix-header-switch normal" checked>
                    </span>
                                </p>
                            </div><!-- /.fix-header-box -->
                            <hr class="light">
                            <div class="toggle-sidebar-box">
                                <p class="h6">
                                    جمع کردن سایدبار:
                                    <span class="pull-left">
                        <input type="checkbox" class="toggle-sidebar-switch normal">
                    </span>
                                </p>
                            </div><!-- /.toggle-sidebar-box -->
                            <hr class="light">
                            <div class="toggle-sidebar-box">
                                <p class="h6">
                                    سایدبار خلاقانه:
                                    <span class="pull-left">
                        <input type="checkbox" class="creative-sidebar-switch normal">
                    </span>
                                </p>
                            </div><!-- /.toggle-sidebar-box -->
                            <hr class="light">
                            <div class="theme-colors">
                                <p class="h6">رنگ قالب : </p>
                                <a class="btn btn-round btn-blue ripple-effect active" data-color="blue"></a>
                                <a class="btn btn-round btn-red ripple-effect" data-color="red"></a>
                                <a class="btn btn-round btn-green ripple-effect" data-color="green"></a>
                                <a class="btn btn-round btn-orange ripple-effect" data-color="orange"></a>
                                <a class="btn btn-round btn-purple ripple-effect" data-color="purple"></a>
                                <a class="btn btn-round btn-deeporange ripple-effect" data-color="deeporange"></a>
                                <a class="btn btn-round btn-cyan ripple-effect" data-color="cyan"></a>
                                <a class="btn btn-round btn-rose ripple-effect" data-color="rose"></a>
                                <a class="btn btn-round btn-lime ripple-effect" data-color="lime"></a>
                                <a class="btn btn-round btn-darkorange ripple-effect" data-color="darkorange"></a>
                            </div><!-- /.theme-colors -->
                            <div class="theme-code ltr text-left">
                                <code></code>
                            </div><!-- /.theme-code -->
                        </div><!-- /.settings -->
                              <!-- END SETTING -->

                              <!-- BEGIN CODE MODAL -->
                        <div class="modal fade" id="code-modal" role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn btn-default btn-round btn-icon float-start" id="btn-copy"><i class="fa fa-copy"></i></button>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">کپی کردن کدها</h4>
                                    </div>
                                    <div class="modal-body"></div>
                                </div> <!-- /.modal-content -->
                            </div> <!-- /.modal-dialog -->
                        </div> <!-- /.modal -->
                               <!-- END CODE MODAL -->

                               <!-- BEGIN JS -->
                        <script src="assets/plugins/jquery/dist/jquery-3.1.0.js"></script>
                        <script src="assets/plugins/bootstrap/bootstrap5/js/bootstrap.bundle.min.js"></script>
                        <script src="assets/plugins/metisMenu/dist/metisMenu.min.js"></script>
                        <script src="assets/plugins/paper-ripple/dist/PaperRipple.min.js"></script>
                        <script src="assets/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
                        <script src="assets/plugins/sweetalert2/dist/sweetalert2.min.js"></script>
                        <script src="assets/plugins/screenfull/dist/screenfull.min.js"></script>
                        <script src="assets/plugins/iCheck/icheck.min.js"></script>
                        <script src="assets/plugins/switchery/dist/switchery.js"></script>
                        <script src="assets/js/core.js"></script>

                        <!-- BEGIN PAGE JAVASCRIPT -->
                        <script src="assets/plugins/chart.js/dist/Chart.bundle.min.js"></script>
                        <script src="assets/plugins/jquery-incremental-counter/jquery.incremental-counter.min.js"></script>
                        <script src="assets/plugins/ammap3/ammap/ammap.js"></script>
                        <script src="assets/plugins/ammap3/ammap/maps/js/iranHighFa.js"></script>
                        <script src="assets/js/pages/dashboard2.js"></script>
                        <!-- END PAGE JAVASCRIPT -->


                        <!--  For Search Box in Tables  -->
                        <!-- BEGIN PAGE JAVASCRIPT -->
                        <script src="assets/plugins/data-table/js/jquery.dataTables.min.js"></script>
                        <script src="assets/js/pages/datatable.js"></script>
                        <!-- END PAGE JAVASCRIPT -->
                        <!--  For Search Box in Tables  -->

                        <!-- BEGIN PAGE JAVASCRIPT -->
                        <script src="assets/plugins/select2/dist/js/select2.full.min.js"></script>
                        <script src="assets/plugins/select2/dist/js/i18n/fa.js"></script>
                        <script src="assets/js/pages/select2.js"></script>
                        <!-- END PAGE JAVASCRIPT -->




                        </body>
                        </html>
<?php


			}
					}



                    class sidbar {
                                public function put_sidebar(){
                                    ?>
                                    <!-- BEGIN SIDEBAR -->
            <div id="sidebar">
                <div class="sidebar-top">


                    <div class="user-box">
                  <?php
                  $object=new class_parent();
                  if(isset($_SESSION['mobile'])) {
                      $mobile = $_SESSION['mobile'];
                      $sql = "select * from users where mobile=?";
                      $arr = array($mobile);
                      $res=$object->select($sql,$arr);
                      $user_id=$res[0]['id'];
                      $fname=$res[0]['fname'];
                      $lname=$res[0]['lname'];
                      $mobile=$res[0]['mobile'];
                      $per_id=$res[0]['per_id'];
                      $name=str_repeat('&nbsp;', 10).$fname." ".$lname;
                      $mob=str_repeat('&nbsp;', 10).$mobile;
                  }


                  ?>
                        <div class="user-details">
                            <h4><?php echo $name; ?></h4><br/>
                            <h4><?php echo $mob; ?></h4><br/>
                            <p class="role"> </p>

                        </div><!-- /.user-details -->
                    </div><!-- /.user-box -->
                </div><!-- /.sidebar-top -->


                <?php
                if($per_id==1){
                ?>



                <div class="side-menu-container">
                    <ul class="metismenu" id="side-menu">
                        <li class="open active conditional-bg">
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-home"></i>
                                <span>پیشخوان</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="user_edit1.php?id=<?php echo $user_id ?>" class="">
                                        <i class="icon-home"></i>
                                        <span>ویرایش پروفایل </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="logout.php" class="">
                                        <i class="icon-home"></i>
                                        <span>  خروج </span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul><!-- /#side-menu -->
                </div><!-- /.side-menu-container -->

                    <?php
                }elseif ($per_id==3){
                    ?>



                    <div class="side-menu-container">
                        <ul class="metismenu" id="side-menu">
                            <li class="open conditional-bg">
                                <a href="#" class="dropdown-toggle">
                                    <i class="icon-home"></i>
                                    <span>اطلاعات پایه</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="categories.php" class="">
                                            <i class="icon-home"></i>
                                            <span>دسته بندی محصولات </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="products.php" class="">
                                            <i class="icon-home"></i>
                                            <span>محصولات</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="banks.php" class="">
                                            <i class="icon-home"></i>
                                            <span>حسابهای بانکی</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_list_logins.php" class="">
                                            <i class="icon-home"></i>
                                            <span>  لاگین ها و کدهای ورود </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_list_accounts.php" class="">
                                            <i class="icon-home"></i>
                                            <span>  شماره حساب ها </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="logout.php" class="">
                                            <i class="icon-home"></i>
                                            <span>  خروج </span>
                                        </a>
                                    </li>

                                </ul>
                            </li>



                            <li class="open active conditional-bg">
                                <a href="#" class="dropdown-toggle">
                                    <i class="icon-home"></i>
                                    <span>پیشخوان</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="admin_list_users.php" class="">
                                            <i class="icon-home"></i>
                                            <span>لیست کاربران </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_list_queue.php" class="">
                                            <i class="icon-home"></i>
                                            <span>لیست آخرین نوبتها </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_list_available.php" class="">
                                            <i class="icon-home"></i>
                                            <span>تعیین تاریخ نوبت   </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_list_logins.php" class="">
                                            <i class="icon-home"></i>
                                            <span>  لاگین ها و کدهای ورود </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_list_accounts.php" class="">
                                            <i class="icon-home"></i>
                                            <span>  شماره حساب ها </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="logout.php" class="">
                                            <i class="icon-home"></i>
                                            <span>  خروج </span>
                                        </a>
                                    </li>

                                </ul>
                            </li>


                        </ul><!-- /#side-menu -->
                    </div><!-- /.side-menu-container -->





                    <?php
                }
                    ?>


            </div><!-- /#sidebar -->
            <!-- END SIDEBAR -->

<?php
                                }
                    }






class adminButtons {
    public function put_adminButtons(){

        $object=new class_parent();

        $sql="select * from users";
        $res=$object->select($sql);

        $sql="select * from orders";
        $num_orders=$object->num($sql);

        $sql="select * from sms";
        $num_sms=$object->num($sql);

        $sql="select * from transactions where kind ='0'";
        $res=$object->select($sql);
        $total_balance=0;
        foreach ($res as $row){
            $price=$res[0]['price'];
            $total_balance=$price+$total_balance;
        }
        ?>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="stat-box bg-cyan shadow">

                    <a href="admin_list_orders.php">
                        <div class="stat">
                            <div class="counter-down" data-value="<?php echo $num_orders;  ?>">   فال </div>
                            <br/>
                            <div class="h3">لیست درخواست ها </div>
                        </div><!-- /.stat -->
                        <div class="visual">
                            <i class="icon-eye"></i>
                        </div><!-- /.visual -->
                    </a>
                </div><!-- /.stat-box -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-6">
                <div class="stat-box bg-blue shadow">
                    <a href="admin_list_transactions.php">
                        <div class="stat">
                            <div class="counter-down" data-value="<?php echo $total_balance;  ?>">   تومان </div>
                            <br/>
                            <div class="h3"> لیست تراکنشها </div>
                        </div><!-- /.stat -->
                        <div class="visual">
                            <i class="icon-calculator"></i>
                        </div><!-- /.visual -->
                    </a>
                </div><!-- /.stat-box -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-6">
                <div class="stat-box bg-orange shadow">
                    <a href="admin_list_sms.php">
                        <div class="stat">
                            <div class="counter-down" data-value="<?php echo $num_sms;  ?>">   پیام </div>
                            <br/>
                            <div class="h3">پیامها </div>
                        </div><!-- /.stat -->
                        <div class="visual">
                            <i class="icon-heart"></i>
                        </div><!-- /.visual -->
                    </a>
                </div><!-- /.stat-box -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-6">
                <div class="stat-box bg-red shadow">
                    <a href="admin_list_logins.php">
                        <div class="stat">
                            <!--<div class="counter-down" data-value="512"></div>-->
                            <br/>
                            <div class="h3"> لاگین ها و کدهای ورود </div>
                        </div><!-- /.stat -->
                        <div class="visual">
                            <i class="icon-wallet"></i>
                        </div><!-- /.visual -->
                    </a>
                </div><!-- /.stat-box -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-6">
                <div class="stat-box bg-red shadow">
                    <a href="admin_list_users.php">
                        <div class="stat">
                            <!--<div class="counter-down" data-value="512"></div>-->
                            <br/>
                            <div class="h3"> لیست کاربران </div>
                        </div><!-- /.stat -->
                        <div class="visual">
                            <i class="icon-wallet"></i>
                        </div><!-- /.visual -->
                    </a>
                </div><!-- /.stat-box -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->


        <?php
    }
}



class userButtons {
    public function put_userButtons(){

        $object=new class_parent();
        $mobile=$_SESSION['mobile'];
        $sql="select * from users where mobile=?";
        $arr=array($mobile);
        $res=$object->select($sql,$arr);
        $balance=$res[0]['balance'];
        $user_id=$res[0]['id'];

        $sql="select * from orders where user_id=?";
        $arr=array($user_id);
        $num_orders=$object->num($sql,$arr);

        $sql="select * from sms where user_id=?";
        $arr=array($user_id);
        $num_sms=$object->num($sql,$arr);
        ?>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="stat-box bg-cyan shadow">

                    <a href="dashboard.php">
                        <div class="stat">
                            <div class="counter-down" data-value="<?php echo $num_orders;  ?>">   فال </div>
                            <br/>
                            <div class="h3">لیست فالهای گرفته شده </div>
                        </div><!-- /.stat -->
                        <div class="visual">
                            <i class="icon-eye"></i>
                        </div><!-- /.visual -->
                    </a>
                </div><!-- /.stat-box -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-6">
                <div class="stat-box bg-blue shadow">
                    <a href="wallet.php">
                        <div class="stat">
                            <div class="counter-down" data-value="<?php echo $balance;  ?>">   تومان </div>
                            <br/>
                            <div class="h3"> کیف پول </div>
                        </div><!-- /.stat -->
                        <div class="visual">
                            <i class="icon-calculator"></i>
                        </div><!-- /.visual -->
                    </a>
                </div><!-- /.stat-box -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-6">
                <div class="stat-box bg-orange shadow">
                    <a href="admin_list_available.php">
                        <div class="stat">
                            <div class="counter-down" data-value="<?php echo $num_sms;  ?>">   پیام </div>
                            <br/>
                            <div class="h3">صندوق پیام ها </div>
                        </div><!-- /.stat -->
                        <div class="visual">
                            <i class="icon-heart"></i>
                        </div><!-- /.visual -->
                    </a>
                </div><!-- /.stat-box -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-6">
                <div class="stat-box bg-red shadow">
                    <a href="user_order.php">
                        <div class="stat">
                            <!--<div class="counter-down" data-value="512"></div>-->
                            <br/>
                            <div class="h3"> درخواست فال جدید </div>
                        </div><!-- /.stat -->
                        <div class="visual">
                            <i class="icon-wallet"></i>
                        </div><!-- /.visual -->
                    </a>
                </div><!-- /.stat-box -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->


        <?php
    }
}

?>
