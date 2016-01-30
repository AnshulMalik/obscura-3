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
                    <form method="post" action="/updateCollege">
                    @if($errors->has())
                      @foreach($errors->all() as $error)
                        <p>{{ $error }}<br>
                      @endforeach
                    @endif
                    <h5 align="center"> Update Your College</h5>
                    <div class="col m12 s12">
                    <input type="text" placeholder="Update College Name" id="confirm-password" name="college" value="{{Input::old('college')}}"required/>
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
