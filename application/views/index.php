
    <div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Today</span>
                                <h5>จำนวนนิสิตในระบบ</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $this->main_model->numstudentall();?></h1>
                                <small>คน</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Today</span>
                                <h5>จำนวนนิสิตที่กรอกข้อมูล</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $this->main_model->num_addform();?></h1>
                                <small>คน</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Today</span>
                                <h5>จำนวนนิสิตที่ยังไม่ได้กรอก</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $this->main_model->numstudentall()-$this->main_model->num_addform();?></h1>
                                <small>คน</small>
                            </div>
                        </div>
                    </div>
        </div>
 
         <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Today</span>
                                <h5>นิสิตมีงานทำ</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $this->main_model->num_job();?></h1>
                                <small>คน</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Today</span>
                                <h5>นิสิตศึกษาต่อ</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $this->main_model->num_study();?></h1>
                                <small>คน</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Today</span>
                                <h5>นิสิตประกรอบธุรกิจ</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $this->main_model->num_business();?></h1>
                                <small>คน</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Today</span>
                                <h5>นิสิตยังไม่ได้ทำงาน</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $this->main_model->num_nulljob();?></h1>
                                <small>คน</small>
                            </div>
                        </div>
                    </div>
        </div>

