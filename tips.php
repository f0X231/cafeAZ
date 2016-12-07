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
        <div id="landing-content" style="background-image: url('images/tips/banner-tips.png');">
            <h1 class="fonts_dbadmanx fonts_size_in_banner_h1">เกร็ดความรู้เรื่องกาแฟ</h1>
        </div>

        <!-- Slider -->
        <div class="tips-slider">
            <div class="row text-center">
                <div class="columns small-12 medium-12 large-12">
                    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                        <ul class="orbit-container">
                            <li class="is-active orbit-slide">
                                <img class="orbit-image" src="images/tips/slide-tips01.jpg" alt="amazon tips" />
                            </li>
                            <li class="orbit-slide">
                                <img class="orbit-image" src="images/tips/slide-tips01.jpg" alt="amazon tips" />
                            </li>
                        </ul>

                        <nav class="orbit-bullets">
                            <button class="is-active" data-slide="0"></button>
                            <button data-slide="1"></button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <!-- Tips -->
        <div class="amazon-tips fonts_cordiaupc fonts_size_txt_text margin-top50">
            <div class="row">
                <div class="columns small-12 medium-12 large-10 large-offset-1">
                    <h2 class="fonts_dbadmanx fonts_size_txt_title text-center">ต้นทางแก่งกาแฟคุณภาพ</h2>


                    <div class="tips-detail-txt">
                        <p class="fonts_size_txt_head no-margin-bottom">กาแฟอราบิก้า</p>
                        <p>ปลูกได้ดีในสภาพอากาศเย็นบนดอยสูง อุณหภูมิเฉลี่ย 15-23 C ระดับความสูงตั้งแต่ 1,000 เมตร</p>
                    </div>

                    <div class="tips-detail-txt">
                        <p class="fonts_size_txt_head no-margin-bottom">กาแฟโรบัสต้า</p>
                        <p>ปลูกได้ดีในสภาพอากาศร้อนชื้น อุณหภูมิเฉลี่ย 15-23 C ระดับความสูงตั้งแต่ระดับน้ำทะเล ไปจนถึง 1,000 เมตร</p>
                    </div>
                </div>

                <div class="columns small-12 medium-12 large-12 text-center margin-top50">
                    <img src="images/tips/tips-pic01.png" />
                </div>
            </div>


            <div class="columns small-12 medium-12 large-12 fonts_dbadmanx margin-top50">
                <div class="row margin-bottom50">
                    <div class="columns small-4 medium-4 large-6 text-left sectiop-goback">&nbsp;</div>
                    <div class="columns small-8 medium-8 large-6 text-right section-social">
                        <div class="share-to-social weight_bold">แชร ์</div>
                        <div class="share-to-social">&nbsp;&nbsp;|&nbsp;&nbsp;</div>
                        <div class="share-to-social">
                            <a target="_blank" href="https://twitter.com/share?url=http://luckywindmill.com/amazon/tips.php">
                                <div class="social-share ss-twitter"></div>
                            </a>
                            <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=luckywindmill.com/amazon/tips.php">
                                <div class="social-share ss-facebook"></div>
                            </a>
                            <a target="_blank" href="https://plus.google.com/share?url=luckywindmill.com/amazon/tips.php">
                                <div class="social-share ss-googleplus"></div>
                            </a>
                            <div class="social-share ss-print" onclick="window.print(); return false;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <!-- Footer -->
        <?php include('inc-footer.php'); ?>


        <script src="js/jquery.js"></script>
        <script src="js/what-input.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/pushy.min.js"></script>
        <script src="js/app.js"></script>

    </body>

</html>
