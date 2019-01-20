
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
                            <h2>
                                กรอกข้อมูลข้อมูลศิษย์เก่า
                            </h2>
                            <p>
                                ของนิสิตคณะสังคมศาสตร์ มหาวิทยาลัยนเรศวร
                            </p>

                            <form id="form" action="<?php echo base_url('main/save_form');?>" method="post" class="wizard-big">
                                <h1>ที่อยู่ที่สามารถติดต่อได้</h1>
                                <fieldset>
                                    <h2>ที่อยู่ที่สามารถติดต่อได้</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>ที่อยู่ *</label>
                                                <input id="address" name="address" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>แขวง/ตำบล *</label>
                                                <input id="subdistrict" name="subdistrict" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>เขต/อำเภอ *</label>
                                                <input id="district" name="district" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>จังหวัด *</label>
                                                <select id="province" name="province" class="form-control required">
                                                    <option>กรุณาเลือก</option>
                                                    <option>กรุงเทพมหานคร</option>
                                                    <option>กระบี่</option>
                                                    <option>กาญจนบุรี</option>
                                                    <option>กาฬสินธุ์</option>
                                                    <option>กำแพงเพชร</option>
                                                    <option>ขอนแก่น</option>
                                                    <option>จันทบุรี</option>
                                                    <option>ฉะเชิงเทรา</option>
                                                    <option>ชลบุรี</option>
                                                    <option>ชัยนาท</option>
                                                    <option>ชัยภูมิ</option>
                                                    <option>ชุมพร</option>
                                                    <option>เชียงราย</option>
                                                    <option>เชียงใหม่</option>
                                                    <option>ตรัง</option>
                                                    <option>ตราด</option>
                                                    <option>ตาก</option>
                                                    <option>นครนายก</option>
                                                    <option>นครปฐม</option>
                                                    <option>นครพนม</option>
                                                    <option>นครราชสีมา</option>
                                                    <option>นครศรีธรรมราช</option>
                                                    <option>นครสวรรค์</option>
                                                    <option>นนทบุรี</option>
                                                    <option>นราธิวาส</option>
                                                    <option>น่าน</option>
                                                    <option>บึงกาฬ</option>
                                                    <option>บุรีรัมย์</option>
                                                    <option>ปทุมธานี</option>
                                                    <option>ประจวบคีรีขันธ์</option>
                                                    <option>ปราจีนบุรี</option>
                                                    <option>ปัตตานี</option>
                                                    <option>พระนครศรีอยุธยา</option>
                                                    <option>พังงา</option>
                                                    <option>พัทลุง</option>
                                                    <option>พิจิตร</option>
                                                    <option>พิษณุโลก</option>
                                                    <option>เพชรบุรี</option>
                                                    <option>เพชรบูรณ์</option>
                                                    <option>แพร่</option>
                                                    <option>พะเยา</option>
                                                    <option>ภูเก็ต</option>
                                                    <option>มหาสารคาม</option>
                                                    <option>มุกดาหาร</option>
                                                    <option>แม่ฮ่องสอน</option>
                                                    <option>ยะลา</option>
                                                    <option>ยโสธร</option>
                                                    <option>ร้อยเอ็ด</option>
                                                    <option>ระนอง</option>
                                                    <option>ระยอง</option>
                                                    <option>ราชบุรี</option>
                                                    <option>ลพบุรี</option>
                                                    <option>ลำปาง</option>
                                                    <option>ลำพูน</option>
                                                    <option>เลย</option>
                                                    <option>ศรีสะเกษ</option>
                                                    <option>สกลนคร</option>
                                                    <option>สงขลา</option>
                                                    <option>สตูล</option>
                                                    <option>สมุทรปราการ</option>
                                                    <option>สมุทรสงคราม</option>
                                                    <option>สมุทรสาคร</option>
                                                    <option>สระแก้ว</option>
                                                    <option>สระบุรี</option>
                                                    <option>สิงห์บุรี</option>
                                                    <option>สุโขทัย</option>
                                                    <option>สุพรรณบุรี</option>
                                                    <option>สุราษฎร์ธานี</option>
                                                    <option>สุรินทร์</option>
                                                    <option>หนองคาย</option>
                                                    <option>หนองบัวลำภู</option>
                                                    <option>อ่างทอง</option>
                                                    <option>อุดรธานี</option>
                                                    <option>อุทัยธานี</option>
                                                    <option>อุตรดิตถ์</option>
                                                    <option>อุบลราชธานี</option>
                                                    <option>อำนาจเจริญ</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>รหัสไปรษณีย์ *</label>
                                                <input id="zipcode" name="zipcode" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>เบอร์มือถือ *</label>
                                                <input id="telephone" name="telephone" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input id="email" name="email" type="text" class="form-control required email">
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
                                <h1>ประวัติการศึกษา</h1>
                                <fieldset>
                                    <h2>ประวัติการศึกษา</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>ระดับการศึกษา *</label>
                                                <select id="education" name="education" class="form-control required">
                                                    <option>ปริญญาตรี</option>
                                                    <option>ปริญญาโท</option>
                                                    <option>ปริญญาเอก</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>ปีการศึกษาที่จบ *</label>
                                                <select id="year_success" name="year_success" class="form-control required">
                                                    <?php $year = date('Y')+541; for ($i=$year; $i < ($year+2); $i++) { ?>
                                                       <option><?php echo $i;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>ภาควิชา *</label>
                                                <input id="department" name="department" type="text" value="<?php echo $this->session->userdata('Department');?>" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>สาขา *</label>
                                                <input id="major" name="major" type="text" value="<?php echo $this->session->userdata('Major');?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h1>ประวัติการทำงาน</h1>
                                <fieldset>
                                <h2>ประวัติการทำงาน</h2>
                                     <div class="row" id="chkstatus">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>สถานะ *</label>
                                                <select id="typejob" name="typejob" class="form-control required" onChange="chkstatus(this.value);">
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
                                                <input id="jobdescription" name="jobdescription" type="text" class="form-control">
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
                                                <input id="subdistrict_company" name="subdistrict_company" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>เขต/อำเภอ *</label>
                                                <input id="district_company" name="district_company" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>จังหวัด *</label>
                                                <select id="province_company" name="province_company" class="form-control">
                                                    <option>กรุณาเลือก</option>
                                                    <option>กรุงเทพมหานคร</option>
                                                    <option>กระบี่</option>
                                                    <option>กาญจนบุรี</option>
                                                    <option>กาฬสินธุ์</option>
                                                    <option>กำแพงเพชร</option>
                                                    <option>ขอนแก่น</option>
                                                    <option>จันทบุรี</option>
                                                    <option>ฉะเชิงเทรา</option>
                                                    <option>ชลบุรี</option>
                                                    <option>ชัยนาท</option>
                                                    <option>ชัยภูมิ</option>
                                                    <option>ชุมพร</option>
                                                    <option>เชียงราย</option>
                                                    <option>เชียงใหม่</option>
                                                    <option>ตรัง</option>
                                                    <option>ตราด</option>
                                                    <option>ตาก</option>
                                                    <option>นครนายก</option>
                                                    <option>นครปฐม</option>
                                                    <option>นครพนม</option>
                                                    <option>นครราชสีมา</option>
                                                    <option>นครศรีธรรมราช</option>
                                                    <option>นครสวรรค์</option>
                                                    <option>นนทบุรี</option>
                                                    <option>นราธิวาส</option>
                                                    <option>น่าน</option>
                                                    <option>บึงกาฬ</option>
                                                    <option>บุรีรัมย์</option>
                                                    <option>ปทุมธานี</option>
                                                    <option>ประจวบคีรีขันธ์</option>
                                                    <option>ปราจีนบุรี</option>
                                                    <option>ปัตตานี</option>
                                                    <option>พระนครศรีอยุธยา</option>
                                                    <option>พังงา</option>
                                                    <option>พัทลุง</option>
                                                    <option>พิจิตร</option>
                                                    <option>พิษณุโลก</option>
                                                    <option>เพชรบุรี</option>
                                                    <option>เพชรบูรณ์</option>
                                                    <option>แพร่</option>
                                                    <option>พะเยา</option>
                                                    <option>ภูเก็ต</option>
                                                    <option>มหาสารคาม</option>
                                                    <option>มุกดาหาร</option>
                                                    <option>แม่ฮ่องสอน</option>
                                                    <option>ยะลา</option>
                                                    <option>ยโสธร</option>
                                                    <option>ร้อยเอ็ด</option>
                                                    <option>ระนอง</option>
                                                    <option>ระยอง</option>
                                                    <option>ราชบุรี</option>
                                                    <option>ลพบุรี</option>
                                                    <option>ลำปาง</option>
                                                    <option>ลำพูน</option>
                                                    <option>เลย</option>
                                                    <option>ศรีสะเกษ</option>
                                                    <option>สกลนคร</option>
                                                    <option>สงขลา</option>
                                                    <option>สตูล</option>
                                                    <option>สมุทรปราการ</option>
                                                    <option>สมุทรสงคราม</option>
                                                    <option>สมุทรสาคร</option>
                                                    <option>สระแก้ว</option>
                                                    <option>สระบุรี</option>
                                                    <option>สิงห์บุรี</option>
                                                    <option>สุโขทัย</option>
                                                    <option>สุพรรณบุรี</option>
                                                    <option>สุราษฎร์ธานี</option>
                                                    <option>สุรินทร์</option>
                                                    <option>หนองคาย</option>
                                                    <option>หนองบัวลำภู</option>
                                                    <option>อ่างทอง</option>
                                                    <option>อุดรธานี</option>
                                                    <option>อุทัยธานี</option>
                                                    <option>อุตรดิตถ์</option>
                                                    <option>อุบลราชธานี</option>
                                                    <option>อำนาจเจริญ</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>รหัสไปรษณีย์ *</label>
                                                <input id="zipcode_company" name="zipcode_company" type="text" class="form-control">
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
                                                <input id="subdistrict_owner" name="subdistrict_owner" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>เขต/อำเภอ</label>
                                                <input id="district_owner" name="district_owner" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>จังหวัด *</label>
                                                <select id="province_owner" name="province_owner" class="form-control required">
                                                    <option>กรุณาเลือก</option>
                                                    <option>กรุงเทพมหานคร</option>
                                                    <option>กระบี่</option>
                                                    <option>กาญจนบุรี</option>
                                                    <option>กาฬสินธุ์</option>
                                                    <option>กำแพงเพชร</option>
                                                    <option>ขอนแก่น</option>
                                                    <option>จันทบุรี</option>
                                                    <option>ฉะเชิงเทรา</option>
                                                    <option>ชลบุรี</option>
                                                    <option>ชัยนาท</option>
                                                    <option>ชัยภูมิ</option>
                                                    <option>ชุมพร</option>
                                                    <option>เชียงราย</option>
                                                    <option>เชียงใหม่</option>
                                                    <option>ตรัง</option>
                                                    <option>ตราด</option>
                                                    <option>ตาก</option>
                                                    <option>นครนายก</option>
                                                    <option>นครปฐม</option>
                                                    <option>นครพนม</option>
                                                    <option>นครราชสีมา</option>
                                                    <option>นครศรีธรรมราช</option>
                                                    <option>นครสวรรค์</option>
                                                    <option>นนทบุรี</option>
                                                    <option>นราธิวาส</option>
                                                    <option>น่าน</option>
                                                    <option>บึงกาฬ</option>
                                                    <option>บุรีรัมย์</option>
                                                    <option>ปทุมธานี</option>
                                                    <option>ประจวบคีรีขันธ์</option>
                                                    <option>ปราจีนบุรี</option>
                                                    <option>ปัตตานี</option>
                                                    <option>พระนครศรีอยุธยา</option>
                                                    <option>พังงา</option>
                                                    <option>พัทลุง</option>
                                                    <option>พิจิตร</option>
                                                    <option>พิษณุโลก</option>
                                                    <option>เพชรบุรี</option>
                                                    <option>เพชรบูรณ์</option>
                                                    <option>แพร่</option>
                                                    <option>พะเยา</option>
                                                    <option>ภูเก็ต</option>
                                                    <option>มหาสารคาม</option>
                                                    <option>มุกดาหาร</option>
                                                    <option>แม่ฮ่องสอน</option>
                                                    <option>ยะลา</option>
                                                    <option>ยโสธร</option>
                                                    <option>ร้อยเอ็ด</option>
                                                    <option>ระนอง</option>
                                                    <option>ระยอง</option>
                                                    <option>ราชบุรี</option>
                                                    <option>ลพบุรี</option>
                                                    <option>ลำปาง</option>
                                                    <option>ลำพูน</option>
                                                    <option>เลย</option>
                                                    <option>ศรีสะเกษ</option>
                                                    <option>สกลนคร</option>
                                                    <option>สงขลา</option>
                                                    <option>สตูล</option>
                                                    <option>สมุทรปราการ</option>
                                                    <option>สมุทรสงคราม</option>
                                                    <option>สมุทรสาคร</option>
                                                    <option>สระแก้ว</option>
                                                    <option>สระบุรี</option>
                                                    <option>สิงห์บุรี</option>
                                                    <option>สุโขทัย</option>
                                                    <option>สุพรรณบุรี</option>
                                                    <option>สุราษฎร์ธานี</option>
                                                    <option>สุรินทร์</option>
                                                    <option>หนองคาย</option>
                                                    <option>หนองบัวลำภู</option>
                                                    <option>อ่างทอง</option>
                                                    <option>อุดรธานี</option>
                                                    <option>อุทัยธานี</option>
                                                    <option>อุตรดิตถ์</option>
                                                    <option>อุบลราชธานี</option>
                                                    <option>อำนาจเจริญ</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>รหัสไปรษณีย์ *</label>
                                                <input id="zipcode_owner" name="zipcode_owner" type="text" class="form-control">
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

                                <h1>Finish</h1>
                                <fieldset>
                                    <h2>Terms and Conditions</h2>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> 
                                    <label for="acceptTerms">ขอยืนยันว่าข้อมูลนี้เป็นความจริง</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
