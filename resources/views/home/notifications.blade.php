<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets2/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets2/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    BLU || Notification
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/assets2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets2/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/assets2/demo/demo.css" rel="stylesheet" />


</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
      <div class="logo">
        <a style="margin-left: 40px;" href="{{route('home.profile',$std['id'])}}" class="simple-text logo-normal">
          {{$std['username']}}
        </a>
        <a style="margin-left: 50px;" href="{{route('home.index')}}" class="simple-text logo-normal">
          BLU|Home
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{route('home.profile',$std['id'])}}">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{route('home.notifications',$std['id'])}}">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="{{route('home.user',$std['id'])}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="{{route('home.tables',$std['id'])}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Post a Job</p>
            </a>
          </li>
          <li>
            <a href="/logout">
              <i class="now-ui-icons arrows-1_minimal-left"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Notifications</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Notifications</h2>
          <p class="category">Handcrafted by our friend
            <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
            <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
          </p>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Notifications Style</h4>
              </div>
              <div class="card-body">
                <div class="alert alert-info alert-with-icon" data-notify="container">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons "></i>
                  </button>
                  <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                  <span data-notify="message">Post Another <b><i>Great Job</i></b>,&nbsp; <font color="red"><b>1M</b></font> of qualified <b>Freelancers</b> are waiting</span>
                </div>
              </div>
              @php
              $count=0;
              $str="";
              if($std['company']==''){
              $str1 = "Please add your company name";
              @endphp
              <div class="card-body">
                <div class="alert alert-info alert-with-icon" data-notify="container">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons "></i>
                  </button>
                  <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                  <span data-notify="message">{{$str1}}</span>
                </div>
              </div>
              @php
            }
            else{
            $str1="";
          }
          if($std['security']==''){
          $str2= "Please fillup the Security Question Answer";
          @endphp
          <div class="card-body">
            <div class="alert alert-info alert-with-icon" data-notify="container">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons "></i>
              </button>
              <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
              <span data-notify="message">{{$str2}}</span>
            </div>
          </div>
          @php
        }
        else{
        $str2="";
      }                  
      @endphp

    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Service Package Plans</h4>
      </div>
      
      <div class="columns">
        <ul class="price">
          <li class="header">Basic</li>
          <li class="grey">$ 0 / year</li>
          <li>Normal Search</li>
          <li>All Freelancers List/Day</li>
          <li>No Optimizaton Team</li>
          <li>No Group Work</li>
          <li class="grey">
            @php
            if($std['plans']=="basic"){
            @endphp
            <a style=" pointer-events: none; cursor: not-allowed;" href="{{route('home.notifications2',[$std['id'],'basic'])}}" class="button">Current</a>
            @php
          }
          else{
          @endphp
          <a href="{{route('home.notifications2',[$std['id'],'basic'])}}" class="button">Subscribe</a>
          @php
        }
        @endphp

      </li>
    </ul>
  </div>

  <div class="columns">
    <ul class="price">
      <li class="header" style="background-color:#4CAF50">Premium</li>
      <li class="grey">$ 49.99 / year</li>
      <li>Selective Search</li>
      <li>Best Freelancers List/Day</li>
      <li>Personal Optimizaton Team</li>
      <li>Group Work</li>
      <li class="grey">
        @php
        if($std['plans']=="premium"){
        @endphp
        <a style=" pointer-events: none; cursor: not-allowed;" href="{{route('home.notifications2',[$std['id'],'premium'])}}" class="button">Current</a>
        @php
      }
      else{
      @endphp
      <a href="{{route('home.notifications2',[$std['id'],'premium'])}}" class="button">Subscribe</a>
      @php
    }
    @endphp
  </li>
</ul>
</div>


      <!-- <div class="card-body">
        <div class="alert alert-primary">
          <button type="button" aria-hidden="true" class="close">
            <i class="now-ui-icons ui-1_simple-remove"></i>
          </button>
          <span>
            <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
          </div>
          <div class="alert alert-info">
            <button type="button" aria-hidden="true" class="close">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <span>
              <b> Info - </b> This is a regular notification made with ".alert-info"</span>
            </div>
            <div class="alert alert-success">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Success - </b> This is a regular notification made with ".alert-success"</span>
              </div>
              <div class="alert alert-warning">
                <button type="button" aria-hidden="true" class="close">
                  <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <span>
                  <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                </div>
                <div class="alert alert-danger">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span>
                    <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
                  </div>
                </div>-->
              </div> 
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="places-buttons">
                    <div class="row">
                      <div class="col-md-6 ml-auto mr-auto text-center">
                        <h4 class="card-title">
                          Job Request
                          <p class="category">Click to view notifications</p>
                        </h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 ml-auto mr-auto">
                        <div class="row">
                          <form>
                            @csrf
                            <table>
                                <thead>
                                  <th>ID</th>
                                  <th>Job ID </th>
                                  <th>Freelancer</th>
                                  <th>Action</th>
                                </thead>
                                <tbody>
                                  @php
                                  $count=0;
                                  foreach($job as $key => $value){
                                  $count++;
                                  @endphp
                                  <tr>
                                  <td>{{$value->id}}</td>
                                  <td>{{$value->jobID}}</td>
                                  <td>
                                    <a href="{{route('home.freelancersPrf',$value->freelancerName)}}">{{$value->freelancerName}}</a></td>
                                    <input type="text" hidden="hidden" name="var" value="{{$value->freelancerName}}">
                                    <input type="text" hidden="hidden" name="var2" value="{{$value->jobID}}">
                                  <td><button type="Submit">Accept</button></td>
                                  </tr>
                                  @php } @endphp
                                </tbody>
                              </tr>
                            </table>
                          </form>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="container-fluid">
            <nav>
              <ul>
                <li>
                  <a href="https://www.creative-tim.com">
                    Creative Tim
                  </a>
                </li>
                <li>
                  <a href="http://presentation.creative-tim.com">
                    About Us
                  </a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com">
                    Blog
                  </a>
                </li>
              </ul>
            </nav>
            <div class="copyright" id="copyright">
              &copy;
              <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
              </script>, Designed by
              <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
              <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="/assets2/js/core/jquery.min.js"></script>
    <script src="/assets2/js/core/popper.min.js"></script>
    <script src="/assets2/js/core/bootstrap.min.js"></script>
    <script src="/assets2/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="/assets2/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="/assets2/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/assets2/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="/assets2/demo/demo.js"></script>
  </body>

  </html>