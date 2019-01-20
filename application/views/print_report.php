        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-8">
                    <h2>Print</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            กรอกข้อมูล
                        </li>
                        <li class="active">
                            <strong>Print</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <div class="title-action">
                        <a href="javascript:window.print()" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print </a>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="ibox-content p-xl">
                            <div class="row">
                            <div class="col-lg-12">
                                    <div class="widget-head-color-box navy-bg p-lg text-center">
                                        <div class="m-b-md">
                                        <h2 class="font-bold no-margins">
                                            <?php echo $this->session->userdata('FULLNAME');?>
                                        </h2>
                                            <small><?php echo $this->session->userdata('Student_id');?></small>
                                        </div>
                                        <div>
                                            <span><?php echo $this->session->userdata('Department');?></span> |
                                            <span><?php echo $this->session->userdata('Major');?></span>
                                        </div>
                                    </div>
                                    </br></br></br>
                                    <h3 align="center">ลงชื่อ.....................................................................</h3>
                                    <h3 align="center">(<?php echo $this->session->userdata('FULLNAME');?>)</h3>
                            </div>
                            </div>

                            <div class="well m-t"><strong>หมายเหตุ</strong>
                                กรุณาพิมพ์แบบฟอร์มเพื่อมายืนยันในวันรายงานตัวฝึกซ้อม
                            </div>
                        </div>
                </div>
            </div>
        </div>
