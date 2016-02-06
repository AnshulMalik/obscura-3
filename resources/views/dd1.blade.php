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
              <div class="col s12 level-number white-text left-align offset-s1"><h5>Level 22</h5></div>
              <div class="level-content col s12">
                <div class="level-image-container">
                  <img class="level-image" src="/levelx/dd1.jpg" usemap="#Map3" />
                </div>
              </div> 

               <form method="post" action="/checkAnswer"> 
                @if(Session::has('message'))
                <div class="answer-message " >
                  <div class="left-align col s10 offset-s2 white-text">
                      {{Session::get('message')}}
                  </div>
                </div>
                @endif
                <div class="row">

                  <div class="col s6 offset-s2 input-field">
                  <input type="hidden" value="5" name="presentId">
                    <input type="text" class="validate answer-box" id="answer" placeholder="Answer" name="anxswer">
                    
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
          <map name="Map3" id="Map3">
            <area alt="" title="" href="#" shape="poly" coords="282,175,275,189,283,200,291,200,301,190,299,179,292,172" />
            <area alt="" title="" href="#" shape="poly" coords="14,269,44,258,57,247,54,234,36,232,21,232,7,237,0,244,3,257,7,267" />
            
        </map>
        </div>
      </div>


    </div>

    <?php include_once('footer.php');?>
    <script src="js/index.js"></script>
    <script>
    
    $(document).ready(function() {
      alert('Open');
    });
    </script>
  </body>
</html>

