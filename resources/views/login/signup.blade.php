<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('/loginR/css/signupStyle.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/loginR/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/loginR/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
  <!--===============================================================================================-->
</head>
<body>

  <div class="container">
    <form method="post">
      {{csrf_field()}}
      <div class="row">
        <h4>Account</h4>
        <div class="input-group input-group-icon">
          <input type="text" name="uname" value="{{ old('uname') }}" placeholder="Full Name"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
          @error('uname')
          <div><font size="3px" color="#EE052C">{{$message}}</font></div>
          @enderror
        </div>
        <div class="input-group input-group-icon">
          <input type="email" value="{{ old('email') }}" name="email" placeholder="Email Adress"/>
          <div class="input-icon"><i class="fa fa-envelope"></i></div>
          @error('email')
          <div><font size="3px" color="#EE052C">{{$message}}</font></div>
          @enderror
        </div>
        <div class="input-group input-group-icon">
          <input type="password" name="password" placeholder="Password"/>
          <div class="input-icon"><i class="fa fa-key"></i></div>
          @error('password')
          <div><font size="3px" color="#EE052C">{{$message}}</font></div>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="col-half">
          <h4>Date of Birth</h4>
          <div class="input-group">
            <div class="col-third">
              <input name="dob" type="Date" placeholder="DD"/>
              @error('dob')
          <div><font size="3px" color="#EE052C">{{$message}}</font></div>
          @enderror
            </div>
            
          </div>
        </div>
        <div class="col-half">
          <h4>Gender</h4>
          <div class="input-group">
            <input type="radio" name="gender" value="male" id="gender-male"/>
            <label for="gender-male">Male</label>
            <input type="radio" name="gender" value="female" id="gender-female"/>
            <label for="gender-female">Female</label>
            <input type="radio" name="gender" value="other" id="gender-other"/>
            <label for="gender-other">Other</label>
          </div>
        </div>
      </div>
      <div class="row">
        <h4>User Type</h4>
        <div class="input-group">
          <input type="radio" name="user_type" value="freelancer" id="user-type-freelancer" checked="true"/>
          <label for="user-type-freelancer">Freelancer</label>
          <input type="radio" name="user_type" id="user-type-client" value="client"/>
          <label for="user-type-client">Client</label>
        </div>

        <h4>Payment Details</h4>
        <div class="input-group">
          <input type="radio" name="payment_method" value="card" id="payment-method-card" checked="true"/>
          <label for="payment-method-card"><span><i class="fa fa-cc-visa"></i>Credit Card</span></label>
          <input type="radio" name="payment_method" value="paypal" id="payment-method-paypal"/>
          <label for="payment-method-paypal"> <span><i class="fa fa-cc-paypal"></i>Paypal</span></label>
        </div>
        <div class="input-group input-group-icon">
          <input name="cardNumber" value="{{ old('cardNumber') }}" type="number" placeholder="Card Number"/>
          <div class="input-icon"><i class="fa fa-credit-card"></i></div>
          @error('cardNumber')
          <div><font size="3px" color="#EE052C">{{$message}}</font></div>
          @enderror
        </div>
        <div class="col-half">
          <div class="input-group input-group-icon">
            <input name="cardCVC" value="{{ old('cardCVC') }}" type="number" placeholder="Card CVC"/>
            <div class="input-icon"><i class="fa fa-user"></i></div>
            @error('cardCVC')
          <div><font size="3px" color="#EE052C">{{$message}}</font></div>
          @enderror
          </div>
        </div>
        <div class="col-half">
          <div class="input-group">
            <input name="expire" type="Date" placeholder="DD"/>
            @error('expire')
          <div><font size="3px" color="#EE052C">{{$message}}</font></div>
          @enderror
          </div>
        </div>
      </div>
      <div class="row">
        <h4>Terms and Conditions</h4>
        <div class="input-group">
          <input name="agree" type="checkbox" id="terms"/>
          <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
          @error('agree')
          <div><font size="3px" color="#EE052C">{{$message}}</font></div>
          @enderror
        </div>

        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign Up</button>

      </div>
    </form>
    <span class="signin_message"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="4px" color="#7ed321"><b>Already an existing user?</b></font></span> 
    <a href="/login"><button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign In</button></a>
    <a href="{{route('home.index')}}"><button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Go to Home</button></a>
  </div>
  <!--===============================================================================================-->
  <!--===============================================================================================-->
<!--   @foreach ($errors->all() as $error)
  {{ $error }} <br>
  @endforeach  -->

</body>

</html>