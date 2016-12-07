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
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>

        <!-- MENU -->
        <?php include('inc-menu.php'); ?>

        <!-- Banner -->
        <div id="landing-content" style="background-image: url('images/news/banner-news.png');">
            <h1 class="fonts_dbadmanx fonts_size_in_banner_h1">ข่าว และ อัพเดท</h1>
        </div>


        <!-- New Slider -->
        <div class="news-slider">
            <div class="row ">
                <div class="columns small-12 medium-12 large-12">
                    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                        <ul id="featured1" class="orbit-container">
                            <li class="is-active orbit-slide">
                                <a href="news-detail.php"><img class="orbit-image" src="images/news/news-slide.jpg" alt="Amazon News"></a>
                            </li>
                            <li class="orbit-slide">
                                <a href="news-detail.php"><img class="orbit-image" src="images/news/news-slide.jpg" alt="Amazon News"></a>
                            </li>
                        </ul>

                        <nav class="orbit-bullets">
                            <button class="is-active" data-slide="0"></button>
                            <button data-slide="1"></button>
                        </nav>
                    </div>

                    <div class="news-carousel-content">
                        <div class="news-carousel news-content-0">
                            <a href="news-detail.php">
                                <h2 class="fonts_dbadmanx fonts_size_txt_title no-margin-bottom">ประกาศผลรางวัลโครงการประกวดออกแบบร้าน<br />Cafe Amazon Awake Award</h2>
                                <p class="news-datetime-slide">27 พฤษภาคม 2559</p>
                            </a>
                        </div>
                        <div class="news-carousel news-content-1">
                            <a href="news-detail.php">
                                <h2 class="fonts_dbadmanx fonts_size_txt_title no-margin-bottom">ประกาศผลรางวัลโครงการประกวดออกแบบร้าน<br />Cafe Amazon Awake Award</h2>
                                <p class="news-datetime-slide">27 พฤษภาคม 2559</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row line-underline"></div>
        </div>


        <!-- News -->
        <div class="amazon-news margin-top50 fonts_cordiaupc">
              <div class="row">
                  <div class="columns small-12 medium-12 large-8 large-offset-2 news-filter">
                      <div class="row">
                          <div class="columns small-12 medium-4 large-6">
                              <p class="news-filter-type3">ทั้งหมด </p>
                          </div>
                          <div class="columns small-12 medium-4 large-3 m_margintopbottom5">
                                <div class="row">
                                    <div class="columns small-3 medium-4 large-5 text-left news-filter-type">เดือน : </div>
                                    <div class="columns small-9 medium-8 large-7 text-right news-filter-type2">
                                      <select name="select_month" id="select_month" class="minimal">
                                          <option>เดือน</option>
                                          <option>มกราคม</option>
                                          <option>กุมภาพันธ์</option>
                                          <option>มีนาคม</option>
                                          <option>เมษายน</option>
                                          <option>พฤษภาคม</option>
                                          <option>มิถุนายน</option>
                                          <option>กรกฎาคม</option>
                                          <option>สิงหาคม</option>
                                          <option>กันยายน</option>
                                          <option>ตุลาคม</option>
                                          <option>พฤศจิกายน</option>
                                          <option>ธันวาคม</option>
                                          <option>January</option>
                                          <option>February</option>
                                          <option>March</option>
                                          <option>April</option>
                                          <option>May</option>
                                          <option>June</option>
                                          <option>July</option>
                                          <option>August</option>
                                          <option>September</option>
                                          <option>October</option>
                                          <option>November</option>
                                          <option>December</option>
                                      </select>
                                    </div>
                                </div>
                          </div>
                          <div class="columns small-12 medium-4 large-3 m_margintopbottom5">
                            <div class="row">
                                <div class="columns small-3 medium-4 large-3 text-left news-filter-type">ปี : </div>
                                <div class="columns small-9 medium-8 large-9 text-right news-filter-type2">
                                    <select name="select_month" id="select_month" class="minimal">
                                        <option>ปี</option>
                                        <option>2559</option>
                                        <option>2558</option>
                                        <option>2557</option>
                                        <option>2556</option>
                                    </select>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="columns small-12 medium-12 large-12">
                  <div class="row small-up-1 medium-up-2 large-up-2 news-page" id="news-page-1">
                      <div class="columns text-right">
                          <div class="amazon-csr-divleft">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/news/news-pic-02.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description text-left">ประกาศผลรางวัลโครงการประกวดออกแบบร้าน Cafe Amazon Awake Award</p>
                                  <p class="news-datetime text-left">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns text-left">
                          <div class="amazon-csr-divright">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/news/news-pic-03.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description">คาเฟ่ อเมซอนขอแสดงความยินดีกับทีม ThaiEverest 2016 ที่สามารถพิชิตยอดเขาเอเว...</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns">&nbsp;</div>
                      <div class="columns">&nbsp;</div>

                      <div class="columns padding-zero">
                          <div class="amazon-csr-divleft news-divleft">
                              <a href="news-detail.php"><img src="images/csr/csr-pic03.jpg" class="thumbnail no-margin-bottom" alt=""></a>
                        </div>
                      </div>
                      <div class="columns padding-zero">
                          <div class="amazon-csr-divright news-divright padding-top50">
                              <a href="news-detail.php">
                                  <p class="news-description">โครงการวิจัยและพัฒนาการปลูกและการผลิตกาแฟ<br />ระบบอนุรักษ์ทรัพยากรธรรมชาติ<br />เพื่อการพัฒนาที่ยั่งยืน</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                                  <p class="news-content fonts_size_txt_text">ใช้พื้นที่ดำเนินงาน (โครงการนำร่อง) ในเขตรับผิดชอบของสถานีเกษตรหลวงอินทนนท์ ตำบนบ้านหลวง อำเภอจอมทอง จังหวัดเชียงใหม่ โดยแบ่งออกเป็น 2 พื้นที่ ...<label class="fonts_size_txt_text csr-continue">อ่านต่อ</lable></p>
                              </a>
                          </div>
                      </div>

                      <div class="columns">&nbsp;</div>
                      <div class="columns">&nbsp;</div>
                      <div class="columns">&nbsp;</div>
                      <div class="columns">&nbsp;</div>

                      <div class="columns text-right">
                          <div class="amazon-csr-divleft">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/news/news-pic-04.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description text-left">ประกาศผลรางวัลโครงการประกวดออกแบบร้าน Cafe Amazon Awake Award</p>
                                  <p class="news-datetime text-left">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns text-left">
                          <div class="amazon-csr-divright">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/news/news-pic-05.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description">คาเฟ่ อเมซอนขอแสดงความยินดีกับทีม ThaiEverest 2016 ที่สามารถพิชิตยอดเขาเอเว...</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns">&nbsp;</div>
                      <div class="columns">&nbsp;</div>

                      <div class="columns">
                          <div class="amazon-csr-divleft">
                              <a href="news-detail.php"><img src="images/news/news-pic-07.jpg" class="thumbnail" alt=""></a>
                        </div>
                      </div>
                      <div class="columns">
                          <div class="amazon-csr-divright margin-top50">
                              <a href="news-detail.php">
                                  <p class="news-description">โครงการวิจัยและพัฒนาการปลูกและการผลิตกาแฟ<br />ระบบอนุรักษ์ทรัพยากรธรรมชาติ<br />เพื่อการพัฒนาที่ยั่งยืน</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                                  <p class="news-content fonts_size_txt_text">ใช้พื้นที่ดำเนินงาน (โครงการนำร่อง) ในเขตรับผิดชอบของสถานีเกษตรหลวงอินทนนท์ ตำบนบ้านหลวง อำเภอจอมทอง จังหวัดเชียงใหม่ โดยแบ่งออกเป็น 2 พื้นที่ ...<label class="fonts_size_txt_text csr-continue">อ่านต่อ</lable></p>
                              </a>
                          </div>
                      </div>
                  </div>


                  <div class="row small-up-1 medium-up-2 large-up-2 news-page" id="news-page-2">
                      <div class="columns text-right">
                          <div class="amazon-csr-divleft">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/csr/csr-pic01.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description text-left">ประกาศผลรางวัลโครงการประกวดออกแบบร้าน Cafe Amazon Awake Award</p>
                                  <p class="news-datetime text-left">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns text-left">
                          <div class="amazon-csr-divright">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/csr/csr-pic02.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description">คาเฟ่ อเมซอนขอแสดงความยินดีกับทีม ThaiEverest 2016 ที่สามารถพิชิตยอดเขาเอเว...</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns">&nbsp;</div>
                      <div class="columns">&nbsp;</div>

                      <div class="columns">
                          <div class="amazon-csr-divleft">
                              <a href="news-detail.php"><img src="images/csr/csr-pic03.jpg" class="thumbnail" alt=""></a>
                        </div>
                      </div>
                      <div class="columns">
                          <div class="amazon-csr-divright padding-top50">
                              <a href="news-detail.php">
                                  <p class="news-description">โครงการวิจัยและพัฒนาการปลูกและการผลิตกาแฟ<br />ระบบอนุรักษ์ทรัพยากรธรรมชาติ<br />เพื่อการพัฒนาที่ยั่งยืน</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                                  <p class="news-content fonts_size_txt_text">ใช้พื้นที่ดำเนินงาน (โครงการนำร่อง) ในเขตรับผิดชอบของสถานีเกษตรหลวงอินทนนท์ ตำบนบ้านหลวง อำเภอจอมทอง จังหวัดเชียงใหม่ โดยแบ่งออกเป็น 2 พื้นที่ ...<label class="fonts_size_txt_text csr-continue">อ่านต่อ</lable></p>
                              </a>
                          </div>
                      </div>

                      <div class="columns">&nbsp;</div>
                      <div class="columns">&nbsp;</div>

                      <div class="columns text-right">
                          <div class="amazon-csr-divleft">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/csr/csr-pic01.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description text-left">ประกาศผลรางวัลโครงการประกวดออกแบบร้าน Cafe Amazon Awake Award</p>
                                  <p class="news-datetime text-left">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns text-left">
                          <div class="amazon-csr-divright">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/csr/csr-pic02.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description">คาเฟ่ อเมซอนขอแสดงความยินดีกับทีม ThaiEverest 2016 ที่สามารถพิชิตยอดเขาเอเว...</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns">&nbsp;</div>
                      <div class="columns">&nbsp;</div>

                      <div class="columns">
                          <div class="amazon-csr-divleft">
                              <a href="news-detail.php"><img src="images/csr/csr-pic03.jpg" class="thumbnail" alt=""></a>
                        </div>
                      </div>
                      <div class="columns">
                          <div class="amazon-csr-divright margin-top50">
                              <a href="news-detail.php">
                                  <p class="news-description">โครงการวิจัยและพัฒนาการปลูกและการผลิตกาแฟ<br />ระบบอนุรักษ์ทรัพยากรธรรมชาติ<br />เพื่อการพัฒนาที่ยั่งยืน</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                                  <p class="news-content fonts_size_txt_text">ใช้พื้นที่ดำเนินงาน (โครงการนำร่อง) ในเขตรับผิดชอบของสถานีเกษตรหลวงอินทนนท์ ตำบนบ้านหลวง อำเภอจอมทอง จังหวัดเชียงใหม่ โดยแบ่งออกเป็น 2 พื้นที่ ...<label class="fonts_size_txt_text csr-continue">อ่านต่อ</lable></p>
                              </a>
                          </div>
                      </div>
                  </div>


                  <div class="row small-up-1 medium-up-2 large-up-2 news-page" id="news-page-3">
                      <div class="columns text-right">
                          <div class="amazon-csr-divleft">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/csr/csr-pic01.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description text-left">ประกาศผลรางวัลโครงการประกวดออกแบบร้าน Cafe Amazon Awake Award</p>
                                  <p class="news-datetime text-left">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns text-left">
                          <div class="amazon-csr-divright">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/csr/csr-pic02.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description">คาเฟ่ อเมซอนขอแสดงความยินดีกับทีม ThaiEverest 2016 ที่สามารถพิชิตยอดเขาเอเว...</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns">&nbsp;</div>
                      <div class="columns">&nbsp;</div>

                      <div class="columns">
                          <div class="amazon-csr-divleft">
                              <a href="news-detail.php"><img src="images/csr/csr-pic03.jpg" class="thumbnail" alt=""></a>
                        </div>
                      </div>
                      <div class="columns">
                          <div class="amazon-csr-divright padding-top50">
                              <a href="news-detail.php">
                                  <p class="news-description">โครงการวิจัยและพัฒนาการปลูกและการผลิตกาแฟ<br />ระบบอนุรักษ์ทรัพยากรธรรมชาติ<br />เพื่อการพัฒนาที่ยั่งยืน</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                                  <p class="news-content fonts_size_txt_text">ใช้พื้นที่ดำเนินงาน (โครงการนำร่อง) ในเขตรับผิดชอบของสถานีเกษตรหลวงอินทนนท์ ตำบนบ้านหลวง อำเภอจอมทอง จังหวัดเชียงใหม่ โดยแบ่งออกเป็น 2 พื้นที่ ...<label class="fonts_size_txt_text csr-continue">อ่านต่อ</lable></p>
                              </a>
                          </div>
                      </div>

                      <div class="columns">&nbsp;</div>
                      <div class="columns">&nbsp;</div>

                      <div class="columns text-right">
                          <div class="amazon-csr-divleft">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/csr/csr-pic01.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description text-left">ประกาศผลรางวัลโครงการประกวดออกแบบร้าน Cafe Amazon Awake Award</p>
                                  <p class="news-datetime text-left">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns text-left">
                          <div class="amazon-csr-divright">
                              <a href="news-detail.php">
                                  <p class="news-picture"><img src="images/csr/csr-pic02.jpg" class="thumbnail" alt=""></p>
                                  <p class="news-description">คาเฟ่ อเมซอนขอแสดงความยินดีกับทีม ThaiEverest 2016 ที่สามารถพิชิตยอดเขาเอเว...</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                              </a>
                          </div>
                      </div>

                      <div class="columns">&nbsp;</div>
                      <div class="columns">&nbsp;</div>

                      <div class="columns">
                          <div class="amazon-csr-divleft">
                              <a href="news-detail.php"><img src="images/csr/csr-pic03.jpg" class="thumbnail" alt=""></a>
                        </div>
                      </div>
                      <div class="columns">
                          <div class="amazon-csr-divright margin-top50">
                              <a href="news-detail.php">
                                  <p class="news-description">โครงการวิจัยและพัฒนาการปลูกและการผลิตกาแฟ<br />ระบบอนุรักษ์ทรัพยากรธรรมชาติ<br />เพื่อการพัฒนาที่ยั่งยืน</p>
                                  <p class="news-datetime">27 พฤษภาคม 2559</p>
                                  <p class="news-content fonts_size_txt_text">ใช้พื้นที่ดำเนินงาน (โครงการนำร่อง) ในเขตรับผิดชอบของสถานีเกษตรหลวงอินทนนท์ ตำบนบ้านหลวง อำเภอจอมทอง จังหวัดเชียงใหม่ โดยแบ่งออกเป็น 2 พื้นที่ ...<label class="fonts_size_txt_text csr-continue">อ่านต่อ</lable></p>
                              </a>
                          </div>
                      </div>
                  </div>


            </div>

            <div class="columns small-10 medium-10 large-10 fonts_dbadmanx text-center margin-top50">
                <ul class="pagination" role="navigation" aria-label="Pagination">
                    <li class="current"><a href="?pages=1" aria-label="Page 1">1</a></li>
                    <li><a href="?pages=2" aria-label="Page 2">2</a></li>
                    <li><a href="?pages=3" aria-label="Page 3">3</a></li>
                </ul>
            </div>
            <div class="columns small-2 medium-2 large-2 fonts_dbadmanx text-center margin-top50">
                <div class="next_page" onclick="nextpages()"><a href="">ถัดไป <img src="images/icon_next_cir.png" /></a></div>
            </div>

      </div>



        <!-- Footer -->
        <?php include('inc-footer.php'); ?>

        <script src="js/jquery.js"></script>
        <script src="js/what-input.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/pushy.min.js"></script>
        <script src="js/jquery.devrama.slider.js"></script>
        <script src="js/app.js"></script>
        <script src="js/script.news.js"></script>
    </body>

</html>
