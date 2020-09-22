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
        <!-- Preloader -->
        <!-- <div class="loader">
            <h2>Think Twice🤔<br>
            <span>Code</span> Once.</h2>
        </div> -->
        <!-- Preloader End -->
        <!-- HEADER AREA START -->
        <header class="header" id="myHeader" style="height: 80px; padding: 0px; margin: 0px;">
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
            <!-- <nav id="mobile-menu">
                <ul>
                    <li><a href="JavaScript:void">Contact Us : &nbsp; +44 &nbsp;7441 &nbsp;399147 &nbsp; / &nbsp;+94 &nbsp;77 &nbsp;324 &nbsp;8329</a></li></a></li>
                    
                </ul>
            </nav> -->
        </div>
        <!-- mobile menu end -->
        <!-- HEADER AREA END -->

        <!-- HERO AREA -->
        <section class="c-mukto-hero-section section-padding" id="upper" style="padding-top:40px;">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="hero-banner">
                            <img src="assets/img/hero-img.svg" alt="hero-banner">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10 d-flex align-items-center">
                        <div class="hero-text">

                            <h1>We make your atmosphere with our codes.</h1>

                            <p>We are number one source for all solutions with coding. Our services include web design, social / digital marketing and software solutions. We're dedicated to providing you the very best of coding solutions, with an emphasis on effectiveness, timely delivery and client satisfaction.</p>

                            <pre class="brush: html" >        
                            IP ADDRESS : <?php echo $ip ;?>
                            <!-- Type your codes here  -->    
                            </pre>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- HERO END -->
        <!-- category -->
        <div class="category__area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <div class="category__wrap">
                            <div class="row">
                                <div class="col-md-10 m-auto">
                                    <ul>
                                        <li><a href="JavaScript:void" >HTML</a></li>
                                        <li><a href="JavaScript:void">CSS</a></li>
                                        <li><a href="JavaScript:void">JavaScript</a></li>
                                        <li><a href="JavaScript:void">Angular</a></li>
                                        <li><a href="JavaScript:void">Python</a></li>
                                        <li><a href="JavaScript:void">C++</a></li>
                                        <li><a href="JavaScript:void">Page Builder</a></li>
                                        <li><a href="JavaScript:void">PHP</a></li>                           
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- category end -->


        <!-- TOP CODE AREA -->
        <section class="c-mukto-top-code pt-120 mid-black-bg">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-8">
                        <div class="section-title mb-70">
                            <h2 class="text-uppercase">Top <span>Code</span> Snippet</h2>
                        </div>
                    </div>
                </div>
                <div class="row c-mukto-top-blog">
                    <!-- single blog -->
                    <article class="col-lg-4 col-md-6 post">
                        <div class="post-inner locked">
                            <div class="post-info">
                                <div class="post-cats"><a href="JavaScript:void">PHP</a></div>
                                <h3 class="post-title"><a href="JavaScript:void">PHP is an HTML-embedded Web scripting language.</a></h3>
                                <p class="post-content">There are a lot of php based frameworks. One of the best frameworks is laravel which we use.</p>

                                
                            </div>
                        </div>
                    </article>
                    <!-- single blog end -->
                
                    <!-- single blog -->
                    <article class="col-lg-4 col-md-6 post">
                        <div class="post-inner">
                            <div class="post-info">
                                <div class="post-cats"><a href="JavaScript:void">Angular</a></div>
                                <h3 class="post-title"><a href="JavaScript:void">A platform and framework for client applications.</a></h3>
                                <p class="post-content">There are a lot of JS based frameworks. One of the best frameworks is Angular which we use.</p>
                                
                            </div>
                        </div>
                    </article>
                    <!-- single blog end -->
                                
                    <!-- single blog -->
                    <article class="col-lg-4 col-md-6 post">
                        <div class="post-inner locked">
                            <div class="post-info">
                                <div class="post-cats"><a href="JavaScript:void">Python</a></div>
                                <h3 class="post-title"><a href="JavaScript:void">High-level programming language</a></h3>
                                <p class="post-content">There are a lot of Python based frameworks. One of the best frameworks is Django which we use.</p>
                                
                            </div>
                        </div>
                    </article>
                    <!-- single blog end -->
                                                                
                    
                </div>
            </div>
        </section>
        <!-- TOP CODE AREA END -->

        <section class="skype-support section-padding mid-black-bg" style="padding-top:0px; padding-bottom: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="skype-banner">
                            <img src="assets/img/skype-support.svg" alt="skype-banner">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10 d-flex align-items-center">
                        <div class="skype-text">
                            <h1>Need Coding help?</h1>
                            <p>Are you facing problems with your web development project and need our help? We are ready to help you and make your project done. Contact us  over the phone or EMail We will get back to you soon as possible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="post-area section-padding mid-black-bg" style="padding-top:0px;" id="help">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_full_content">
                            <article class="blog_post">
                                <div class="blog_content">
                                    
                                    
                                    
                                        
                                  
                                   <!--  We just added sticky_top calls with our header when it go scroll down. And remove all two classes that we added last time for scroll down to scroll up.

                                    We are done now just use your own css show it like as you want. I will give you some as example -->
                                    <div class="file_name">>_ewisnet.lk[~]</div>
                                        <pre class="brush: js">
                                            $(window).scroll(function() {
                                             if ($(this).scrollTop()) {
                                                $(".header_area").addClass("sticky_top");
                                             } 
                                             else {
                                                $(".header_area").removeClass("sticky");
                                                $(".header_area").removeClass("sticky_top");
                                                }
                                            });
                                        </pre>
                                    
                                    
                                    <!-- <div class="file_name">After go down and scrolling up</div>
                                        <pre class="brush: css">
                                            .header_area.sticky_top.sticky{
                                                opacity: 1;
                                                visibility: visible;
                                            }
                                        </pre>
                                    That’s the all. Hope it helps. Comment below if you have any issue with this code. 
                                </div> -->
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <div id="suppor" class="widget widget_text">
                                <div class="skype_call_widget text-center">
                                    <img src="assets/img/skype-call.svg" alt="skype support">
                                    <h4 class="m-4">Need Coding Help?</h4>
                                    <a href="JavaScript:void" class="btn idofbutton" id="idofbutton">+94 77 324 8329</a>
                                    <a href="JavaScript:void" class="btn idofbutton" id="idofbutton">+44 7441 399147</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        



        <!-- TOP CODE AREA -->
        <!-- <section class="c-mukto-top-code pt-120 mid-black-bg"> -->
            <section class="c-mukto-new-code pt-120 pb-90" id="services">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-8">
                        <div class="section-title mb-70">
                            <h2 class="text-uppercase">Our Services </h2>
                        </div>
                    </div>
                </div>

                <div class="row c-mukto-top-blog">
                    <!-- single blog -->
                    <article class="col-lg-4 col-md-6 post">
                        <div class="post-inner locked">
                            <div class="post-info">
                                <div class="post-cats"><a href="JavaScript:void">Web Design and Development</a></div>
                                
                                <p class="post-content">We provide high quality Web Applications, Completely mobile responsive, and utilize the latest  technologies.</p>
                                
                            </div>
                        </div>
                    </article>
                    <!-- single blog end -->
                
                    <!-- single blog -->
                    <article class="col-lg-4 col-md-6 post">
                        <div class="post-inner">
                            <div class="post-info">
                                <div class="post-cats"><a href="JavaScript:void">IOT Solutions</a></div>
                                <p class="post-content">We do not provide only Hardware and Software. We stay with you and we guide you from beginning to success on the entire IoT business journey.</p>
                            </div>
                        </div>
                    </article>
                    <!-- single blog end -->
                                
                    <!-- single blog -->
                    <article class="col-lg-4 col-md-6 post">
                        <div class="post-inner locked">
                            <div class="post-info">
                                <div class="post-cats"><a href="JavaScript:void">Business Branding</a></div>
                                <p class="post-content">We help you to exceedingly inventive and eye-catching plans, driving to a solid Corporate Brand Personality over social media.</p>
                                
                            </div>
                        </div>
                    </article>
                    <!-- single blog end -->
                                                                
                    
                </div>




                <div class="row justify-content-center text-center">
                    <div class="col-8">
                        <div class="section-title mb-70">
                            <h2 class="text-uppercase">Upcoming Services </h2>
                        </div>
                    </div>
                </div>
                <div class="row c-mukto-top-blog">
                    <!-- single blog -->
                    <article class="col-lg-4 col-md-6 post">
                        <div class="post-inner locked">
                            <div class="post-info">
                                <div class="post-cats"><a href="JavaScript:void">Hosting Service</a></div>
                                
                                <p class="post-content">We understood your requirement, In very soon we gonna give you smooth hosting for cheap cost. <br>Stay with us, we'll satisfy you.</p>
                                
                            </div>
                        </div>
                    </article>
                    <!-- single blog end -->
                
                    <!-- single blog -->
                    <article class="col-lg-4 col-md-6 post">
                        <div class="post-inner">
                            <div class="post-info">
                                <div class="post-cats"><a href="JavaScript:void">Get your Domain</a></div>
                                <p class="post-content">Taking domain from another site, taking hosting from another site we understood that difficulty. So here we go, Get ready to get your name here
                            </div>
                        </div>
                    </article>
                    <!-- single blog end -->
                                
                    <!-- single blog -->
                    <article class="col-lg-4 col-md-6 post">
                        <div class="post-inner locked">
                            <div class="post-info">
                                <div class="post-cats"><a href="JavaScript:void">Cheap License</a></div>
                                <p class="post-content">Still you paying too much for your WHM license?<br>In very soon you gonna reduce your cost with us!!!</p>
                                
                            </div>
                        </div>
                    </article>
                    <!-- single blog end -->
                                                                
                    
                </div>
            </div>
        </section>
        <!-- TOP CODE AREA END -->

        
        <section class="skype-support section-padding mid-black-bg" style="" id="contact">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="skype-banner">
                            <img src="assets/img/hire-me.svg" alt="hire-banner">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10 d-flex align-items-center">
                        <div class="skype-text">
                            <h1>Need a project done?</h1>
                            <p>If you have a project on your mind feel free to contact us. It's pleasure to hear you.</p>
                            <br>
                            <div class="col-md-6" style="float: left;">
                            <p><b>Telephone :</b> <br>+44 7441 399147 
                                <br>+94 77 324 8329 </p>
                                
                                
                            </div>
                            <div class="col-md-6"style="float: left;">
                                <p><b>EMail :</b> <br>support@ewisnet.com<br>&nbsp;</p>
                                
                            </div>
                            <div class="col-md-6" style="float: left;">
                            <br>
                                <p><b>Primary Location :</b><br>
                                Ewisnet Internet Solutions Ltd<br>
                                184 High Street North,<br>
                                 East Ham, London.<br>
                                United Kingdom.</p>
                            </div>
                            <div class="col-md-6"style="float: left;">
                                <br>
                                <p><b>Virtual Location :</b><br>
                                    Ewisnet Internet Solutions<br>
                                    Level 37 | WTC, <br>
                                    West Tower, Colombo.<br>
                                     Sri Lanka.</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

  
        <section class="skype-support section-padding" style="padding-bottom: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="skype-text">
                            <h1 id="aboutus">About Ewisnet</h1>
                            <p>Ewisnet Internet Solutions brings a fresh and innovative approach to Codings services, acting as liaison between the end-user and the software provider. Our services include web design, social / digital marketing, and software solutions. We're dedicated to providing you the very best of coding solutions, with an emphasis on effectiveness, timely delivery and client satisfaction. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10 d-flex align-items-center">
                        <div class="skype-text">
                            <h1 style="margin-bottom: 5px;">Our Mission</h1>
                            <p>Connecting the whole world together doing simple change with our technologies.</p>
                            <br>
                            <h1 style="margin-bottom: 5px;">Our Vision</h1>
                            <p>Ensuring people's satisfaction made by perfect coding.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- TOP AUTHOR -->
        
        <!-- TOP AUTHOR -->
        <!-- OUR SPONSOR -->
        <div class="sponsor">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sponsors">
                            <img src="assets/img/clients/client-1.png" alt="">
                            <img src="assets/img/clients/client-2.png" alt="">
                            <img src="assets/img/clients/client-3.png" alt="">
                            <img src="assets/img/clients/client-4.png" alt="">
                            <img src="assets/img/clients/client-5.png" alt="">
                            <img src="assets/img/clients/client-6.png" alt="">
                            <img src="assets/img/clients/client-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- OUR SPONSOR -->
      
 
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