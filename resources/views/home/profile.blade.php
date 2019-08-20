<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets2/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets2/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    BLU || Profile
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
            <a class="navbar-brand" href="#pablo">Dashboard</a>
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
      <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                @php
                if($std['status']=="show"){
                @endphp
                <form method="post">
                  @csrf
                  <span style="height: 15px;width: 15px;padding: 5px; background-color: #33cc33;border-radius: 50%;display: inline-block;"></span>&nbsp;<input type="radio" name="active" value="show" id="activestatus-show" checked="true"/>
                  <label for="activestatus-show">Online|Show</label>&nbsp;&nbsp;&nbsp;&nbsp;
                  <span style="height: 15px;width: 15px;padding: 5px; background-color: #ff5050;border-radius: 50%;display: inline-block;"></span>&nbsp;<input type="radio" name="active" id="activestatus-hide" value="hide"/>
                  <label for="activestatus-hide">Offline|Hide</label><br/>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" style="background-color: #1CCFF4; border-radius: 5px; border:none;color: white; cursor: pointer; margin-left: 45px;">Update</button>
                </form>
                @php
              }
              else if($std['status']=="hide"){
              @endphp
              <form method="post">
                @csrf
                <span style="height: 15px;width: 15px;padding: 5px; background-color: #33cc33;border-radius: 50%;display: inline-block;"></span>&nbsp;<input type="radio" name="active" value="show" id="activestatus-show"/>
                <label for="activestatus-show">Online|Show</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="height: 15px;width: 15px;padding: 5px; background-color: #ff5050;border-radius: 50%;display: inline-block;"></span>&nbsp;<input type="radio" name="active" id="activestatus-hide" value="hide" checked="true"/>
                <label for="activestatus-hide">Offline|Hide</label><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" style="background-color: #1CCFF4; border-radius: 5px; border:none;color: white; cursor: pointer; margin-left: 45px;">Update</button>
                <form>
                  @php
                }
                @endphp
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Cost Overview</h5>
                <h4 class="card-title">Cost Stats</h4>
                <h3 style="margin-top: 15px; margin-right: 20px;">Current Salary Dues</h3>
                @php $i=0;@endphp
                @foreach($job as $value)
                @php $i++; @endphp
                <h6>{{$i }}: {{$value['salary']}}</h4>
                  @endforeach
                  <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                      <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">Saved Freelancer Profiles</h5>

                  @foreach($save as $value)
                  <a href="{{route('home.freelancersPrf', $value['freelancerName'])}}">{{$value['freelancerName']}}</a>
                  @endforeach
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card  card-tasks">
                <div class="card-header ">
                  <h5 class="card-category">Contact or Compalin to Support</h5>
                  <h4 class="card-title">Support Box</h4>
                </div>

                <form method="post">
                  <input style="height: 50px;width: 100%;border: 1px solid #f1f1f1;background: transparent;padding-left: 20px;padding-right: 5px; color: black;" type="text" name="complain" placeholder="Complain Description*" value="{{$com}}">

                  @error('complain')
                  <div><font style="margin-left: 19px;" size="2px" color="#EE052C">{{$message}}</font></div>
                  @enderror

                  <input style="height: 50px;width: 100%;border: 1px solid #f1f1f1;background: transparent;padding-left: 20px;padding-right: 5px; color: black;" type="text" name="liable" placeholder="liable?(optional)e.g.freelancerEmail@email.com">

                  <button style="background-color: #1CCFF4; border-radius: 5px; border:none; cursor: pointer; margin-left: 95px;padding: 6px;margin-top: 5px;margin-bottom: 5px; text-decoration: none" type="submit">Submit To Support</button>
                </form>


               <!--    <div class="card-body ">
                    <div class="table-full-width table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" checked>
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </td>
                            <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                <i class="now-ui-icons ui-2_settings-90"></i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox">
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </td>
                            <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                <i class="now-ui-icons ui-2_settings-90"></i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" checked>
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </td>
                            <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                <i class="now-ui-icons ui-2_settings-90"></i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div> -->
              <!-- <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">All Job List&nbsp;&nbsp;&nbsp;&nbsp;<b>Total Job Post: {{count($job)}}</b></h5>
                <h4 class="card-title"> Job Stats </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No.
                      </th>
                      <th>
                        Category
                      </th>
                      <th>
                        Skills Required
                      </th>
                      <th>
                        Deadline
                      </th>
                      <th class="text-right">
                        Salary
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Hired
                      </th>
                    </thead>
                    <tbody>
                      @php
                      $count=0;
                      foreach($job as $value){
                      @endphp
                      <tr>
                        <td>
                          @php $count++; echo $count; @endphp
                        </td>
                        <td>
                          {{$value['category']}}
                        </td>
                        <td>
                          {{$value['skills']}}
                        </td>
                        <td>
                          {{$value['deadline']}}
                        </td>
                        <td class="text-right">
                          {{$value['salary']}}
                        </td>
                        <td>
                          {{$value['status']}}
                        </td>
                        <td>
                          {{$value['hired']}}
                        </td>
                      </tr>
                      @php
                    }
                    @endphp
                  </tbody>
                </table>
                <div class="card-footer ">
                  <hr>
                  <div class="stats">
                    <i class="now-ui-icons loader_refresh spin"></i> Updated 1 minutes ago
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
<script>
  $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>
