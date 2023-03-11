<?php
include "lib/classLogin.php";
$header=new header();
$header->put_header();
?>
                    
                    <div class="col-md-12">
                        <div class="logo-con m-t-10 m-b-10">
                            <img src="assets/images/logo-dark.png" class="dark-logo center-block img-responsive" alt="logo">
                            <img src="assets/images/logo.png" class="light-logo center-block img-responsive" alt="logo">
                        </div><!-- /.logo-con -->

                        <h2 class="text-center m-b-20">وارد شوید</h2>
                        <hr>
                        <form id="form" class="m-t-30 m-b-30" action="login1.php" method="POST" role="form">
                            <div class="form-group">
                                <label for="email" class="sr-only">نام کاربری یا شماره موبایل</label>
                                <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-envelope"></i>
                                    </span>
                                    <input class="form-control ltr text-left" type="text" name="username" required>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label for="password" class="sr-only">رمز عبور</label>
                                <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-key"></i>
                                    </span>
                                    <input id="password" class="form-control ltr text-left" type="password" name="password" minlength="5" required>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->
                            <p>
                                <button class="btn btn-info btn-round btn-block" type="submit">
                                    <i class="icon-paper-plane font-lg"></i>
                                    ورود
                                </button>
                            </p>
                        </form>
                        <hr class="m-b-30">
                        <a href="forget.php" class="btn btn-default btn-round btn-block m-b-10">
                            <i class="icon-refresh font-lg"></i> 
                            بازیابی رمز  عبور
                        </a>
                        <a href="register.php" class="btn btn-default btn-round btn-block">
                            <i class="icon-user-follow font-lg"></i>
                            حساب ندارید، ثبت نام کنید!    
                        </a>
                    </div><!-- /.col-md-12 -->                    
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.modal-page -->
        <!-- END WRAPPER -->
        
        <!-- BEGIN JS -->
        <script src="assets/plugins/jquery/dist/jquery-3.1.0.js"></script>
        <script src="assets/plugins/jquery-migrate/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/plugins/bootstrap/bootstrap5/js/bootstrap.bundle.min.js"></script>
        <script src="assets/plugins/paper-ripple/dist/PaperRipple.min.js"></script>
        <script src="assets/plugins/sweetalert2//dist/sweetalert2.min.js"></script>
        <script src="assets/plugins/iCheck/icheck.min.js"></script>
        <script src="assets/plugins/iCheck/icheck.min.js"></script>
        <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="assets/plugins/jquery-validation/src/localization/messages_fa.js"></script>
        <script src="assets/js/core.js"></script>
        
        <!-- BEGIN PAGE JAVASCRIPT -->
        <script src="assets/js/pages/login.js"></script>
        <!-- END PAGE JAVASCRIPT -->
                
    </body>
</html>