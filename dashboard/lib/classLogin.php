<?php

	//start class for header
		class header
			{
				public function put_header()
					{

?>
                        <!DOCTYPE html>
                        <html lang="fa" dir="rtl">
                        <head>
                            <title>کنترل ارگ</title>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta name="description" content="کنترل ارگ">
                            <meta name="keywords" content="کنترل ارگ">
                            <link rel="shortcut icon" href="assets/images/favicon.png">

                            <!-- BEGIN CSS -->
                            <link href="assets/plugins/bootstrap/bootstrap5/css/bootstrap.rtl.min.css" rel="stylesheet">
                            <link href="assets/plugins/simple-line-icons/css/simple-line-icons.min.css" rel="stylesheet">
                            <link href="assets/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
                            <link href="assets/plugins/paper-ripple/dist/paper-ripple.min.css" rel="stylesheet">
                            <link href="assets/plugins/iCheck/skins/square/_all.css" rel="stylesheet">
                            <link href="assets/css/style.css" rel="stylesheet">
                            <link href="assets/css/colors.css" rel="stylesheet">
                            <!-- END CSS -->

                            <!-- BEGIN PAGE CSS -->
                            <link href="assets/plugins/persian-datepicker/css/persian-datepicker.min.css" rel="stylesheet">
                            <!-- END PAGE CSS -->


                        </head>
                        <body class="fix-header active-ripple theme-blue dark">
                        <!-- BEGIN LOEADING -->
                        <div id="loader">
                            <div class="spinner"></div>
                        </div><!-- /loader -->
                              <!-- END LOEADING -->

                              <!-- BEGIN WRAPPER -->
                        <div class="fixed-modal-bg"></div>
                        <a href="#" class="btn btn-info btn-icon btn-round btn-lg" id="toggle-dark-mode">
                            <i class="icon-bulb"></i>
                        </a>
                        <div class="modal-page shadow">
                        <div class="container-fluid">
                        <div class="row">
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

				<div class=" footer1">
                    <p style="color: #dddddd;font-family: yekan;text-align: center;font-size: 11pt; margin-top: 6px">طراح سامانه و برنامه نویس   </p>
				</div>
                <div class=" footer1">
                    <p style="color: #dddddd;font-family: yekan;text-align: center;font-size: 11pt; margin-top: 6px">0939-226-3154  محمد جعفری</p>
                </div>
				<div class="color-bar1">
        			<div class="red"></div>
        			<div class="blue"></div>
        			<div class="yellow"></div>
        			<div class="green"></div>       
				</div>
				<div class=" footer2">
			</body>
		</html>
<?php


			}
					}

?>