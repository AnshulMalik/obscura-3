<?php
use App\Users;
?>
<!DOCTYPE html>
<html>
<head>
<title>Obscura 2.0</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/header.css">

<link rel="stylesheet" href="css/footer.css">

<link rel="stylesheet" href="css/loginRegister.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,800,900,300,200|Londrina+Outline|Flamenco:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cuprum:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
  <body>
  

 <section class="container-fluid" id="inner-block">
      <div class="row" id="short-head">
        <a class="btn btn-default pull-left" id="login-link" href="/">
          Obscura
        </a>
		<div class="dropdown pull-right" style="margin-right:10px;">
			<button class="btn btn-default" id="dLabel" type="button"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:none;color:white;margin-left:15px;margin-top: 15px ;width:100px">
				{{Users::getFirstName(Auth::id())}}
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="background:none;color:white; width:100px; margin-left:15px;margin-top:-25px">

				<li role="presentation" class="text-center"><a class="btn btn-default pull-right" href="/logout">Logout</a></li>

			</ul>
		</div>
      <!--  <div class="dropdown pull-right" style="margin-right:10px">
			<button class="btn btn-default" id="dLabel" type="button"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:none;color:white;margin-left:15px;margin-top: 15px ;width:100px">
				Level 0
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="background:none;;color:white; width:100px; margin-left:15px">

				<li role="presentation" class="text-center">Level 0</li>
				<li role="presentation" class="text-center">Level 1</li>
				<li role="presentation" class="text-center">Level 2</li>
				<li role="presentation" class="text-center">Level 3</li>

			</ul>
		</div>-->
		<a class="btn btn-default pull-right" id="forum-link" href="https://www.facebook.com/Conflu/app_202980683107053" target="_blank">
          Forum
        </a>
        <br>
      </div>
      </div>    
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12" style="background:white; opacity:0.8; height:250px; margin-top:60px">
				<div class="row">
					<div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-md-6">
						<h1 style="font-size:40px">Welcome {{Users::getFirstName(Auth::id())}}</h1><br><br>
						<h2>The Game will Start from 6th feb</h2>
					</div>
				</div>
            </div>
          </div>
		  <br />
		  <br />
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
					<form method="post" action="/start">
						<button type="submit" class="btn btn-primary">Lets Go </button>
						</form>
					</div>
				</div>
		  
		
  </section> 
   <div id="bottomnav" class="row"  >
      <div class="col-md-2 col-sm-2 col-xs-4">
        
        <a href="http://www.facebook.com/Conflu" target="_blank" style="float:left"><img src="facebook_active.png" alt="fb" style="height:30px"></a>
        <a href="http://www.youtube.com/photonitk" target="_blank" style="float:left"><img src="youtube_active.png" alt="youtube" style="height:30px"></a>
         <p class="text-center">NIT Kurukshetra</p>
      </div>
      <div class="col-md-7 col-sm-7 col-xs-5" >
        <marquee><p class="text-primary" style="color:black">{{Ticker::getTicker()}}</p></marquee>  
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3">
        <div style="float:left"><iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com/Conflu&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=40" scrolling="no" frameborder="0" style="border:none;overflow:hidden;height:20px" allowTransparency="true"></iframe></div>
      
      </div>
      </div>

  </body>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="https://apis.google.com/js/platform.js"></script>

  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</html>