<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ระบบฐานข้อมูลศิษย์เก่า | คณะสังคมศาสตร์ มหาวิทยาลัยนเรศวร</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.cs')?>s" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <img src="<?php echo base_url('assets/img/logo.png');?>" height="150">
            </div>
            <h3>Welcome to</h3>
            <p>ระบบฐานข้อมูลศิษย์เก่า | คณะสังคมศาสตร์
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in</p>
            <?php echo $this->session->flashdata('flashSuccess')?>
            <form class="m-t" role="form" action="<?php echo base_url('auth/login');?>" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="รหัสนิสิต" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="password" class="form-control" placeholder="รหัสประจำตัวประชาชน" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <small><!-- ติดต่อเรา --></small>
                <p class="text-muted text-center"><small>ติดต่อเรา</small></p>
                <a class="btn btn-sm btn-white btn-block" href="https://line.me/ti/g2/BmdMwFOvcIwAhopnaqWo8A?utm_source=invitation&utm_medium=link_copy&utm_campaign=default" target="_black"><i class="fa fa-line"></i> Line open chat</a>
            </form>
            <!-- <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p> -->
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

</body>

</html>
