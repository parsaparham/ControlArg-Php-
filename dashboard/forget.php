<?php
include "lib/classLogin.php";
include("libsms/nusoap.php");
$header=new header();
$header->put_header();
?>
                    
                    <div class="col-md-12">
                        <p class="text-center m-t-30 m-b-40">
                            <i class="icon-lock-open border img-circle font-xxxlg p-20"></i>
                        </p>
                        <h2 class="text-center">بازیابی رمز عبور</h2>
                        <div class="alert alert-info text-center m-t-10 m-b-20">
                            <i class="icon-comments"></i>
                            شماره همراه خود را برای بازیابی کلمه عبور وارد نمائید.
                        </div>

                        <hr>

                        <form id="forget-form" method="POST" action="forget1.php">
                            <div class="form-group">
                                <label class="sr-only control-label" for="mobile">شماره همراه</label>
                                <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control round ltr text-left" name="mobile" placeholder="مثال:09123334444" required>
                                </div><!-- /.input-group-->
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-round btn-block m-t-20" name="signup" value="Sign up">
                                    <i class="icon-envelope-letter"></i>       
                                    ارسال ایمیل بازیابی
                                </button>
                            </div><!-- /.form-group -->
                        </form>

                        <hr class="m-b-30">
                        <a href="index.php" class="btn btn-warning btn-round btn-block m-b-10">
                            <i class="icon-user-following"></i> 
                            صفحه ورود
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
        <script src="assets/js/pages/forget.js"></script>
        <!-- END PAGE JAVASCRIPT -->
                
    </body>
</html>