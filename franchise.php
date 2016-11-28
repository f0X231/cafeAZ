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


        <!-- Register Form-->
        <div class="news-detail margin-section fonts_dbadmanx">
            <div class="row">
                <div class="columns small-12 medium-12 large-12">
                    <ul class="tabs" data-tabs id="example-tabs">
                        <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
                        <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
                    </ul>

                    <div class="tabs-content" data-tabs-content="example-tabs">
                        <div class="tabs-panel is-active" id="panel1">
                            <form>
                              <div class="row">
                                <div class="medium-6 columns">
                                  <label>Input Label
                                    <input type="text" placeholder=".medium-6.columns">
                                  </label>
                                </div>
                                <div class="medium-6 columns">
                                  <label>Input Label
                                    <input type="text" placeholder=".medium-6.columns">
                                  </label>
                                </div>
                              </div>
                            </form>
                        </div>
                        <div class="tabs-panel" id="panel2">
                            <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
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
