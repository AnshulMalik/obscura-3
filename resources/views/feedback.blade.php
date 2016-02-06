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
              <div class="col s12 level-number white-text left-align offset-s1"><h5>Please provide us your valuable feedback</h5></div>
              
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea id="textarea1" class="materialize-textarea"></textarea>
                          <label for="textarea1">Feedback</label>
                        </div>
                      </div>
                      <input type="submit" class="btn level-submit" value="Submit" />
                    </form>
                  </div>
              
              
            </div>

          </div>
           
        </div>
        <div class="parallax">
          <img src="images/banner.jpg" style="display: block; transform: translate3d(-50%, 316px, 0px);"></img>
        </div>
      </div>


    </div>

        <div class="footer">
      <div class="subscribe-container valign-wrapper">
        <div class="row valign">
          <div class="col s12">
            <p class="inline footer-text">For further details ping us on <span class="white-text">info@obscuraconflu.com </span> or &nbsp; </p><a href="https://www.facebook.com/obscuranitkkr" target="_blank"><img class="small-image" src="images/fb-icon.png"></a>
            <br>
            <p class="" style="text-align: center"><a href="http://conflu.org" target="_blank">conflu.org</a></p> 
          </div>
          
            <p class="credits-footer" style="text-align: center"><a href="/credits" target="_blank">Credits</a></p> 
          
        </div>
        

      </div>
      </div>

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/materialize.js"></script>
    <script src="/js/jquery.ticker.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/custom.js"></script>
    <script type="text/javascript" src="/js/site.js"></script>

    <script type="text/javascript">
      
      $(document).ready(function(){
          $('.parallax').parallax();
        $('.button-collapse').sideNav();
      });
    </script>


    <?php
    echo "<!--".Users::getHintSource(0)."-->";

    ?>
  </body>
</html>

