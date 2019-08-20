 <!doctype html>
 <html class="no-js" lang="">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BLU || Freelancers</title>

    <script type="text/javascript">
        
        window.onload=function(){
           /* if(let==0){*/
                document.getElementById("trigger").click();
            /*}
            else{
                document.getElementById('trigger2').onclick = function() {
                  document.getElementById("demo").innerHTML = "Hello World";
                  let=1;
              }
          }*/
      };

    function ti() {
        var fP = document.getElementById('fPrice').innerHTML;
        var tP = document.getElementById('tPrice').innerHTML;

        if (fP != '' && tP != '')
            window.location.replace(window.location.href + '?min_Price=' + fP + '&max_Price=' + tP);
    }


  </script>
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

    <div class="search-area">
            <span class="closs-btn">Close</span>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="search-form">
                            <form method="post">
                                @csrf
                                <input type="text" name="search" placeholder="Search with skill or field">
                                <label for="points">Hourly Salary Range:</label>
                                <!-- <input type="range" name="points" id="points" value="0" min="0" max="10000" data-show-value="true"> -->
                                
                              <input name="points" type="range" id="toPrice" value="0" min="0" max="10000" 
                                  oninput="document.getElementById('tPrice').innerHTML = '$'+this.value" />
                              <font color="white" size="4px"><label id="tPrice"></label></font>

                                <button type="submit" name="button" class="btn-style">Search</button>
                                <!-- <input type="text" name="search" placeholder="Search with skill or field">
                                <button type="submit" name="button" class="btn-style">Search</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <header class="header-area">
            <div class="header-top bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <div class="header-top-left">
                                <p>Your search result Will be shown here</p>
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
                    </div>
                </div>
                <div class="col-md-1 col-sm-2 col-xs-3">
                    <div class="search-wrap text-right">
                        <ul>
                            <li>
                                <a id="trigger" href="javascript:void(0);">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
          </div>
      </div>
  </div>
</header>
<!-- heared area end -->

<!-- breadcumb-area end -->

<!-- team-area start -->
<section class="team-area ptb-100">
 <div class="container">
    <div class="row">
        @php
        $i=0
        @endphp
        @foreach($std as $key => $value)
        @php
        $i++
        @endphp
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col">
          <div class="team-wrap mb-30">
             <div class="team-img">
                <img src="/assets/images/team/{{$i}}.jpg" alt="" />
            </div>
            <div class="team-content">
                <div class="team-info">
                   <a href="{{route('home.freelancersPrf',$value->username)}}">
                       <p>{{$value->username}}</p></a>
                       <ul>
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      @endforeach

  </div>
</div>
</section>


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