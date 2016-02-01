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
              <div class="col s12 level-number white-text left-align offset-s1"><h5>Level 3</h5></div>
              <div class="level-content col s12">
                <div class="level-image-container">
                  <img class="level-image" src="3stickykeys.jpg" />
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
                    <input type="hidden" value="4" name="presentId">
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
    <script src="js/index.js"></script>
    <script>
        document.onkeydown = checkKey;
        var counter = 0;
        function checkKey(e) {
            e = e || window.event;
            if(e.keyCode == 16) {
                counter += 1;
                if(counter == 5) {
                    alert("You did it.");
                    var key = "key";
                    var value = 50;
                    window.location = "/level4?key="+value;
                    //window.location.pathname = "/level4?"+"key"+"="+vaue;
                }
            }
        }
    </script>
    <?php
    echo "<!--".Users::getHintSource(3)."-->";
    ?>
  </body>
</html>

