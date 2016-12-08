<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.ico">
        <title>Amazon</title>

	      <meta name="description" content="Amazon" />
	      <meta name="keywords" content="Amazon" />
	      <meta name="author" content="Amazon" />

        <link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="css/font.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/pushy.css">
        <link rel="stylesheet" href="css/jquery.datetimepicker.css">
        <link rel="stylesheet" href="css/sweetalert.css">
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>


        <!-- MENU -->
        <?php include('inc-menu.php'); ?>

        <!-- Banner -->
        <div id="landing-content" style="background-image: url('images/franchise/banner-franchise.png');">
            <h1 class="fonts_dbadmanx fonts_size_in_banner_h1">แฟรนไชส์</h1>
        </div>


        <!-- Register Form-->
        <div class="news-detail margin-section fonts_dbadmanx">
            <div class="row">
                <div class="columns small-12 medium-12 large-12 text-center">
                    <a href="#nada" class="btn btn-inline"><span>ขั้นตอนการยื่นคำร้อง <i class="fa fa-chevron-circle-down" aria-hidden="true"></i> </span></a><br />
                    <a href="#nada" class="btn btn-inline"><span>วิธีการเตรียมเอกสาร <i class="fa fa-chevron-circle-down" aria-hidden="true"></i> </span></a>
                </div>
            </div>

            <div class="row margin-top25">
                <div class="columns small-12 medium-10 medium-offset-1 large-8 large-offset-2 fonts_size_txt_title weight_bold">
                    <i class="fa fa-pencil" aria-hidden="true"></i> กรอกข้อมูลเพิ่มคำร้อง
                </div>
            </div>

            <div class="row margin-top25">
                <div class="columns small-12 medium-10 medium-offset-1 large-8 large-offset-2 ">
                    <ul class="tabs" data-tabs id="example-tabs">
                        <li class="tabs-title is-active">
                            <a href="#panel1" aria-selected="true">
                                <p class="tabs-form tabs-form-number">1</p>&nbsp;<p class="tabs-form">รายละเอียดผู้ยื่นคำร้อง</p>
                            </a>
                        </li>
                        <li class="tabs-title">
                            <a href="#panel2">
                                <p class="tabs-form tabs-form-number">2</p>&nbsp;<p class="tabs-form">รายละเอียดผู้พื้นที่</p>
                            </a>
                        </li>
                        <li class="tabs-title">
                            <a href="#panel3">
                                <p class="tabs-form tabs-form-number">3</p>&nbsp;<p class="tabs-form">ยืนยัน</p>
                            </a>
                        </li>
                    </ul>

                    <form name="request_form">
                        <div class="tabs-content" data-tabs-content="example-tabs">

                            <div class="tabs-panel is-active" id="panel1">

                                  <div class="row">
                                      <div class="columns small-12 medium-12 large-12">
                                          <label class="fonts_dbadmanx fonts_size_txt_head weight_bold">วันที่ยื่นคำร้อง</label>
                                      </div>
                                      <div class="columns small-12 medium-4 large-4">
                                          <input type="text" name="request_datetime" id="request_datetime" class="request_datetime borderradius" value="" maxlength="10" />&nbsp;
                                          <i class="fa fa-calendar request_datetime" aria-hidden="true"></i>
                                      </div>
                                      <div class="columns small-12 medium-4 large-4">&nbsp;</div>
                                      <div class="columns small-12 medium-4 large-4">&nbsp;</div>

                                      <div class="columns small-12 medium-12 large-12">
                                          <label class="fonts_dbadmanx fonts_size_txt_head weight_bold">ประเภทผุ้ประกอบการ</label>
                                      </div>

                                      <div class="columns small-12 medium-12 large-12">
                                          <div class="row">
                                              <div class="columns small-12 medium-4 large-3 large-offset-1">
                                                  <input type="radio" name="type_of_company" id="type_of_company1" value="person" checked="checked" />&nbsp;&nbsp;
                                                  <label for="type_of_company1" class="fonts_cordiaupc fonts_size_txt_title">บุคคลธรรมดา</label>
                                              </div>
                                              <div class="columns small-12 medium-4 large-4">
                                                  <input type="text" name="request_username" id="request_username" class="request_username borderradius" maxlength="50" />
                                              </div>
                                              <div class="columns small-12 medium-4 large-4">
                                                    <input type="text" name="request_surname" id="request_surname" class="request_surname borderradius" maxlength="50" />
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="columns small-12 medium-4 large-3 large-offset-1">
                                                  <input type="radio" name="type_of_company" id="type_of_company2" value="company" />&nbsp;&nbsp;
                                                  <label for="type_of_company2" class="fonts_cordiaupc fonts_size_txt_title">นิติบุคคล</label>
                                              </div>
                                              <div class="columns small-12 medium-4 large-4">
                                                  <div><input type="text" name="request_company_name" id="request_company_name" class="request_company_name borderradius" maxlength="150" disabled="disabled" /></div>
                                              </div>
                                              <div class="columns small-12 medium-4 large-4">&nbsp;</div>
                                          </div>
                                      </div>

                                      <div class="columns small-12 medium-12 large-12">
                                            <label class="fonts_dbadmanx fonts_size_txt_head weight_bold">ช่องทางการติดต่อ</label>

                                            <div class="row">
                                                <div class="columns small-4 medium-4 large-4">
                                                    <input type="text" name="request_phone" id="request_phone" class="request_phone borderradius" maxlength="9" onkeypress="return isNumberKey(event)" />
                                                </div>
                                                <div class="columns small-4 medium-4 large-4">
                                                    <input type="text" name="request_tel" id="request_tel" class="request_tel borderradius displayInlineBlock" maxlength="10" onkeypress="return isNumberKey(event)" />
                                                    <label class="displayInlineBlock color_red weight_bold require_dot fonts_size_txt_head">*</label>
                                                </div>
                                                <div class="columns small-4 medium-4 large-4">
                                                    <input type="text" name="request_fax" id="request_fax" class="request_fax borderradius" maxlength="16" />
                                                </div>
                                            </div>
                                      </div>

                                      <div class="columns small-12 medium-12 large-12">&nbsp;</div>
                                      <div class="columns small-12 medium-12 large-12 line-underline"></div>
                                      <div class="columns small-12 medium-12 large-12">&nbsp;</div>

                                      <div class="columns small-12 medium-12 large-12">
                                            <label class="fonts_dbadmanx fonts_size_txt_head weight_bold">เคยมีประสบการณ์ในการดำเนินธุรกิจร้านกาแฟหรือไม่ : </label>
                                            <div class="row">
                                                <div class="columns small-12 medium-12 large-11 large-offset-1">
                                                    <input type="radio" name="request_experience" id="request_experience_no" value="noexp" checked="checked" />&nbsp;&nbsp;
                                                    <label for="request_experience_no" class="fonts_cordiaupc fonts_size_txt_title">ไม่มีประสบการณ์</label>
                                                </div>
                                                <div class="columns small-4 medium-4 large-3 large-offset-1">
                                                    <input type="radio" name="request_experience" id="request_experience_yes" value="hasexp" />&nbsp;&nbsp;
                                                    <label for="request_experience_yes" class="fonts_cordiaupc fonts_size_txt_title">มีประสบการณ์</label>
                                                </div>
                                                <div class="columns small-8 medium-8 large-8">
                                                    <input type="text" name="request_experience_other" id="request_experience_other" class="request_experience_other borderradius" disabled="disabled" maxlength="180" />
                                                </div>
                                            </div>
                                      </div>

                                      <div class="columns small-12 medium-12 large-12 text-center margin-top50">
                                          <button class="btn-aboutus btn_franchise_step_one">ถัดไป</button>
                                      </div>
                                  </div>
                            </div>


                            <div class="tabs-panel" id="panel2">
                              <div class="row">
                                  <div class="columns small-12 medium-12 large-12">
                                      <label class="fonts_dbadmanx fonts_size_txt_head weight_bold displayInlineBlock">ประเภทสถานีบริการ
                                        <label class="displayInlineBlock color_red weight_bold require_dot fonts_size_txt_head">*</label> :
                                      </label>
                                      <div class="row">
                                          <div class="columns small-12 medium-12 large-11 large-offset-1">
                                              <input type="radio" name="request_station">&nbsp;&nbsp;
                                              <label class="fonts_cordiaupc fonts_size_txt_title">นอกสถานีบริการ</label>
                                          </div>
                                          <div class="columns small-12 medium-12 large-11 large-offset-1">
                                              <input type="radio" name="request_station">&nbsp;&nbsp;
                                              <label class="fonts_cordiaupc fonts_size_txt_title">ในสถานีบริการ</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="columns small-12 medium-6 large-6">
                                      <label class="fonts_dbadmanx fonts_size_txt_head weight_bold">ประเภทการเป็นเข้าของ* :</label>
                                      <select name="request_select_" id="select_month" class="minimal">
                                          <option>กรุณาเลือก</option>
                                          <option>ประเภทเจ้าของ 1</option>
                                          <option>ประเภทเจ้าของ 2</option>
                                          <option>ประเภทเจ้าของ 3</option>
                                          <option>ประเภทเจ้าของ 4</option>
                                      </select>
                                  </div>
                                  <div class="columns small-12 medium-6 large-6">
                                      <label class="fonts_dbadmanx fonts_size_txt_head weight_bold">เลขที่อ้างอิงหนังสืออนุมัติ :</label>
                                      <input type="text" name="request_book_number" id="request_book_number" class="request_book_number borderradius" />
                                  </div>
                                  <div class="columns small-12 medium-6 large-6">
                                      <label class="fonts_dbadmanx fonts_size_txt_head weight_bold">Operation ผู้รับผิดชอบ* :</label>
                                      <select name="request_select_" id="select_month" class="minimal">
                                          <option>กรุณาเลือก</option>
                                          <option>ผู้รับผิดชอบ 1</option>
                                          <option>ผู้รับผิดชอบ 2</option>
                                          <option>ผู้รับผิดชอบ 3</option>
                                          <option>ผู้รับผิดชอบ 4</option>
                                      </select>
                                  </div>
                                  <div class="columns small-12 medium-6 large-6">&nbsp;</div>
                              </div>

                              <div class="columns small-12 medium-12 large-12">&nbsp;</div>
                              <div class="columns small-12 medium-12 large-12 line-underline"></div>
                              <div class="columns small-12 medium-12 large-12">&nbsp;</div>

                              <div class="row">
                                  <div class="columns small-12 medium-12 large-12">
                                      <label class="fonts_dbadmanx fonts_size_txt_head weight_bold displayInlineBlock">สาขาที่ตั้งร้าน
                                        <label class="displayInlineBlock color_red weight_bold require_dot fonts_size_txt_head">*</label> :
                                      </label>

                                      <div class="row">
                                          <div class="columns small-12 medium-12 large-12">
                                              <input type="radio" name="request_local_branch">&nbsp;&nbsp;
                                              <label class="fonts_cordiaupc fonts_size_txt_title">สาขาในประเทศไทย</label>
                                          </div>

                                          <div class="columns small-4 medium-4 large-4">
                                              <input type="text" name="request_addr_no" id="request_addr_no" class="request_addr_no borderradius" />
                                          </div>
                                          <div class="columns small-4 medium-4 large-4">
                                              <input type="text" name="request_moo" id="request_moo" class="request_moo borderradius" />
                                          </div>
                                          <div class="columns small-4 medium-4 large-4">
                                              <input type="text" name="request_build" id="request_build" class="request_build borderradius" />
                                          </div>
                                          <div class="columns small-4 medium-4 large-4">
                                              <input type="text" name="request_floor" id="request_floor" class="request_floor borderradius" />
                                          </div>
                                          <div class="columns small-4 medium-4 large-4">
                                              <input type="text" name="request_room" id="request_room" class="request_room borderradius" />
                                          </div>
                                          <div class="columns small-4 medium-4 large-4">
                                              <input type="text" name="request_road" id="request_road" class="request_road borderradius" />
                                          </div>
                                          <div class="columns small-4 medium-4 large-4">
                                              <select name="select_province" id="select_province" class="minimal">
                                                  <option>จังหวัด</option>
                                                  <option>กรุงเทพ</option>
                                                  <option>นครปฐม</option>
                                                  <option>สมุทรปราการ</option>
                                              </select>
                                          </div>
                                          <div class="columns small-4 medium-4 large-4">
                                              <select name="select_district" id="select_district" class="minimal">
                                                  <option>อำเภอ</option>
                                                  <option>อำเภอ</option>
                                                  <option>อำเภอ</option>
                                                  <option>อำเภอ</option>
                                              </select>
                                          </div>
                                          <div class="columns small-4 medium-4 large-4">
                                              <select name="select_district" id="select_district" class="minimal">
                                                  <option>ตำบล</option>
                                                  <option>ตำบล</option>
                                                  <option>ตำบล</option>
                                                  <option>ตำบล</option>
                                              </select>
                                          </div>
                                          <div class="columns small-4 medium-4 large-4">
                                              <input type="text" name="request_postnumber" id="request_postnumber" class="request_postnumber borderradius" />
                                          </div>
                                          <div class="columns small-8 medium-8 large-8">&nbsp;</div>
                                      </div>


                                      <div class="row">
                                          <div class="columns small-12 medium-12 large-12">
                                              <input type="radio" name="request_local_branch">&nbsp;&nbsp;
                                              <label class="fonts_cordiaupc fonts_size_txt_title">สาขาต่างประเทศ</label>
                                          </div>

                                          <div class="columns small-6 medium-6 large-6">
                                              <select name="select_country" id="select_country" class="minimal">
                                                  <option>ประเทศ</option>
                                                  <option>ไทย</option>
                                                  <option>เวียดนาม</option>
                                                  <option>เมียนม่า</option>
                                              </select>
                                          </div>
                                          <div class="columns small-6 medium-6 large-6">
                                              <input type="text" name="request_city" id="request_city" class="request_city borderradius" />
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="columns small-12 medium-12 large-12">&nbsp;</div>
                              <div class="columns small-12 medium-12 large-12 line-underline"></div>
                              <div class="columns small-12 medium-12 large-12">&nbsp;</div>

                              <div class="row">
                                  <div class="columns small-12 medium-12 large-12">
                                      <label class="fonts_dbadmanx fonts_size_txt_head weight_bold displayInlineBlock">ความเป็นเจ้าของพื้นที่
                                          <label class="displayInlineBlock color_red weight_bold require_dot fonts_size_txt_head">*</label> :
                                      </label>

                                      <div class="row">
                                          <div class="columns small-12 medium-12 large-12">
                                              <input type="radio" name="request_owenornot">&nbsp;&nbsp;
                                              <label class="fonts_cordiaupc fonts_size_txt_title">เป็นเจ้าของพื้นที่</label>
                                          </div>
                                          <div class="columns small-6 medium-6 large-5">
                                              <input type="radio" name="request_owenornot">&nbsp;&nbsp;
                                              <label class="fonts_cordiaupc fonts_size_txt_title">เช่าพื้นที่จากเจ้าของพื้นที่</label>
                                          </div>
                                          <div class="columns small-6 medium-6 large-7">
                                              <input type="text" name="request_price_per_month" id="request_price_per_month" class="request_price_per_month borderradius displayInlineBlock" />&nbsp;
                                              <label class="displayInlineBlock">บาท</label>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="columns small-12 medium-12 large-12">
                                      <label class="fonts_dbadmanx fonts_size_txt_head weight_bold displayInlineBlock">พื้นที่ตารางเมตร
                                          <label class="displayInlineBlock color_red weight_bold require_dot fonts_size_txt_head">*</label> :
                                      </label>
                                      <div><input type="text" name="request_area" id="request_area" class="request_area borderradius" /></div>
                                  </div>

                                  <div class="columns small-12 medium-12 large-12">
                                      <label class="fonts_dbadmanx fonts_size_txt_head weight_bold displayInlineBlock">Location Type
                                          <label class="displayInlineBlock color_red weight_bold require_dot fonts_size_txt_head">*</label> :
                                      </label>

                                      <div class="row">
                                          <div class="columns small-12 medium-6 large-6">
                                              <select name="select_location" id="select_location" class="minimal">
                                                  <option>กรุณาเลือก</option>
                                                  <option>กรุณาเลือก</option>
                                                  <option>กรุณาเลือก</option>
                                                  <option>กรุณาเลือก</option>
                                              </select>
                                          </div>
                                          <div class="columns small-12 medium-6 large-6">
                                              <input type="text" name="request_name_place" />
                                          </div>
                                          <div class="columns small-12 medium-6 large-6">
                                              <input type="text" name="request_lat" />
                                          </div>
                                          <div class="columns small-12 medium-6 large-6">
                                              <input type="text" name="request_lng" />
                                          </div>

                                        </div>
                                  </div>
                                  <div class="columns small-12 medium-12 large-12">
                                      <label>หมายเหตุ : </label>
                                      <div><textarea name="request_comment"></textarea></div>
                                      <label>แนบไฟล์แผนที่แสดงที่ตั้งร้านและสถานที่สำคัญโดยรอบรัศมี 1 กิโลเมตร : </label>
                                      <div><input type="file" name="request_file"></div>
                                  </div>

                                    <div class="columns small-12 medium-12 large-12">
                                        <button class="btn-aboutus">กลับ</button>
                                        <button class="btn-aboutus">ถัดไป</button>
                                    </div>
                              </div>
                            </div>

                            <div class="tabs-panel" id="panel3">
                                <div class="row">
                                    <div class="columns small-12 medium-12 large-12">
                                          <div class="row">
                                                <div class="columns small-12 medium-6 large-6">รายละเอียดผู้ยื่นคำร้อง</div>
                                                <div class="columns small-12 medium-6 large-6">&nbsp;</div>

                                                <div class="columns small-12 medium-6 large-6">วันที่ยื่นคำร้อง : </div>
                                                <div class="columns small-12 medium-6 large-6">25 ต.ค. 59</div>

                                                <div class="columns small-12 medium-6 large-6">ประเภทผู้ปรกอบการ : </div>
                                                <div class="columns small-12 medium-6 large-6">บุคคลธรรมดา<br />นายสรวิชย์ จันทร์เพียร</div>

                                                <div class="columns small-12 medium-6 large-6">ช่องทางการติดต่อ : </div>
                                                <div class="columns small-12 medium-6 large-6">0827812433</div>

                                                <div class="columns small-12 medium-6 large-6">ประสบการณ์ในการดำเนินธุรกิจร้านกาแฟ : </div>
                                                <div class="columns small-12 medium-6 large-6">ไม่มี</div>
                                          </div>

                                          <div class="row">
                                                <div class="columns small-12 medium-6 large-6">รายละเอียดพื้นที่</div>
                                                <div class="columns small-12 medium-6 large-6">&nbsp;</div>

                                                <div class="columns small-12 medium-6 large-6">ประเภทสถานีบริการ : </div>
                                                <div class="columns small-12 medium-6 large-6">นอกสถานีบริการ</div>

                                                <div class="columns small-12 medium-6 large-6">ประเภทการเป็นเจ้าของ : </div>
                                                <div class="columns small-12 medium-6 large-6">-</div>

                                                <div class="columns small-12 medium-6 large-6">เลขที่อ้างอิงหนังสืออนุมัติ : </div>
                                                <div class="columns small-12 medium-6 large-6">32948560210</div>

                                                <div class="columns small-12 medium-6 large-6">Operation ผู้รับผิดชอบ : </div>
                                                <div class="columns small-12 medium-6 large-6">-</div>

                                                <div class="columns small-12 medium-6 large-6">สถานที่ตั้งร้าน : </div>
                                                <div class="columns small-12 medium-6 large-6">ในประเทศไทย<br />15 อาคาร Neumerlin ชั้น 8 ถนนประดิพัทธ์<br />แขวงสามเสนใน เขตพญาไท กรุงเทพมหานคร<br />10400</div>

                                                <div class="columns small-12 medium-6 large-6">ความเป็นเจ้าของพื้นที่ : </div>
                                                <div class="columns small-12 medium-6 large-6">เป็นเจ้าของพื้นที่</div>

                                                <div class="columns small-12 medium-6 large-6">พื้ันที่ตารางเมตร : </div>
                                                <div class="columns small-12 medium-6 large-6">30</div>

                                                <div class="columns small-12 medium-6 large-6">Location Type : </div>
                                                <div class="columns small-12 medium-6 large-6">-</div>

                                                <div class="columns small-12 medium-6 large-6">ละติจูด : </div>
                                                <div class="columns small-12 medium-6 large-6">-</div>

                                                <div class="columns small-12 medium-6 large-6">ลองติจูด : </div>
                                                <div class="columns small-12 medium-6 large-6">-</div>
                                          </div>
                                    </div>

                                    <div class="columns small-12 medium-12 large-12 text-center">
                                        รายละเอียดเพิ่มเติมสามารถติดต่อเจ้าหน้าที่ได้ที่<br />โทร. 025372391 อีเมล์ <a href="mailto:">franchiseamazon@pttplc.com</a>
                                    </div>

                                    <div class="columns small-12 medium-12 large-12 text-center">
                                      <button class="btn-aboutus">กลับ</button>
                                      <button class="btn-aboutus">ส่งข้อมูล</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>


        <!-- Footer -->
        <?php include('inc-footer.php'); ?>


        <script src="js/jquery.js"></script>
        <script src="js/what-input.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/pushy.min.js"></script>
        <script src="js/jquery.datetimepicker.full.min.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/script.franchise.js"></script>

    </body>

</html>
