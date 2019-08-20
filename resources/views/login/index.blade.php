<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('/loginR/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/loginR/css/all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/loginR/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>


            <form class="form-signin" method="post">
            	{{csrf_field()}}
            	
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <a href="/forget">Forget Password?</a>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
            </form>
            <a href="/signup"><button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Sign Up</button></a>
            <a href="{{route('home.index')}}"><button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Go to Home</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="{{ asset('/loginR/js/jquery.slim.min.js') }}"></script>
	<script src="{{ asset('/loginR/js/bootstrap.bundle.min.js') }}"></script>
	
</html>