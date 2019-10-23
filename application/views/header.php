<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ระบบฐานข้อมูลศิษย์เก่า | คณะสังคมศาสตร์ มหาวิทยาลัยนเรศวร</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/iCheck/custom.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/steps/jquery.steps.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
    <!-- plugin -->
    <link href="<?php echo base_url('assets/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/iCheck/custom.css');?>" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="<?php echo base_url('assets/css/plugins/sweetalert/sweetalert.css');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/jquery.Thailand.js/dist/jquery.Thailand.min.css');?>">
</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php  echo base_url('assets/img/logo.png');?>" height="80"/>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('FULLNAME');?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo $this->session->userdata('username');?> <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?php echo base_url('auth/logout');?>">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <?php if($this->session->userdata('Admin')){ ?>
                <li>
                    <a href="<?php echo base_url('main/dashboard');?>"><i class="fa fa-th-large"></i> <span class="nav-label"> Dashboard</span></a>
                </li>
            <?php } ?>

                <li>
                    <a href="<?php echo base_url('main/form');?>"><i class="fa fa-pie-chart"></i> <span class="nav-label">กรอกข้อมูล</span>
                    </a>
                </li>
                <?php if($this->main_model->checkform() == true){ ?>
                <li>
                    <a href="<?php echo base_url('main/print_report');?>"><i class="fa fa-print"></i> <span class="nav-label">พิมพ์แบบฟอร์ม</span>
                    </a>
                </li>
            <?php  } ?>
            <?php if($this->session->userdata('Admin')){ ?>
                <li>
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">ข้อมูลศิษย์เก่า</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url('main/table_student_info');?>">ตารางรายชื่อ</a></li>
                        <li><a href="<?php echo base_url('main/table_data');?>">ข้อมูลการมีงานทำ</a></li>
                    </ul>
                </li>
            <?php } ?>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome <?php echo $this->session->userdata('FULLNAME');?></span>
                </li>

                <li>
                    <a href="<?php echo base_url('auth/logout');?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
        </nav>
        </div>