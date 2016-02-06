<html>
  <?php
    include_once('header.php');
    use App\Users;
  ?>
  <style>
        table td {
            padding: 15px 5px 30px 5px;
            text-align: center;
        }
        .block {
            display: block;
        }
        .front {
            margin-top: -15px;
      padding :10px;
            margin-left: -5px;
            background-color: rgba(255, 255, 255, .9);
        }
        .back {
            margin-top: -15px;
      padding: 10px;
            margin-left: -5px;
            background-color: rgba(240, 240, 240, .95);
        }
    </style>

  <body id="home">

  <?php include_once('nav_after_login.php'); ?>


    <div class="container-fluid body">
      <div class="parallax-container levels-container valign-wrapper">
        <div class="section">
          <div class="container">
            <div class="row center">
              <div class="col s12 level-number white-text left-align offset-s1"><h5>Level 24</h5></div>
              <div class="level-content col s12">
                <div class="level-image-container">

                  <table>
                                <tbody>
                                    <tr>
                                        <td id="1">
                                              <div class="front">
                                                <div>2</div>
                                              </div>
                                              <div class="back">
                                                w
                                              </div>
                                        </td>
                                        <td id="2">
                                              <div class="front">
                                                3
                                              </div>
                                              <div class="back">
                                                h
                                              </div>
                                        </td>
                                        <td id="3">
                                              <div class="front">
                                                4
                                              </div>
                                              <div class="back">
                                                y
                                              </div>
                                        </td>
                                        <td id="4">
                                              <div class="front">
                                                5
                                              </div>
                                              <div class="back">
                                                  a
                                              </div>
                                        </td>
                                        <td id="5">
                                              <div class="front">
                                                6
                                              </div>
                                              <div class="back">
                                                n
                                              </div>
                                        </td>
                                        <td id="6">
                                              <div class="front">
                                                7
                                              </div>
                                              <div class="back">
                                                t
                                              </div>
                                        </td>
                                    </tr>

                                    <tr> <!-- Second row-->
                                        <td id="7">
                                          <div class="front">
                                                <div>8</div>
                                              </div>
                                              <div class="back">
                                                s
                                              </div>
                                        </td>
                                        <td id="8">
                                              <div class="front">
                                                9
                                              </div>
                                              <div class="back">
                                                s
                                              </div>
                                        </td>
                                        <td id="9">
                                              <div class="front">
                                                10
                                              </div>
                                              <div class="back">
                                                p
                                              </div>
                                        </td>
                                        <td id="10">
                                              <div class="front">
                                                11
                                              </div>
                                              <div class="back">
                                                  i
                                              </div>
                                        </td>
                                        <td id="11">
                                              <div class="front">
                                                12
                                              </div>
                                              <div class="back">
                                                n
                                              </div>
                                        </td>
                                        <td id="12">
                                              <div class="front">
                                                13
                                              </div>
                                              <div class="back">
                                                s
                                              </div>
                                        </td>
                                    </tr>

                                    <tr> <!-- Third row -->
                                        <td id="13">
                                              <div class="front">
                                                <div>14</div>
                                              </div>
                                              <div class="back">
                                                p
                                              </div>
                                        </td>
                                        <td id="14">
                                              <div class="front">
                                                15
                                              </div>
                                              <div class="back">
                                                a
                                              </div>
                                        </td>
                                        <td id="15">
                                              <div class="front">
                                                16
                                              </div>
                                              <div class="back">
                                                r
                                              </div>
                                        </td>
                                        <td id="16">
                                              <div class="front">
                                                17
                                              </div>
                                              <div class="back">
                                                  s
                                              </div>
                                        </td>
                                        <td id="17">
                                              <div class="front">
                                                18
                                              </div>
                                              <div class="back">
                                                e
                                              </div>
                                        </td>
                                        <td id="18">
                                              <div class="front">
                                                19
                                              </div>
                                              <div class="back">
                                                h
                                              </div>
                                        </td>
                                    </tr>
                                    <tr> <!-- Fourth Row -->
                                        <td id="19">
                                              <div class="front">
                                                <div>20</div>
                                              </div>
                                              <div class="back">
                                                o
                                              </div>
                                        </td>
                                        <td id="20">
                                              <div class="front">
                                                21
                                              </div>
                                              <div class="back">
                                                r
                                              </div>
                                        </td>
                                        <td id="21">
                                              <div class="front">
                                                22
                                              </div>
                                              <div class="back">
                                                n
                                              </div>
                                        </td>
                                        <td id="22">
                                              <div class="front">
                                                23
                                              </div>
                                              <div class="back">
                                                  e
                                              </div>
                                        </td>
                                        <td id="23">
                                              <div class="front">
                                                24
                                              </div>
                                              <div class="back">
                                                t
                                              </div>
                                        </td>
                                        <td id="24">
                                              <div class="front">
                                                25
                                              </div>
                                              <div class="back">
                                                n
                                              </div>
                                        </td>
                                    </tr>
                                    
                                    

                                </tbody>
                            </table>
                            <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
                            <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.19/dist/jquery.flip.min.js"></script>
                            <script>
                                $("#1").flip({trigger: 'hover'});

                                $("#2").flip({trigger: 'hover'});
                                $("#3").flip({trigger: 'hover'});
                                $("#4").flip({trigger: 'hover'});
                                $("#5").flip({trigger: 'hover'});
                                $("#6").flip({trigger: 'hover'});
                                $("#7").flip({trigger: 'hover'});
                                $("#7").flip({trigger: 'hover'});
                                $("#8").flip({trigger: 'hover'});
                                $("#9").flip({trigger: 'hover'});
                                $("#10").flip({trigger: 'hover'});
                                $("#11").flip({trigger: 'hover'});
                                $("#12").flip({trigger: 'hover'});
                                $("#13").flip({trigger: 'hover'});
                                $("#14").flip({trigger: 'hover'});
                                $("#15").flip({trigger: 'hover'});
                                $("#16").flip({trigger: 'hover'});
                                $("#17").flip({trigger: 'hover'});
                                $("#18").flip({trigger: 'hover'});

                                $("#19").flip({trigger: 'hover'});

                                $("#20").flip({trigger: 'hover'});
                                $("#21").flip({trigger: 'hover'});
                                $("#22").flip({trigger: 'hover'});
                                $("#23").flip({trigger: 'hover'});
                                $("#24").flip({trigger: 'hover'});
                                $("#25").flip({trigger: 'hover'});
                                $("#26").flip({trigger: 'hover'});
                                $("#27").flip({trigger: 'hover'});
                                $("#28").flip({trigger: 'hover'});
                                $("#29").flip({trigger: 'hover'});
                                $("#30").flip({trigger: 'hover'});
                                $("#31").flip({trigger: 'hover'});
                                $("#32").flip({trigger: 'hover'});
                                $("#33").flip({trigger: 'hover'});
                                $("#34").flip({trigger: 'hover'});
                                $("#35").flip({trigger: 'hover'});
                                $("#36").flip({trigger: 'hover'});

                            </script>









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
                    <input type="hidden" value="29" name="presentId">
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
   <!-- jagex.jpg -->
  </body>
</html>

<html>
  