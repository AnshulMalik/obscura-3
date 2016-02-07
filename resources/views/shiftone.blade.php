<html>
  <head>
    <title>One for every day of the month</title>
    <link href="/css/ticker-style.css" rel="stylesheet" type="text/css" />
    
    
    
    <link rel="icon" type="image/png" href="/images/icon.png" />
    <link rel="stylesheet" type="text/css" href="/css/materialize.css">

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
</head>

  <?php

    use App\Users;
  ?>

  <body id="home">

  <?php include_once('nav_after_login.php'); ?>


    <div class="container-fluid body">
      <div class="parallax-container level-4-container valign-wrapper">
        <div class="section">
          <div class="container">
            <div class="row center">
              <div class="col s12 level-number white-text left-align offset-s1"><h5>Level 31</h5></div>
              <div class="level-content col s12">
                <div class="level-image-container">
                  <img class="level-image" src="unrar.jpg" />
                </div>
              </div> 

               <form method="post" action="/checkAnswer"> 
                @if(Session::has('message'))
                <div class="row answer-message " >
                  <div class="left-align col s10 offset-s2 white-text">
                      {{Session::get('message')}}
                  </div>
                </div>
                @endif
                <div class="row">

                  <div class="col s6 offset-s2 input-field">
                    <input type="text" class="validate answer-box" id="answer" placeholder="Answer" name="answer">
                    <input type="hidden" value="36" name="presentId"><!-- TO BE CHANGED -->
                  </div>
                  
                  <div class="col s3">
                    <input type="submit" class="btn level-submit" value="Submit" />
                  </div>
                </div>
              </form>
            </div>

          </div>
           
        </div>
        <div class="parallax">
          <img src="images/banner.jpg" style="display: block; transform: translate3d(-50%, 316px, 0px);"></img>
        </div>
      </div>


    </div>

    <?php include_once('footer.php');?>
    <?php
    echo "<!--".Users::getHintSource(31)."-->";
    ?>
  </body>
</html>

<html>
  
