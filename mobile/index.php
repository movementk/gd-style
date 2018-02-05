<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GD STYLE</title>
        <link href="/mobile/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/mobile/assets/css/style.css" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Header -->
        <header id="header">
            <div class="header-backdrop"></div>
            <div class="container">
                <h1 class="logo"><a href="/mobile/"><img src="/mobile/assets/images/logo.gif" alt=""></a></h1>
            </div>
        </header>
        
        <!-- Content -->
        <main id="content">
            <div class="container">
                <div class="visual-slider">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="/mobile/assets/images/img_slider01.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/mobile/assets/images/img_slider02.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/mobile/assets/images/img_slider03.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/mobile/assets/images/img_slider04.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/mobile/assets/images/img_slider05.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <figure>
                    <img src="/mobile/assets/images/content_img.jpg" class="img-responsive" alt="">
                </figure>
                <ul class="link-list">
                    <li>
                        <a href="http://gdconvention.com/" target="_blank">
                            <img src="/mobile/assets/images/link_img01.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://cafe.naver.com/gdpartyhouse" target="_blank">
                            <img src="/mobile/assets/images/link_img02.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="http://www.partyumansan.com/" target="_blank">
                            <img src="/mobile/assets/images/link_img03.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="http://thegracekelly1.com/" target="_blank">
                            <img src="/mobile/assets/images/link_img04.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="http://gdconvention.com/landing/partyum.php" target="_blank">
                            <img src="/mobile/assets/images/link_img05.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="http://gdhomerice.co.kr/shop/" target="_blank">
                            <img src="/mobile/assets/images/link_img07.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://blog.naver.com/sshss09" target="_blank">
                            <img src="/mobile/assets/images/link_img08.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </main>
        
        <!-- footer -->
        <footer id="footer">
            <div class="container">
                <h2 class="foot-logo">
                    <a href="/mobile/"><img src="/mobile/assets/images/foot_logo.gif" alt=""></a>
                </h2>
                <div class="company-info">
                    <ul class="terms">
                        <li><a href="#"><img src="/mobile/assets/images/txt_terms1.gif" alt=""></a></li>
                        <li><a href="#"><img src="/mobile/assets/images/txt_terms2.gif" alt=""></a></li>
                    </ul>
                    <p class="summary-img">
                        <img src="/mobile/assets/images/foot_info.png" alt="">
                    </p>
                </div>
            </div>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/mobile/assets/bootstrap/js/bootstrap.min.js"></script>
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