<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BLU || Freelancers Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- slicknav.min.css -->
    <link rel="stylesheet" href="/assets/css/slicknav.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloder-wrap -->
        <div id="cssLoader3" class="preloder-wrap">
            <div class="loader">
                <div class="child-common child4"></div>
                <div class="child-common child3"></div>
                <div class="child-common child2"></div>
                <div class="child-common child1"></div>
            </div>
        </div>
        <!-- preloder-wrap -->
        <!-- search-area -->
        <div class="search-area">
            <span class="closs-btn">Close</span>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search Here">
                                <button type="button" name="button" class="btn-style">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-area -->
        <!-- heared area start -->
        <header class="header-area">
            <div class="header-top bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <div class="header-top-left">
                                <p>We are landscaping company, offer various landscape services</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            <div class="header-top-right text-right">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 hidden-sm hidden-xs">
                          <div class="logo">
                             <h1><a href="{{route('home.index')}}">BLU</a></h1>
                         </div>
                     </div>
                     <div class="col-md-9 col-xs-12">
                        <div class="header-middle-right">
                            <ul>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>MON - SAT (9AM - 5PM)</p>
                                        <span>Sunday colsed</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>MAIL US</p>
                                        <span>info@yourdomail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>PHONE US</p>
                                        <span> (+1) 1144-1254</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom"  id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="hidden-md hidden-lg col-sm-8 col-xs-6">
                      <div class="logo">
                         <h1><a href="{{route('home.index')}}">BLU</a></h1>
                     </div>
                 </div>
                 <div class="col-md-11 hidden-sm hidden-xs">
                  <div class="mainmenu">
                     <ul id="navigation">
                        <li><a href="{{route('home.index')}}">Home</a>

                        </li>
                        <li>
                            <form method="post">
                                @csrf
                                <input type="text" hidden="hidden" name="nameF" value="{{$std3}}">
                                <button style="size: 10px;margin-top: 20px; border-radius: 5px; border:none;" type="submit"><i class="glyphicon glyphicon-star"></i>{{$std3}}</button>
                                
                            </form>
                        </li>
                    </ul> 
                </div>
            </div>
    					<!-- <div class="col-md-1 col-sm-2 col-xs-3">
    						<div class="search-wrap text-right">
    							<ul>
    								<li>
    									<a href="javascript:void(0);">
    										<i class="fa fa-search"></i>
    									</a>
    								</li>
    							</ul>
    						</div>
    					</div> -->
                        <div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
                          <div class="responsive-menu-wrap floatright"></div>
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <!-- heared area end -->

      <!-- breadcumb-area start -->
      <div class="breadcumb-area black-opacity bg-img-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb-wrap">
                        <h2>{{end($std)}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcumb-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li>Freelancers Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area end -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="portfolio-menu text-center">
                    <h2 style="margin-top: 45px;">Short Description</h2>
                    <p><font size="4px" color="black">{{$std2}}</font></p>
                </div>
            </div>
        </div>
    </div>
    <!-- porftolio-area start -->
    <section class="porftolio-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="portfolio-menu text-center">
                        <h2 style="margin-top: -40px;">Skills</h2>
                    </div>
                </div>
            </div>
            <div class="row grid">
                @for($i=0; $i< count($std)-1; $i++)
                <div class="col-md-4 portfolio clean col-sm-6 col-xs-12 col">
                    <div class="portfolio-wrap">
                        <div class="overlay">
                            <a class="popup" href="/assets/images/portfolio/1.jpg">
                                <i class="fa fa-link"></i>
                            </a>
                            <h3>{{$std[$i]}}</h3>
                            <p>The majority have suffered alteration in some form</p>
                        </div>
                        <div class="portfolio-img">
                            <img src="/assets/images/portfolio/1.jpg" alt="" />
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="seemore-btn text-center">
                        <a href="javascript:void(0);">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- porftolio-area end -->

    <!-- quote-area start -->
    <div class="quote-area bg-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-xs-12">
                    <div class="quote-wrap">
                        <h2>Over 50 years of experience we’ll ensure you get the best guidance.</h2>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="quote-wrap text-right">
                        <a href="contact.html">Request Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quote-area end -->

    <!-- footer-area start  -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12  col">
                        <div class="footer-widget footer-logo">
                            <h1>BLU</h1>
                            <p>Lor separat existentie es un myth. Por scientie, musica, sport etc, litot  usa li sam larLor separat existentie es un myth existentie.</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> +455 5475 6645</li>
                                <li><i class="fa fa-envelope"></i> info@yourdomail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col">
                        <div class="footer-widget footer-menu">
                            <h2>Footer Menu</h2>
                            <ul>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="#">Customer Insights</a></li>
                                <li><a href="service.html">FInancial Service</a></li>
                                <li><a href="#">Business Devlopment</a></li>
                                <li><a href="">Project Management</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col">
                        <div class="footer-widget instagram-wrap">
                            <h2>Instagram</h2>
                            <ul>
                                <li><a href="#"><img src="/assets/images/instagram/1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/assets/images/instagram/2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/assets/images/instagram/3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/assets/images/instagram/4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/assets/images/instagram/5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/assets/images/instagram/6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col">
                        <div class="footer-widget quick-contact">
                            <h2>Quick Contact</h2>
                            <form action="#">
                                <input type="text" placeholder="Full Name">
                                <input type="email" placeholder="Email">
                                <textarea name="massage" id="massage" cols="30" rows="10" placeholder="Massage"></textarea>
                                <button type="button" name="button" class="btn-style">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" style="color: white;">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end  -->

    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!-- counterup.main.js -->
    <script src="/assets/js/counterup.main.js"></script>
    <!-- isotope.pkgd.min.js -->
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope.pkgd.min.js -->
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <!-- jquery.waypoints.min.js -->
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <!-- jquery.magnific-popup.min.js -->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- jquery.slicknav.min.js -->
    <script src="/assets/js/jquery.slicknav.min.js"></script>
    <!-- snake.min.js -->
    <script src="/assets/js/snake.min.js"></script>
    <!-- wow js -->
    <script src="/assets/js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="/assets/js/plugins.js"></script>
    <!-- main js -->
    <script src="/assets/js/scripts.js"></script>
</body>
</html>
