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
                <a class="btn btn-sm btn-white btn-block" href="https://www.facebook.com/%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%99%E0%B8%B4%E0%B8%AA%E0%B8%B4%E0%B8%95-%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%AA%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B8%A1%E0%B8%99%E0%B9%80%E0%B8%A3%E0%B8%A8%E0%B8%A7%E0%B8%A3-355876441172800/" target="_black"><i class="fa fa-facebook-square"></i> งานกิจการนิสิตและศิษย์เก่าสัมพันธ์ คณะสังคมศาสตร์</a>
            </form>
            <!-- <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p> -->
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

</body>

</html>
