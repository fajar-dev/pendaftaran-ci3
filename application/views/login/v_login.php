<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title>Form Pendaftran| Forum Share File & Tanya Jawab</title>

    <!-- Icons font CSS-->
    <link href="<?= base_url(); ?>/assets/css-form/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/assets/css-form/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url(); ?>/assets/css-form/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/assets/css-form/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url(); ?>/assets/css-form/css/main.css" rel="stylesheet" media="all">
    <style>
        .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

</style>
</head>

<body>
    <div class="page-wrapper bg-gra-04 p-t-45 p-b-50">
        <div class="wrapper wrapper--w500">
            <div class="card card-5">
                <div class="card-heading">
                    <h4 class="title">login admin</h4>
                </div>
                <!--<p style="text-align: center; padding-top: 10px;"><b><u> Supported By <a href="http://chanofficial.my.id" style="color: black;">Chanofficial</u></b></a></p>-->
                <div class="card-body">
                    
                    <form method="POST" action="<?php echo base_url(); ?>index.php/login/getlogin" onsubmit="return cekform();" class="form-horizontal">
                       
						<center><img src="<?= base_url(); ?>/assets/img/avatar.png" style="width: 150px;"></center>
                        <div style="padding-top: 20px;">
                            <div class="value">
                                <div class="input-group"  data-validate = "Username is required">
                                    <input class="input--style-5" type="text" name="username" placeholder="Username">
                                </div>
                            </div>
                        </div>
						
                        <div style="padding-top: 20px;">
                           
                            <div class="value">
                                <div class="input-group"  data-validate = "Password is required">
                                    <input class="input--style-5" type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                            <font color="red">
                                                                 <?php 
                                                                $info = $this->session->flashdata('info');
                                                                if(!empty($info))
                                                                {
                                                                    echo $info;
                                                                }
                                                                ?>
                             </font> 
                        <div style="padding-top: 20px;">
                         <div>
                            <button class="btn1 btn--radius btn--green"  type="submit">Login</button>
                        </div>
                    </div>
                    </form> 
                    <p style="text-align: center; padding-top: 50px;"><b>&copy; <a href="http://chanofficial.my.id" style="color: black;"> Chanofficial</b> </a> <br>All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url(); ?>/assets/css-form/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url(); ?>/assets/css-form/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url(); ?>/assets/css-form/vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/css-form/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url(); ?>/assets/css-form/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
