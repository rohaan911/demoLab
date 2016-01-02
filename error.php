<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Error</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="shortcut icon" href="flat-ui/images/favicon.ico">
        <link rel="stylesheet" href="flat-ui/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="flat-ui/css/flat-ui.css">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="common-files/css/icon-font.css">
        <!-- end -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="page-wrapper">
            <!-- header-10 -->
            <header class="header-10 navbar navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar col-sm-12" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle"></button>
                            <a class="brand" href="#"><img src="img/logo@2x.png" width="50" height="50" alt="">GeekLab</a>
                        </div>
                        <div class="collapse navbar-collapse pull-right">
                        <form class="navbar-form pull-left">
                                <a class="btn btn-info" href="index.html">Go Back To Home Page</a>
                            </form> 
                         </div>
                    </div>
                </div>
            </header>
            
            <!-- 3 Categories  -->
           <section id="about" class="header-11-sub bg-pomegranate">
                
        <div class="row mt centered">
            <div class="col-lg-4">
                
            </div><!--/col-lg-4 -->

            <div class="col-lg-4">
                <img src="img/error.png" width="245" alt="">

            </div><!--/col-lg-4 -->

            <div class="col-lg-4">
                

            </div><!--/col-lg-4 -->
        </div><!-- /row -->

        <div class="row mt centered">
            <div class="col-lg-6 col-lg-offset-3">
                <h3>Shizberg!</h3>
                <p>The email address you entered is not valid. Ensure that it is of the format <strong>name@domain.com</strong>.</br>Please try again below.</p>
            </div>
        </div><!-- /row -->
            </section>

        <!-- content-13  -->
            <section class="content-13 subscribe-form bg-turquoise">
                <div class="container">
                    <div class="row">
                        <form>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Enter your e-mail" spellcheck="false">
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-large btn-primary" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        <!-- footer-3 -->
            <footer id="contact" class="footer-3">
                <div class="container">
                    <div class="row v-center">
                        <div class="col-sm-7">
                            <div class="additional-links">
                                Copyright &copy; 2014 GeekLab Technologies LLP
                                </br>
                                An initiative of <a href="#">RABT Technologies Pvt. Ltd.</a>
                            </div>
                            </br></br>
                            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fgeeeklab.in/&width=430&height=240&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true" width="450" height="250"></iframe>
                            </div>
                        <div class="col-sm-2">
                            
                        </div>
                        <div class="col-sm-3">
                            <a class="brand" href="#"><img src="img/logo@2x.png" width="50" height="50" alt=""></a></br></br>
                            <h5>GeekLab Technologies LLP</h5>
                            <div class="address">
                                17/19, K. P. Roy Lane,
                                C2 Dhakuria,
                                Kolkata,
                                India - 700 031
                            </div>
                            </br>
                            <h6>Get In Touch</h6>
                            <div class="additional-links">
                                033 - 32624466
                                </br>
                                hello@geeklab.in
                            </div> 
                        </div>
                    </div>
                </div>
            </footer>
        </div>


        <!-- Placed at the end of the document so the pages load faster -->
        <script src="common-files/js/jquery-1.10.2.min.js"></script>
        <script src="flat-ui/js/bootstrap.min.js"></script>
        <script src="common-files/js/modernizr.custom.js"></script>
        <script src="common-files/js/jquery.scrollTo-1.4.3.1-min.js"></script>
        <script src="common-files/js/jquery.parallax.min.js"></script>
        <script src="common-files/js/startup-kit.js"></script>
        <script src="js/jquery.backgroundvideo.min.js"></script>
        <script src="js/script.js"></script>

        <script>

    function ScrollTo () {
    $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1500);
    return false;
});
}

    </script>

    </body>
</html>