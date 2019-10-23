
        <!-- content -->
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>ข้อมูลศิษย์เก่า คณะสังคมศาสตร์ มหาวิทยาลัยนเรศวร</h5>
                        </div>
                        <div class="ibox-content">
                            <!-- <h2>
                                <b>กรอกข้อมูลข้อมูลศิษย์เก่า</b>
                            </h2>
                            <p>
                                ของนิสิตคณะสังคมศาสตร์ มหาวิทยาลัยนเรศวร
                            </p> -->

                            <form id="form1" action="<?php echo base_url('main/save_form');?>" method="post" class="wizard-big_bk">
                                <fieldset>
                                    <h2 class="text-h2">ที่อยู่ที่สามารถติดต่อได้</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>ที่อยู่ *</label>
                                                <input id="address" name="address" type="text" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>แขวง/ตำบล *</label>
                                                <input name="subdistrict"  class="form-control" type="text" required>
                                            </div>
                                            <div class="form-group">
                                                <label>เขต/อำเภอ *</label>
				                                <input name="district" class="form-control" type="text" required>
                                            </div>
                                            <div class="form-group">
                                                <label>จังหวัด *</label>
                                                <input name="province" class="form-control" type="text" required>
                                            </div>
                                            <div class="form-group">
                                                <label>รหัสไปรษณีย์ *</label>
                                                <input name="zipcode" class="form-control" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>เบอร์มือถือ *</label>
                                                <input id="telephone" name="telephone" type="text" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input id="email" name="email" type="text" class="form-control email" required>
                                            </div>
                                            <div class="form-group">
                                                <label>ID Line</label>
                                                <input id="lineid" name="lineid" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input id="facebook" name="facebook" type="text" class="form-control">
                                            </div>
                                            
                                        </div>
                                    </div>

                                </fieldset>
                                <fieldset>
                                    <h2 class="text-h2">ประวัติการศึกษา</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>ระดับการศึกษา *</label>
                                                <select id="education" name="education" class="form-control" required>
                                                    <option>ปริญญาตรี</option>
                                                    <option>ปริญญาโท</option>
                                                    <option>ปริญญาเอก</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>ปีการศึกษาที่จบ *</label>
                                                <select id="year_success" name="year_success" class="form-control" required>
                                                    <?php $year = date('Y')+541; for ($i=$year; $i < ($year+2); $i++) { ?>
                                                       <option><?php echo $i;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>หลักสูตร *</label>
                                                <!-- <input id="department" name="department" type="text" value="<?php //echo $this->session->userdata('Department');?>" class="form-control"> -->
                                                <select id="department" name="department" class="form-control" required>
                                                    <option value="">กรุณาเลือก</option>
                                                    <option value="หลักสูตรวิทยาศาสตรบัณฑิต">หลักสูตรวิทยาศาสตรบัณฑิต</option>
                                                    <option value="หลักสูตรศิลปศาสตรบัณฑิต">หลักสูตรศิลปศาสตรบัณฑิต</option>
                                                    <option value="หลักสูตรศิลปศาสตรมหาบัณฑิต">หลักสูตรศิลปศาสตรมหาบัณฑิต</option>
                                                    <option value="หลักสูตรรัฐศาสตรมหาบัณฑิต">หลักสูตรรัฐศาสตรมหาบัณฑิต</option>
                                                    <option value="หลักสูตรปรัชญาดุษฎีบัณฑิต">หลักสูตรปรัชญาดุษฎีบัณฑิต</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>สาขา *</label>
                                                <input id="major" name="major" type="text" value="<?php echo $this->session->userdata('Major');?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                <h2 class="text-h2">ประวัติการทำงาน</h2>
                                     <div class="row" id="chkstatus">
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label>สถานะ *</label>
                                                <select id="typejob" name="typejob" class="form-control" onChange="chkstatus(this.value);" required>
                                                    <option value="">กรุณาเลือก</option>
                                                    <option value="ทำงาน">ทำงาน</option>
                                                    <option value="ศึกษาต่อ">ศึกษาต่อ</option>
                                                    <option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
                                                    <option value="ยังไม่ได้ทำงาน">ยังไม่ได้ทำงาน</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="job">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>ชื่อบริษัท/หน่วยงาน *</label>
                                                <input id="company" name="company" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>ตำแหน่งงาน *</label>
                                                <input id="position" name="position" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>ประเภทงาน</label>
                                                <select id="jobdescription" name="jobdescription" class="form-control">
                                                    <option value="0">กรุณาเลือก</option>
                                                    <option value="1">รับราชการ/พนักงานราชการ/พนักงานของรัฐ</option>
                                                    <option value="2">พนักงานเอกชน/ลูกจ้างเอกชน</option>
                                                    <option value="3">สมาคม/มูลนิธิ/เครือข่ายจิตอาสา</option>
                                                    <option value="4">งานอิสระ</option>
                                                    <option value="5">รัฐวิสาหกิจ</option>
                                                    <option value="6">เกษตรกร</option>
                                                    <option value="7">รับจ้าง</option>
                                                    <option value="8">องค์กรทางการเมือง</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>ปีที่เริ่มงาน *</label>
                                                <input id="jobyear" name="jobyear" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>ที่อยู่ </label>
                                                <input id="address_company" name="address_company" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>ประเทศ *</label>
                                                <input id="county_company" name="county_company" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>แขวง/ตำบล *</label>
                                                <input name="subdistrict_company"  class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>เขต/อำเภอ *</label>
				                                <input name="district_company" class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>จังหวัด *</label>
                                                <input name="province_company" class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>รหัสไปรษณีย์ *</label>
                                                <input name="zipcode_company" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>


                                   <div class="row" id="edu">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>มหาวิทยาลัย *</label>
                                                <input id="university" name="university" type="text" class="form-control">
                                            </div>
                                             <div class="form-group">
                                                <label>ระดับการศึกษา *</label>
                                                <select id="level_next" name="level_next" class="form-control">
                                                    <option>ปริญญาตรี</option>
                                                    <option>ปริญญาโท</option>
                                                    <option>ปริญญาเอก</option>
                                                </select>
                                            </div>                                           
                                            <div class="form-group">
                                                <label>คณะ *</label>
                                                <input id="faculty_next" name="faculty_next" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>สาขา *</label>
                                                <input id="major_next" name="major_next" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>ปีที่เริ่มศึกษา *</label>
                                                <select id="year_next" name="year_next" class="form-control">
                                                    <?php $year = date('Y')+541; for ($i=$year; $i < ($year+3); $i++) { ?>
                                                       <option><?php echo $i;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>ประเทศ *</label>
                                                <input id="county_next" name="county_next" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                   <div class="row" id="business">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>ชื่อบริษัท/ธุรกิจ *</label>
                                                <input id="company_owner" name="company_owner" type="text" class="form-control">
                                            </div>
                                             <div class="form-group">
                                                <label>ประเภทของธุรกิจ *</label>
                                                <select id="type_owner" name="type_owner" class="form-control">
                                                    <option>กรุณาเลือก</option>
                                                    <option>กิจการแบบเจ้าของคนเดียว</option>
                                                    <option>บริษัทจำกัด </option>
                                                    <option>กิจการแบบห้างหุ้นส่วน</option>
                                                    <option>ห้างหุ้นส่วนสามัญ</option>
                                                    <option>ห้างหุ้นส่วนจำกัด</option>
                                                </select>
                                            </div>    
                                             <div class="form-group">
                                                <label>รูปแบบของธุรกิจ *</label>
                                                <select id="format_owner" name="format_owner" class="form-control">
                                                    <option>ธุรกิจการเกษตร‎</option>
                                                    <option>ธุรกิจให้บริการ</option>
                                                    <option>ธุรกิจขายสินค้าออนไลน์</option>
                                                    <option>ธุรกิจการเงิน</option>
                                                    <option>ธุรกิจการท่องเที่ยวและนันทนาการ‎</option>
                                                    <option>ธุรกิจการแพทย์‎</option>
                                                    <option>ธุรกิจขนส่งและโลจิสติกส์‎</option>
                                                    <option>ธุรกิจของใช้ส่วนตัวและเวชภัณฑ์‎</option>
                                                    <option>ธุรกิจเครื่องใช้ในครัวเรือน‎</option>
                                                    <option>ธุรกิจเงินทุนและหลักทรัพย์‎</option>
                                                    <option>ธุรกิจเทคโนโลยีสารสนเทศและการสื่อสาร‎</option>
                                                    <option>ธุรกิจแฟชั่น‎</option>
                                                    <option>ธุรกิจวัสดุก่อสร้าง‎</option>
                                                    <option>ธุรกิจประกันภัยและประกันชีวิต‎</option>
                                                    <option>ธุรกิจปิโตรเลียมและเคมีภัณฑ์‎</option>
                                                    <option>ธุรกิจพลังงานและสาธารณูปโภค‎น</option>
                                                    <option>ธุรกิจพัฒนาอสังหาริมทรัพย์‎</option>
                                                    <option>ธุรกิจพาณิชย์‎</option>
                                                    <option>ธุรกิจยานยนต์‎</option>
                                                    <option>ธุรกิจวัสดุอุตสาหกรรมและเครื่องจักร‎</option>
                                                    <option>ธุรกิจสื่อและสิ่งพิมพ์‎</option>
                                                    <option>ธุรกิจอาหารและเครื่องดื่ม‎</option>
                                                    <option>ธุรกิจอื่น ๆ</option>
                                                </select>
                                            </div>                                        
                                            <div class="form-group">
                                                <label>ที่อยู่ ธุรกิจ</label>
                                                <input id="address_owner" name="address_owner" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                           <div class="form-group">
                                                <label>แขวง/ตำบล *</label>
                                                <input name="subdistrict_owner" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>เขต/อำเภอ</label>
                                                <input name="district_owner" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>จังหวัด *</label>
                                                <input name="province_owner" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>รหัสไปรษณีย์ *</label>
                                                <input name="zipcode_owner" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                   <div class="row" id="null">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>แผนที่จะทำในอนาคต *</label>
                                                <input id="plan" name="plan" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                           <div class="form-group">
                                                <label>อื่น ๆ *</label>
                                                <input id="other" name="other" type="text" class="form-control">
                                            </div>
                                           
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <h3>Terms and Conditions</h3>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="" required> 
                                    <label for="acceptTerms">ขอยืนยันว่าข้อมูลนี้เป็นความจริง</label>

                                    <button type="submit" class="btn btn-success pull-right">บันทึก</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
    <!-- AutoProvince -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../assets/jquery.Thailand.js/dependencies/JQL.min.js"></script>
<script type="text/javascript" src="../assets/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
<script type="text/javascript" src="../assets/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
<script type="text/javascript"> 

        $.Thailand({
            database: '../assets/jquery.Thailand.js/database/db.json', 

            $district: $('#form1 [name="subdistrict"]'),
            $amphoe: $('#form1 [name="district"]'),
            $province: $('#form1 [name="province"]'),
            $zipcode: $('#form1 [name="zipcode"]'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, #form').toggle();
            }
        });

        $.Thailand({
            database: '../assets/jquery.Thailand.js/database/db.json', 

            $district: $('#form1 [name="subdistrict_company"]'),
            $amphoe: $('#form1 [name="district_company"]'),
            $province: $('#form1 [name="province_company"]'),
            $zipcode: $('#form1 [name="zipcode_company"]'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, #form').toggle();
            }
        });

        $.Thailand({
            database: '../assets/jquery.Thailand.js/database/db.json', 

            $district: $('#form1 [name="subdistrict_owner"]'),
            $amphoe: $('#form1 [name="district_owner"]'),
            $province: $('#form1 [name="province_owner"]'),
            $zipcode: $('#form1 [name="zipcode_owner"]'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, #form').toggle();
            }
        });

    </script>