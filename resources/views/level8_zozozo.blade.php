<html>
  <?php
    include_once('header.php');
    use App\Users;
  ?>

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
                  <img class="level-image" src="/levely/zozozo.jpg" usemap="#Map" />
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
          <?php 
          $id = Auth::id();
            echo "<area href='/level9?id="."$id'"."shape='poly' coords='56,90,58,125,85,128,87,90,73,85' />";
          ?>
            <area href="/level9" shape="poly" coords="56,90,58,125,85,128,87,90,73,85" />
            
        </map>
        </div>
      </div>


    </div>

    <?php include_once('footer.php');?>
    
    <?php
    echo "<!--".Users::getHintSource(8)."-->";
    ?>
  </body>
</html>

<html>
  