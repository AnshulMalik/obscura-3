<html>
	<?php
		include_once('header.php');
	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<body id="home">

		<div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
              <a href="/" class="brand-logo"><img src="images/logo.jpg" class="logo-image">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obscura</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                  
            <li><a class="waves-effect waves-light" href="/signup">Signup</a></li>
            <li><a class="waves-effect waves-light" href="/login">Login</a></li>

              </ul>

              
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
										<div class="login-block">
											<div class="row"><p id="message"></p></div>
											<div class="row">
												<div class="logmod__alter">
										          <div class="logmod__alter-container">
										          	<div class="col s12">
														<a href="/fb_login" class="connect facebook">
											              <div class="connect__icon">
											                <i class="fa fa-facebook"></i>
											              </div>
											              <div class="connect__context">
											                <span>Login with <strong>Facebook</strong></span>
											              </div>
											            </a>
											           </div>
											           <div class="col s12">
											            <a href="/google_login" class="connect googleplus">
											              <div class="connect__icon">
											                <i class="fa fa-google-plus"></i>
											              </div>
											              <div class="connect__context">
											                <span>Login with <strong>Google+</strong></span>
											              </div>
											            </a>
											            </div>
													</div>
												</div>
											</div>

										    <h1>OR</h1>
										    @if(Session::has('message'))
												{{Session::get('message')}}
											@endif
											<form method="post" action="/postLogin">
										    <input type="text" value="" id="username" type="email" placeholder="Email" id="username" name="email" required/>
										    <input type="password" value="" id="password" type="password" placeholder="Password" id="password" name="password" required/>
										    <button type="submit">Login</button>
										    </form>
										</div>
    						          	<div class="row"></div>
                                      </div>

						</div>
					</div>
				</div>
				<div class="parallax">
					<img src="	images/banner.jpg" style="display: block; transform: translate3d(-50%, 316px, 0px);"></img>
				</div>
			</div>





		</div>

		<?php include_once('footer.php');?>

	</body>
</html>
