<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GD STYLE</title>
        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/css/style.css" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Header -->
        <header id="header">
            <div class="top-backdrop"></div>
            <div class="logo">
                <div class="container">
                    <h1><a href="/"><img src="/assets/images/logo.png" alt=""></a></h1>
                </div>
            </div>
        </header>
        
        <!-- Content -->
        <main id="content">
            <div class="visual-slider">
                <ul>
                    <li>
                        <a href="#">
                            <img src="/assets/images/img_slider_01.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/assets/images/img_slider_02.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/assets/images/img_slider_03.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/assets/images/img_slider_04.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/assets/images/img_slider_05.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="container">
                <figure>
                    <img src="/assets/images/content_img.jpg" class="img-responsvie" alt="">
                </figure>
            </div>
            <ul class="link-list">
                <li>
                    <a href="#">
                        <img src="/assets/images/link_img01.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/assets/images/link_img02.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/assets/images/link_img03.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/assets/images/link_img04.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/assets/images/link_img05.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <!--<img src="/assets/images/link_img06.jpg" alt="">-->
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/assets/images/link_img07.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/assets/images/link_img08.jpg" alt="">
                    </a>
                </li>
            </ul>
        </main>
        
        <!-- footer -->
        <footer id="footer">
            <div class="container">
                <h2><a href="/"><img src="/assets/images/foot_logo.png" alt=""></a></h2>
                <div>
                    <ul>
                        <li><a href="#"><img src="/assets/images/agreement.png" alt=""></a></li>
                        <li><a href="#"><img src="/assets/images/privacy.png" alt=""></a></li>
                    </ul>
                    <p>
                        <img src="/assets/images/foot_txt.png" alt="">
                    </p>
                </div>
            </div>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.visual-slider > ul').bxSlider({
                    auto: true,
                    controls: false
                });
            });
        </script>
    </body>
</html>