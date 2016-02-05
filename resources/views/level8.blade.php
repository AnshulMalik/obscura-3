<html>
  <?php
    
    use App\Users;
  ?>
  <head>
    <title>Konami</title>
    <link href="/css/ticker-style.css" rel="stylesheet" type="text/css" />
    
    
    
    <link rel="icon" type="image/png" href="/images/icon.png" />
    <link rel="stylesheet" type="text/css" href="/css/materialize.css">

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
</head>

  <body id="home">

  <?php include_once('nav_after_login.php'); ?>


    <div class="container-fluid body">
      <div class="parallax-container levels-container valign-wrapper">
        <div class="section">
          <div class="container">
            <div class="row center">
              <div class="col s12 level-number white-text left-align offset-s1"><h5>Level 8</h5></div>
              <div class="level-content col s12">
                <div class="level-image-container">
                  <img class="level-image" src="/levely/ab_3z.jpg" usemap="#Map" />
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
                    <input type="hidden" value="10" name="presentId">
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
          <map name="Map" id="Map">
            <area alt="" title="" href="#" shape="poly" coords="193,0,195,29,241,29,240,2" />
            
        </map>
        </div>
      </div>


    </div>

    <?php include_once('footer.php');?>
     <script>
    $('#Map').on('click', function(e) {
      e.preventDefault();
      document.location.pathname = "/level8_lol123";
    });
    </script>
    <?php
    echo "<!--".Users::getHintSource(8)."-->";
    ?>
  </body>
</html>

<html>
  