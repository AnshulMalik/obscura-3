<html>
  <?php
    include_once('header.php');
    use App\Users;
  ?>

  <body id="home">

  <?php include_once('nav_after_login.php'); ?>

<br>
    <div class="container-fluid body">
      <div class="parallax-container level-4-container valign-wrapper">
        <div class="section">
          <div class="container">
            <div class="row center">
              <div class="col s12 level-number white-text left-align offset-s1"><h5>Congratulations <?php echo Users::getFirstName(Auth::id());?></h5></div>
              <div class="level-content col s12">
                <div class="level-image-container">
                <br>
                  <img class="level-image" src="cong.jpg" />
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
                    <input type="hidden" class="validate answer-box" id="answer" placeholder="Answer" name="answer">
                    
                  </div>
                  
                  
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
    echo "<!--".Users::getHintSource(30)."-->";
    ?>
  </body>
</html>

<html>
  