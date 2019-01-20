
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Student Info</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Student Info</a>
                        </li>
                        <li class="active">
                            <strong>Data Tables</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">
                        Import
                    </button></br></br>
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Data Tables with student info</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>รหัสนิสิต</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>ภาควิชา</th>
                        <th>สาขา</th>
                        <th>ปี</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($query->result_array() as $row) { ?>
                    <tr class="gradeX">
                        <td><?php echo $row['Student_id'];?></td>
                        <td><?php echo $row['Fullname'];?></td>
                        <td><?php echo $row['Department'];?></td>
                        <td><?php echo $row['Major'];?></td>
                        <td><?php echo $row['Year'];?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                            <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Import Data</h4>
                                        </div>
                                        <form action="<?php echo base_url('import/uploadData');?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <p>
                                                <input type="file" name="uploadFile">
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit" value="submit" class="btn btn-primary">Save</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


