<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Amazon</title>

	    <meta name="description" content="Amazon" />
	    <meta name="keywords" content="Amazon" />
	    <meta name="author" content="Amazon" />

	    <link rel="shortcut icon" href="images/favicon.ico">
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
        <div id="landing-content" style="background-image: url('images/banner/products-banner-layer1.png');">
            <img src="images/banner/products-banner-layer2.png" class="slide-layer-1"></img>
        </div>


        <!-- Products Detail -->
        <div class="products-detail margin-section">
            <div class="row">
                <div class="columns small-12 medium-6 large-6 text-center products-picture">
                    <!--div><img src="images/products02.png" class="product-picture" /></div>
                    <ul class="icon-badge">
                        <li class="icon-badge-1"><div class="product-detail-icon pdicon-hot"></div></li>
                        <li class="icon-badge-2 active"><div class="product-detail-icon pdicon-cool"></div></li>
                        <li class="icon-badge-3"><div class="product-detail-icon pdicon-smooty"></div></li>
                    </ul-->

                    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                        <ul class="orbit-container">

                            <li class="is-active orbit-slide">
                                <img class="orbit-image" src="images/products01.png" alt="Space">
                            </li>
                            <li class="orbit-slide">
                                <img class="orbit-image" src="images/products02.png" alt="Space">
                            </li>
                            <li class="orbit-slide">
                                <img class="orbit-image" src="images/products03.png" alt="Space">
                            </li>
                        </ul>

                        <nav class="orbit-bullets icon-badge">
                            <button class="pdicon-hot is-active" data-slide="0"></button>
                            <button class="pdicon-cool" data-slide="1"></button>
                            <button class="pdicon-smooty" data-slide="2"></button>
                        </nav>
                    </div>
                </div>

                <div class="columns small-12 medium-6 large-6 fonts_dbadmanx product-detail-content">
                    <div class="products-detail-header">อเมซอน</div>
                    <div class="products-detail-txt">กาแฟที่มีรสเข้ม ซึ่งมีวิธีการชงโดยใช้แรงอัดไอน้ำหรือน้ำร้อนผ่านเมล็ดกาแฟคั่วที่บดละเอียดใส่ในแก้เล็ก ๆ เป็นชอต มีรสชาติกาแฟซึ่งเข้มข้นต่างจากกาแฟทั่ว ๆ ไปซึ่งชงแบบผ่านน้ำหยดและเพราะรสชาตเข้มข้นและหนักแน่นอัดเป็นเอกลักษณ์นี้เอง ทำให้คอกาแฟดื่มเอสเปรสโซ่โดยไม่ปรุงด้วยน้ำตาลหรือนม</div>
                    <div class="row margin-bottom50">
                        <div class="columns small-4 medium-4 large-6 text-left sectiop-goback">
                            <div class="goback-to-products">
                                <div class="icon-goback" onclick="goBack()"></div>
                                <div class="txt-goback weight_bold" onclick="goBack()">กลับ</div>
                            </div>
                        </div>
                        <div class="columns small-8 medium-8 large-6 text-right section-social">
                            <div class="share-to-social weight_bold">แชร ์</div>
                            <div class="share-to-social">&nbsp;&nbsp;|&nbsp;&nbsp;</div>
                            <div class="share-to-social">
                                <a target="_blank" href="https://twitter.com/intent/tweet?url=<?=urlencode($url)?>">
                                    <div class="social-share ss-twitter"></div>
                                </a>
                                <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=#url">
                                    <div class="social-share ss-facebook"></div>
                                </a>
                                <a target="_blank" href="https://plus.google.com/share?url=#url">
                                    <div class="social-share ss-googleplus"></div>
                                </a>
                                <div class="social-share ss-print"></div>
                            </div>
                        </div>
                    </div>
                    <div class="products-other text-center">
                        <a href="#"><img src="images/products_banner_other.png" width="100%" /></a>
                    </div>
                    <div class="products-other text-center">
                        <a href="#"><img src="images/products_banner_coffee.png" width="100%" /></a>
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
        <script src="js/script.products.detail.js"></script>
    </body>

</html>
