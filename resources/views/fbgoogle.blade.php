<html>
  <?php
    include_once('header.php');
  ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <body id="home">

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo"><img src="/images/logo.jpg" class="logo-image">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obscura</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>


    <div class="container-fluid body">
      <div class="full valign-wrapper">
        <div class="section">
          <div class="container">
            <div class="row center">

                <div class="row">
                  <div class="row col s12"><p class="message"></p></div>
                  <div class="login-block signup-block">
                    <div class="row"><p id="message"></p></div>
                    <form method="post" action="/postfbgoogle">
                    @if($errors->has())
            @foreach($errors->all() as $error)
              <p>{{ $error }}<br>
            @endforeach
          @endif
                    <div class="col m6 s12">
                     
                      <input type="text"   id="firstname" placeholder="First Name" name="first_name" value="@if(isset($newUserData)){{$newUserData['first_name']}}@else{{Input::old('first_name')}}@endif" required/>
                    </div>
                    <div class="col s12 m6">
                      <input type="text"   id="lastname" placeholder="Last Name" name="last_name" value="@if(isset($newUserData)){{$newUserData['last_name']}}@else{{Input::old('last_name')}}@endif" required/>

                    </div>

                    <div class="col m6 s12">
                      <input type="text"   id="username" placeholder="Email" name="email" value="@if(isset($newUserData)){{$newUserData['email']}}@else{{Input::old('email')}}@endif" required/>
                    </div>
                    <div class="col s12 m6">
                      <input type="text"  id="phone" placeholder="Contacts" name="mobno" value="{{Input::old('mobno')}}" required/>
                    </div>
                    <div class="col m6 s12">
                      <input type="password" value="" placeholder="Password" id="password" name="password" required/>
                    </div>
                    <div class="col m6 s12">
                    <input type="password" value="" placeholder="Confirm Password" id="confirm-password" name="password_confirmation" required/>
                  </div>
                    <div class="col m12 s12">
                    <input type="text" value="" placeholder="College Name" id="confirm-password" name="college" value="@if(isset($newUserData)){{$newUserData['college']}}@else{{Input::old('college')}}@endif"required/>
                  </div>

                    <button type="submit">Signup</button>
                  </div>
                  <div class="row"></div>
                </div>
                </form>
                <div class="row">
                  <!-- Captcha here, it will resize automatically-->
                </div>

                <div class="row"></div>
            </div>
          </div>
        </div>
        <div class="parallax">
          <img src="http://templated.co/items/demos/retrospect/images/banner.jpg" style="display: block; transform: translate3d(-50%, 316px, 0px);"></img>
        </div>
      </div>





    </div>

    <?php include_once('footer.php');?>

  </body>
</html>
