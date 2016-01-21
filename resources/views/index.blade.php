
<?php
use App\Users;
?>
<html>
  <?php
    include_once('header.php');

  ?>

  <body id="home">

    <?php include_once('nav.php'); ?>

    <div class="container-fluid body">
      <div class="parallax-container full valign-wrapper">
        <div class="section">
          <div class="container overlay">
            <div class="row center">
              <h1 class="header landing-header col s12 light"><span id="obsHead"> </span> <span id="cursor"> </span></h1>
              <h5 class="white-text tagline">The biggest crypthunt is back again...</h5>
              <div class="row">



                  <div class="col m6 offset-m3 s8 offset-s2">
                      <div class="input-field col s8 offset-s2">
                        <a class="btn-big btn-alt waves-effect waves-teal signupBtn" href="/login">Get Started</a>
                        
                      </div>
                  </div>


              </div>

            </div>
          </div>
          <div class="ticker-div">
            <ul id="js-news" class="js-hidden">
              <li class="news-item">{!! Users::getTicker(); !!}</li>
            </ul>
            </div>  
        </div>
        <div class="parallax">
          <img src="http://templated.co/items/demos/retrospect/images/banner.jpg" style="display: block; transform: translate3d(-50%, 316px, 0px);"></img>
        </div>
      </div>


      <div class="container-fluid " id="about">
        <div class="container">
          <section class="container-fluid blocks" id="brief-block">
              <div class="row" >
                <div class="col-md-10 col-sm-12 col-md-offset-1">
                  <div class="container-fluid blocks" >
                    <div class="row" >
                      <div class=" big-icons col s4 text-center">
                        <i class="large material-icons" aria-hidden="true">equalizer</i>
                        <div> 30+ Levels</div>
                      </div>
                      <div class=" big-icons col s4 text-center">
                        <i class="large material-icons" aria-hidden="true">today</i>
                        <div>4-5 Days</div>
                      </div>
                      <div class="big-icons col s4 text-center ">
                        <i class="large material-icons" aria-hidden="true">shopping_basket</i>
                        <div>Rs.10k+ Goodies</div>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </section>
        </div>
      </div>


      <div class="parallax-container valign-wrapper" id="portfolio">
        <div class="section">
          <div class="container">
            <div class="row center">
              <h4 class="header col s12 white-text">About us</h4>
              <h6 class="header col s12 light white-text about-text">One of the most happening and fun crypt hunts of this year is ObscurA 3.0. ObscurA is derived from the word "Obscure" which means "keep from being seen; conceal", and that is what we do. We allow you to use any means at your disposal (that includes google) to crack the questions we pose to you, with special prizes for cracking some specific questions, BUT there is a catch. Our questions are not straightforward, most of them are based on wordplay, cyphers and lateral thinking (among other things).  
So put on your thinking caps, flex your fingers and get ready for a race to decide who will crack the last question first and will be the winner of Obscura3.0.
Happy hunting!!.</h6>
            </div>
          </div>
        </div>
        <div class="parallax">
          <img src="http://templated.co/items/demos/retrospect/images/pic11.jpg" style="display: block; transform: translate3d(-50%, 316px, 0px);"></img>
        </div>
      </div>


      <div class="container-fluid center z-depth-3" id="rules">
        <div class="container">
            <div class="section">
              <h5>Rules</h5>

              <div class="">
                <ol>
                  <li>All the answers are in lowercase. No  UPPERCASE shall be TOLERATED!</li>
                  <li>Nothing is obvious at Obscura. So open the flaps  and think out of the box.</li>
                  <li>But we've sprinkled sufficient clues every here  and there. So keep a close check on them.(PSST.. Source code might help, but this is just the beginning!)</li>
                  <li>We can help you, if you are polite enough to ask  for it. Don't go around pestering us for hints.</li>
                  <li>Googlebaba knows it all.</li>
                  <li>We are cruel people hints can be ANYWHERE.</li>
                  <li>Begin to love surfing. Oh, did we forget to tell  we love Wikipedia and tineye.com a lot?</li>
                  <li>Finding the answer is not the final solution.</li>
                </ol>

              </div>
            </div>
        </div>
      </div>


      <div class="parallax-container valign-wrapper" id="portfolio">
        <div class="section">
          <div class="container">
            <div class="row center">
              <h5 class="header col s12 light white-text"></h5>
            </div>
          </div>
        </div>
        <div class="parallax">
          <img src="images/parallax2.jpg" style="display: block; transform: translate3d(-50%, 316px, 0px);"></img>
        </div>
      </div>


      <div class="container-fluid z-depth-5" id="contact">
        <div class="container">

        </div>
      </div>




    </div>

    <?php include_once('footer.php');?>

    <script type="text/javascript">

      var string = "Obscura 3.0";
      var i = 0;
      var isCursorVisible = true;
      setInterval(function() {
        if(i <= string.length) {
          var container = $('#obsHead');
          container.append(string[i++]);
        }
      }, 300);

      var toggleCursor = function() {
        var container = $('#cursor');
        if(isCursorVisible == true) {
          isCursorVisible = false;
          container.css('display', 'none');
        }
        else {
          isCursorVisible = true;
          container.css('display', 'inline');
        }

      }

      setInterval(function() {
        toggleCursor();
      }, 500);

    </script>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55697523-2', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
