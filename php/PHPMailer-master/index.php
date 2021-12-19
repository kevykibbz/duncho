<!DOCTYPE html>
<html lang="en">
<head>
    <title>Access Denied </title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#f30067">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="../../assets/css/style2.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <!--/fontAwesome-CSS -->
    <link rel="stylesheet" href="../../assets/css/fontAwesome.css" type="text/css" media="all" />
    <!--/fontAwesome-CSS -->
</head>
<body onload="myFunction()">
    <!-- preloader -->
    <div class="loader" id="loading"></div>
   <div id="main" style="display:none">
        <div class="w3l-error-block">

        <div class="page">
            <div class="content">
                <div class="logo">
                    <a class="brand-logo" href="index.html">Access Denied</a>
                    <!-- if logo is image enable this   
                <a class="brand-logo" href="#index.html">
                    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> 
            -->
                </div>
                <div class="w3l-error-grid">
                    <h1>403</h1>
                    <h2>Restricted Access</h2>
                    <p>I tried to catch some fog, but i missed it</p>
                    <a href="http://chillout.freecluster.eu/index.php" class="home ">Back to Home</a> 
                    <a href="tel:+254798449624" class="home">Contact Us</a>
                </div>

                <div class="copy-right text-center">
                    <p>© 2020  error. All rights reserved | Design by
                        <a href="mailto:kibebekevin@gmail.com" target="_blank">Legit Crew</a></p>
                </div>
            </div>
            <img src="../../assets/images/bg.jpg" class="img-responsive" alt="error image" />
        </div>

        <script src="../../assets/js/jquery-3.5.1.min.js"></script>
        <script>
            var lFollowX = 0,
                lFollowY = 0,
                x = 0,
                y = 0,
                friction = 1 / 30;

            function animate() {
                x += (lFollowX - x) * friction;
                y += (lFollowY - y) * friction;

                translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

                $('img').css({
                    '-webit-transform': translate,
                    '-moz-transform': translate,
                    'transform': translate
                });

                window.requestAnimationFrame(animate);
            }

            $(window).on('mousemove click', function (e) {

                var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
                var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
                lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
                lFollowY = (10 * lMouseY) / 100;

            });

            animate();
        </script>
    </div>
   </div>
   <script type="text/javascript">
      //###################################################
      //##################################################
      function myFunction()
      {
        document.getElementById("loading").style.display='none';
        document.getElementById("main").style.display='block';
      }
      //###################################################
      //##################################################
    </script>
</body>
</html>