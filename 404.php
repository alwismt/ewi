<!DOCTYPE html>
<html lang="en">
<?php
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
?>  

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ewisnet Internet Solutions</title>
        <!-- favicon -->
        <link rel="icon" href="https://ewisnet.com/icon.png" sizes="32x32" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- meanmenu -->
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <!-- slick -->
        <link rel="stylesheet" href="assets/css/slick.css">
        <!-- icofont css -->
        <link rel="stylesheet" href="assets/css/icofont.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Syntax Highlighter -->
    <link rel="stylesheet" type="text/css" href="assets/syntax-highlighter/styles/shCore.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/syntax-highlighter/styles/shThemeRDark.css" media="all">
        <style>
        /* width */
        ::-webkit-scrollbar {
          width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px #42445a; 
          border-radius: 10px;
        }
         
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #2f2e41; 
          border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #b2b6be; 
        }





.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
}

.sticky + .content {
  padding-top: 102px;
}
html {
  scroll-behavior: smooth;
}




        </style>


</head>
    <body>

        <header class="header" id="myHeader">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="mukto-logo">
                            <a href="JavaScript:void"><img src="assets/img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-8 d-flex align-items-center justify-content-end">
                        <div class="header_menu d-none d-md-block" >

                            <nav >
                                <ul id="main-menu" class="main-menu">
                                    <li><a href="JavaScript:void" onclick="JavaScript:$('html, body').animate({scrollTop: $('#upper').offset().top -240 }, 'slow');">Home</a></li>
                                    
                                    <li><a href="JavaScript:void" onclick="JavaScript:$('html, body').animate({scrollTop: $('#services').offset().top -140 }, 'slow');">Services</a></li>

                                    <li><a href="JavaScript:void" onclick="JavaScript:$('html, body').animate({scrollTop: $('#help').offset().top -620 }, 'slow');">Got stuck?</a></li>


                                    <li><a href="JavaScript:void" onclick="JavaScript:$('html, body').animate({scrollTop: $('#aboutus').offset().top -240 }, 'slow');">About Us</a></li>
                                    
                                    <li><a href="JavaScript:void" onclick="JavaScript:$('html, body').animate({scrollTop: $('#contact').offset().top -140 }, 'slow');">Contact </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu"></div>
            </div>
        </header>
        <!-- mobile menu -->
        <div class="mobile-menu d-none">
            <nav id="mobile-menu">
                <ul>
                    <li><a href="JavaScript:void" onclick="JavaScript:$('html, body').animate({scrollTop: $('#upper').offset().top -240 }, 'slow');">Home</a></li>
                                    
                    <li><a href="JavaScript:void" onclick="JavaScript:$('html, body').animate({scrollTop: $('#services').offset().top -140 }, 'slow');">Services</a></li>

                    <li><a href="JavaScript:void" onclick="JavaScript:$('html, body').animate({scrollTop: $('#help').offset().top -620 }, 'slow');">Got stuck?</a></li>


                    <li><a href="JavaScript:void" onclick="JavaScript:$('html, body').animate({scrollTop: $('#aboutus').offset().top -240 }, 'slow');">About Us</a></li>
                    
                    <li><a href="JavaScript:void" onclick="JavaScript:$('html, body').animate({scrollTop: $('#contact').offset().top -140 }, 'slow');">Contact </a></li>
                    
                </ul>
            </nav>
        </div>
        <!-- mobile menu end -->
        <!-- HEADER AREA END -->
    <!-- 404 start -->
    <section class="not-found-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="error-page">
                        <img src="assets/img/not-found.svg" alt="404 error">
                        <div class="error-msg">
                            <h2>Page Not Found</h2>
                            <a href="/" class="btn">Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 end -->
        <!-- FOOTER AREA -->
        <section class="footer-widgets-sec black-bg" id="footer">
            <div class="container">
                <div class="row section-padding" style="width:100%;padding-top: 100px; padding-left: 0px; margin:0px;">
                    <div class="col-lg-4">
                        <div class="footer-author">
                            <div id="text" class="widget widget_text">
                                <img src="assets/img/footer.png" style="margin-top: 0px;">          
                                <div class="textwidget">
                                    <p>We offer high-quality IT services that empower our clients to develop business performance, quicken time-to-market, increment efficiency and progress client benefit.</p>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="footer-navigation">
                            <div id="pages" class="widget widget_pages">
                            
                                <h4 class="widget-title">Loaction</h4>
                                <b>Physycal Location</b><br>        
                                Ewisnet Internet Solutions Ltd<br>
                                184 High Street North,<br>
                                East Ham, London.<br>
                                United Kingdom.<br>
                                <br>
                                <b>Virtual Location</b><br>
                                Ewisnet Internet Solutions<br>
                                Level 37 | WTC, <br>
                                West Tower, Colombo.<br>
                                Sri Lanka.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 ">
                        <div class="footer-links">
                            <div id="pages-2" class="widget widget_text">
                                <h4 class="widget-title">Contact</h4>    

                                <b>United Kingdom</b><br>
                                +44 7441 399147<br>
                                <br>
                                <b>Sri Lanka</b><br>
                                +94 77 324 8329<br>
                                <br>
                                <b>Via Email</b>
                                <br> support@ewisnet.com
                            </div>
                        </div>
                    </div>

                   


                </div>
            </div>
        </section>
        <div class="copyright-area" style="background-image: url(assets/img/copy-right.svg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-copy">
                            <p>Copyright &copy; 2020, All Rights Reserved Ewisnet  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER END -->
          <!-- scrolltop button -->
          <div id="stop" class="scrollTop">
            <span>
                <a href="#">
                    <svg class="bi bi-arrow-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z"/>
                        <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8 3.707 5.354 6.354a.5.5 0 1 1-.708-.708l3-3z"/>
                    </svg>
                </a>
            </span>
        </div>
        <!-- scrolltop button end -->

        <!-- jquery -->
        <script src="assets/js/jquery-2.2.4.min.js"></script>
        <!-- bootstrap js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- meanmenu js -->
        <script src="assets/js/meanmenu.min.js"></script>
        <!-- slick js -->
        <script src="assets/js/slick.min.js"></script>
        <!-- main js -->
        <script src="assets/js/main.js"></script>

            <!-- syntext highlighter js -->
    <script src="assets/syntax-highlighter/scripts/shCore.js"></script>
    <script src="assets/syntax-highlighter/scripts/shBrushXml.js"></script>
    <script src="assets/syntax-highlighter/scripts/shBrushCss.js"></script>
    <script src="assets/syntax-highlighter/scripts/shBrushJScript.js"></script>
    <script src="assets/syntax-highlighter/scripts/shBrushPhp.js"></script>



<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}



</script>


<style type="text/css">
    .toolbar{
        display: none;
    }

</style>
    </body>


</html>