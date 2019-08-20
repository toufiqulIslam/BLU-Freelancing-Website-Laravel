<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forget Password</title>
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
          <h5 class="card-title text-center">Pasword Recovery</h5>

          <form class="form-signin" method="post">
           {{csrf_field()}}

            <label><font color="red">{{$std}}</font></label>
           <div class="form-label-group">
            <input type="text" id="inputSecurity" name="security" class="form-control" placeholder="Security Question" required autofocus>
            <label for="inputSecurity">Whats Your Pet Name?(Security Question)</label>
          </div>

          <label><font color="red">{{$std2}}</font></label>
          <div class="form-label-group">
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputEmail">Email address</label>
          </div>

          <div class="form-label-group">
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <label for="inputPassword">New Password</label>
          </div>

          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Update</button>
          <hr class="my-4">
        </form>

        <a href="/login"><button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Log In</button></a>
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