<html>
  <?php
    include_once('header.php');
    use App\Users;
  ?>

  <body id="home">

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo"><img src="/images/logo.jpg" class="logo-image">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obscura</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                  <li><a class="waves-effect waves-light" href="#home">Home</a></li>
            <li><a class="waves-effect waves-light" href="#">Forum</a></li>
            <li><a class="waves-effect waves-light" href="#">Leaderboard</a></li>
            <li><a class="dropdown-button" href="#" data-activates="logout">{{Users::getFirstName(Auth::id())}}<i class="material-icons right">arrow_drop_down</i></a></li>




              </ul>

               <ul id='logout' class='dropdown-content'>
              <li><a href="/logout">Logout</a></li>
          </ul>
              <ul class="side-nav" id="mobile-demo">
            <li><a href="#home">Home</a></li>
            <li><a class="waves-effect waves-light" href="#">Forum</a></li>
            <li><a class="waves-effect waves-light" href="#">Leaderboard</a></li>
            <li><a class="waves-effect waves-light" href="#!">Logout</a></li>

              </ul>
            </div>
        </nav>
    </div>


    <div class="container-fluid body">
      <div class="parallax-container levels-container valign-wrapper">
        <div class="section">
          <div class="container">
            <div class="row center">
              <div class="col s12 level-number white-text left-align offset-s1"><h5>Level 25</h5></div>
              <div class="level-content col s12">
                <div class="level-image-container">
                  <script>
                    var word = new Array(); //words stored in array
                    word[0] = "fox";
                    word[2] = "ox";
                    word[4] = "bear";
                    word[6] = "bird";
                    word[9] = "mouse";
                    word[8] = "wolf";
                    word[7] = "toad";
                    word[5] = "whale";
                    word[3] = "bee";
                    word[1] = "tiger";
                    function show() {
                      var i = Math.floor((Math.random()*10));
                      document.getElementById('display').innerHTML = word[i];
                    }
                  </script>
                  <p class="white-text" id="display"></p>
                  <input type="button" class="btn btn-default green" onclick="show()" value="Generate!" />
                  
                </div>
              </div> 

              <form>
                <div class="row">

                  <div class="col s6 offset-s2 input-field">
                    <input type="text" class="validate answer-box" id="answer" placeholder="Answer">
                  </div>
                  <div class="col s3">
                    <input type="button" class="btn level-submit" value="Submit" />
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

  </body>
</html>

