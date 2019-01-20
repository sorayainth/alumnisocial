       <div class="footer">
            <div class="pull-right">
               งานกิจการนิสิตและศิษย์เก่าสัมพันธ์
            </div>
            <div>
                <strong>สำนักงานเลขานุการ</strong> &copy; 2019
            </div>
        </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/js/inspinia.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js');?>"></script>

    <!-- Steps -->
    <script src="<?php echo base_url('assets/js/plugins/steps/jquery.steps.min.js');?>"></script>

    <!-- Jquery Validate -->
    <script src="<?php echo base_url('assets/js/plugins/validate/jquery.validate.min.js');?>"></script>

    <!-- plugin -->
    <script src="<?php echo base_url('assets/js/plugins/dataTables/datatables.min.js');?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/js/inspinia.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js');?>"></script>

    <!-- Sweet alert -->
    <script src="<?php echo base_url('assets/js/plugins/sweetalert/sweetalert.min.js');?>"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js');?>"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>
    <script type="text/javascript">

     function chkstatus(sx){

      if (sx=="ทำงาน"){
          document.getElementById('job').style.display='block';
          document.getElementById('chkstatus').style.display='block';
          document.getElementById('edu').style.display='none';
          document.getElementById('business').style.display='none';
          document.getElementById('null').style.display='none';

      } else if (sx=="ศึกษาต่อ") {
          document.getElementById('edu').style.display='block';
          document.getElementById('chkstatus').style.display='block';
          document.getElementById('job').style.display='none';
          document.getElementById('business').style.display='none';
          document.getElementById('null').style.display='none';
      } else if (sx=="ธุรกิจส่วนตัว") {
          document.getElementById('business').style.display='block';
          document.getElementById('chkstatus').style.display='block';
          document.getElementById('job').style.display='none';
          document.getElementById('edu').style.display='none';
          document.getElementById('null').style.display='none';

      } else if (sx=="ยังไม่ได้ทำงาน") {
          document.getElementById('null').style.display='block';
          document.getElementById('chkstatus').style.display='block';
          document.getElementById('job').style.display='none';
          document.getElementById('edu').style.display='none';
          document.getElementById('business').style.display='none';

      } else  {
            document.getElementById('null').style.display='none';
          document.getElementById('chkstatus').style.display='block';
          document.getElementById('job').style.display='none';
          document.getElementById('edu').style.display='none';
          document.getElementById('business').style.display='none';
      }

    }
    </script>
    <?php echo $this->session->flashdata('flashSuccess')?>
</body>

</html>
