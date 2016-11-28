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
        <div id="landing-content" style="background-image: url('images/banner/products-banner-layer1.png');">
            <img src="images/banner/products-banner-layer2.png" class="slide-layer-1"></img>
        </div>

        <!-- Slider -->
        <div class="products-slider">
            <div class="row">
                <div class="columns small-12 medium-10 large-8 medium-offset-1 large-offset-2">
                    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                        <ul class="orbit-container">

                            <li class="is-active orbit-slide">
                                <img class="orbit-image" src="images/news-slide.jpg" alt="Space">
                            </li>
                            <li class="orbit-slide">
                                <img class="orbit-image" src="images/news-slide.jpg" alt="Space">
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


        <!-- News -->
        <div class="news margin-section">
          <div class="row small-up-1 medium-up-3 large-up-3">
              <div class="columns">
                  <a href="news-detail.php">
                      <p class="news-picture"><img src="http://placehold.it/400x300&text=Picture A" class="thumbnail" alt=""></p>
                      <p class="news-description">ประกาศผลรางวัลโครงการประกวดออกแบบร้าน Cafe Amazon Awake Award</p>
                      <p class="news-datetime">27 พฤษภาคม 2559</p>
                  </a>
              </div>
              <div class="columns">
                  <a href="news-detail.php">
                      <p class="news-picture"><img src="http://placehold.it/400x300&text=Picture B" class="thumbnail" alt=""></p>
                      <p class="news-description">คาเฟ่ อเมซอนขอแสดงความยินดีกับทีม ThaiEverest 2016 ที่สามารถพิชิตยอดเขาเอเว...</p>
                      <p class="news-datetime">27 พฤษภาคม 2559</p>
                  </a>
              </div>
              <div class="columns">
                  <a href="news-detail.php">
                      <p class="news-picture"><img src="http://placehold.it/400x300&text=Picture C" class="thumbnail" alt=""></p>
                      <p class="news-description">Drive Awake application</p>
                      <p class="news-datetime">23 พฤษภาคม 2559</p>
                  </a>
              </div>
              <div class="columns">
                  <a href="news-detail.php">
                      <p class="news-picture"><img src="http://placehold.it/400x300&text=Picture A" class="thumbnail" alt=""></p>
                      <p class="news-description">ประกาศผลรางวัลโครงการประกวดออกแบบร้าน Cafe Amazon Awake Award</p>
                      <p class="news-datetime">27 พฤษภาคม 2559</p>
                  </a>
              </div>
              <div class="columns">
                  <a href="news-detail.php">
                      <p class="news-picture"><img src="http://placehold.it/400x300&text=Picture B" class="thumbnail" alt=""></p>
                      <p class="news-description">คาเฟ่ อเมซอนขอแสดงความยินดีกับทีม ThaiEverest 2016 ที่สามารถพิชิตยอดเขาเอเว...</p>
                      <p class="news-datetime">27 พฤษภาคม 2559</p>
                  </a>
              </div>
              <div class="columns">
                  <a href="news-detail.php">
                      <p class="news-picture"><img src="http://placehold.it/400x300&text=Picture C" class="thumbnail" alt=""></p>
                      <p class="news-description">Drive Awake application</p>
                      <p class="news-datetime">23 พฤษภาคม 2559</p>
                  </a>
              </div>
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
    </body>

</html>
