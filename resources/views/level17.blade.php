<?php
    //include_once('header.php');
    use App\Users;
  ?>
<html>
  <head>
    <style>
      html {
        -webkit-text-size-adjust: 100%;
        font-size: 125%;
      }

      body {
        background-color:#f7f7f7;
        color: #646464;
        font-family: 'Segoe UI', Tahoma, sans-serif;
        font-size: 75%;
      }

      div {
        display:block;
      }

      h1 {
        margin-top: 0;
            color: #333;
            font-size: 1.6em;
            font-weight: normal;
            line-height: 1.25em;
            margin-bottom: 16px;
      }
      button {
            -webkit-user-select: none;
            background: rgb(76, 142, 250);
            border: 0;
            border-radius: 2px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            float: right;
            font-size: .875em;
            margin: 0;
            padding: 10px 24px;
            transition: box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1);
      }
      button:hover {
        box-shadow: 0 1px 2px rgba(1, 1, 1, 0.5);
      }

      .error-code {
            color: #777;
            display: inline;
            font-size: .86667em;
            margin-top: 15px;
            opacity: .5;
            text-transform: uppercase;
      }

      .interstitial-wrapper {
        box-sizing: border-box;
        font-size: 1em;
        margin: 100px auto 0;
        max-width: 600px;
        width: 100%;
      }

      .offline .interstitial-wrapper {
        color: #2b2b2b;
        font-size: 1em;
        line-height: 1.55;
        margin: 0 auto;
        max-width: 600px;
        padding-top: 100px;
        width: 100%;
      }

      .offline .runner-container {
            height: 150px;
            max-width: 600px;
            overflow: hidden;
            position: absolute;
            top: 35px;
            width: 44px;
      }

      .icon {
        background-repeat: no-repeat;
        background-size: 100%;
        height: 72px;
        margin: 0 0 40px;
        width: 720px;
        -webkit-user-select: none;
        content: '';
      }
            .icon-offline {
                background-image: url('dinasor.png');
                background-size: contain;
                position: relative;
                width: 74px;
            }

      .hidden {
        display: none;
      }

      .nav-wrapper {
            margin-top: 51px;
      }
      #buttons::after {
            clear: both;
            content: '';
            display: block;
            width: 100%;
      }

      .nav-wrapper::after {
            clear: both;
            content: '';
            display: table;
            width: 100%;
      }
      .suggested-left > #control-buttons, .suggested-left #stale-load-button, .suggested-right > #details-button {
            float: left;
      }
      .suggested-right > #control-buttons, .suggested-right #stale-load-button, .suggested-left > #details-button {
            float: right;
      }

      #details-button {
            background: inherit;
            border: 0;
            float: none;
            box-shadow: none;
            min-width: 0;
            margin: 0;
            padding: 10px 0;
            text-decoration: underline;
      }
      .small-link {
            color: #696969;
            font-size: .875em;
      }


      @media (min-height: 240px) and (orientation: landscape) {
        .icon-offline {
              margin-bottom: 20px;
        }
      }
      @media (max-width: 640px), (max-height: 640px) {
        h1 {
              margin: 0 0 15px;
        }
        button {
          width: 100%;
        }
      }
    </style>
  </head>

  <body class="offline">
    <div class="interstitial-wrapper">
      <div id="main-content">
        <div class="icon icon-offline"></div>
        <div id="main-message">
          <h1>This webpage is not available</h1>
          <p></p>
          <div class="error-code">DNS_PROBE_FINISHED_NO_INTERNET</div>
        </div>
      </div>


            <div id="buttons" class="nav-wrapper suggested-left">
                  <div id="control-buttons">
                      <button id="show-saved-copy-button" class="blue-button text-button" style="display: none;"></button>
                      <button id="reload-button" class="blue-button text-button">Reload</button>
                  </div>
                  <button id="details-button" class="text-button small-link">Details</button>
            </div>




            <div id="details" class="hidden">
                  <div class="suggestions" jsselect="suggestions" jstcache="6" jsinstance="0">
                    <div class="suggestion-header" jsvalues=".innerHTML:header" jstcache="13">Check your Internet connection</div>
                    <div class="suggestion-body" jsvalues=".innerHTML:body" jstcache="14">Check any cables and reboot any routers, modems, or other network
                    devices you may be using.</div>
                  </div>
            </div>


    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    <script>
        
    </script>
    
      <?php include_once('level17script.php'); ?>
      <?php
    echo "<!--".Users::getHintSource(17)."-->";
    ?>
  </body>


</html>