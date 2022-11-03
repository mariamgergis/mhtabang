<?php 
  session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>MH TABANG</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="styletest.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body>



  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="https://i.ibb.co/Nn5qZKW/logo.png">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="dashboard.php">Dashboard</a></li> 
                
                              <li class="scroll-to-section"><a href="appointment.html">Schedule Appointment</a></li> 

                              <li class="scroll-to-section"><a href="contactus.html">Contact</a></li> 

                
              <li class="scroll-to-section"><div class="main-button-hover"><a href="login-user.php">Log Out</a></div></li> 
                
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
      

      
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="item header-text">


                    </div>
                  </div>
                </div>
                    </div>
                  </div>
                </div>

  
    
    
  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        </div>
          <div class="section-heading">
            <center><?php  if (isset($_SESSION['username'])) : ?>
            <h2>How are you feeling <em><?php echo $_SESSION['username']; ?></em>?</h2>
              </center>          <?php endif ?>
<p>This DASS 21 depression anxiety stress scale test evaluates the mental health state of an individual<br>if their suffering in depression, anxiety or stress that can interfere in their daily routine in life.</p>
<div class="wrap">
  
<div id="form-wrapper">
	<form action="/p/quote.php" method="GET">
<label class="statement">1. I found it hard to wind down.</label>		<div id="debt-amount-slider">        

			<input type="radio" name="debt-amount" id="1" value="1" name="group1" required>
			<label for="1" data-debt-amount="Never"></label>
			<input type="radio" name="debt-amount" id="2" value="2" name="group1" required>
			<label for="2" data-debt-amount="Sometimes"></label>
			<input type="radio" name="debt-amount" id="3" value="3" name="group1" required>
			<label for="3" data-debt-amount="Often"></label>
			<input type="radio" name="debt-amount" id="4" value="4" name="group1" required>
			<label for="4" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
        <br><br><br>
        <label class="statement">2. I was aware of dryness of my mouth.</label>		<div id="debt-amount-slider">
			<input type="radio" id="5" value="1" name="group2" required>
			<label for="5" data-debt-amount="Never"></label>
			<input type="radio" id="6" value="2" name="group2" required>
			<label for="6" data-debt-amount="Sometimes"></label>
			<input type="radio" id="7" value="3" name="group2" required>
			<label for="7" data-debt-amount="Often"></label>
			<input type="radio" id="8" value="4" name="group2" required>
			<label for="8" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
         
        
                <br><br><br>
        <label class="statement">3. I couldn’t seem to experience any positive feeling at all.</label>		<div id="debt-amount-slider">
			<input type="radio" id="9" value="1" name="group3" required>
			<label for="9" data-debt-amount="Never"></label>
			<input type="radio" id="10" value="2" name="group3" required>
			<label for="10" data-debt-amount="Sometimes"></label>
			<input type="radio" id="11" value="3" name="group3" required>
			<label for="11" data-debt-amount="Often"></label>
			<input type="radio" id="12" value="4" name="group3" required>
			<label for="12" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
        <br><br><br>
        <label class="statement">4. I experienced breathing difficulty.</label>		<div id="debt-amount-slider">
			<input type="radio" id="13" value="1" name="group4" required>
			<label for="13" data-debt-amount="Never"></label>
			<input type="radio" id="14" value="2" name="group4" required>
			<label for="14" data-debt-amount="Sometimes"></label>
			<input type="radio" id="15" value="3" name="group4" required>
			<label for="15" data-debt-amount="Often"></label>
			<input type="radio" id="16" value="4" name="group4" required>
			<label for="16" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
        <br><br><br>
        <label class="statement">5. I found it difficult to work up the initiative to do things.</label>		<div id="debt-amount-slider">
			<input type="radio" id="17" value="1" name="group5" required>
			<label for="17" data-debt-amount="Never"></label>
			<input type="radio" id="18" value="2" name="group5" required>
			<label for="18" data-debt-amount="Sometimes"></label>
			<input type="radio" id="19" value="3" name="group5" required>
			<label for="19" data-debt-amount="Often"></label>
			<input type="radio" id="20" value="4" name="group5" required>
			<label for="20" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
                <br><br><br>
        <label class="statement">6. I tended to over-react to situations.</label>		<div id="debt-amount-slider">
			<input type="radio" id="21" value="1" name="group6" required>
			<label for="21" data-debt-amount="Never"></label>
			<input type="radio" id="22" value="2" name="group6" required>
			<label for="22" data-debt-amount="Sometimes"></label>
			<input type="radio" id="23" value="3" name="group6" required>
			<label for="23" data-debt-amount="Often"></label>
			<input type="radio" id="24" value="4" name="group6" required>
			<label for="24" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                <br><br><br>
        <label class="statement">7. I experienced trembling (eg, in the hands).</label>		<div id="debt-amount-slider">
			<input type="radio" id="25" value="1" name="group7" required>
			<label for="25" data-debt-amount="Never"></label>
			<input type="radio" id="26" value="2" name="group7" required>
			<label for="26" data-debt-amount="Sometimes"></label>
			<input type="radio" id="27" value="3" name="group7" required>
			<label for="27" data-debt-amount="Often"></label>
			<input type="radio" id="28" value="4" name="group7" required>
			<label for="28" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
                        <br><br><br>
        <label class="statement">8. I felt that I was using a lot of nervous energy.</label>		<div id="debt-amount-slider">
			<input type="radio" id="29" value="1" name="group8" required>
			<label for="29" data-debt-amount="Never"></label>
			<input type="radio" id="30" value="2" name="group8" required>
			<label for="30" data-debt-amount="Sometimes"></label>
			<input type="radio" id="31" value="3" name="group8" required>
			<label for="31" data-debt-amount="Often"></label>
			<input type="radio" id="32" value="4" name="group8" required>
			<label for="32" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                        <br><br><br>
        <label class="statement">9. I was worried about situations in which I might panic and make a fool of myself.</label>		<div id="debt-amount-slider">
			<input type="radio" id="33" value="1" name="group9" required>
			<label for="33" data-debt-amount="Never"></label>
			<input type="radio" id="34" value="2" name="group9" required>
			<label for="34" data-debt-amount="Sometimes"></label>
			<input type="radio" id="35" value="3" name="group9" required>
			<label for="35" data-debt-amount="Often"></label>
			<input type="radio" id="36" value="4" name="group9" required>
			<label for="36" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
                                <br><br><br>
        <label class="statement">10. I felt that I had nothing to look forward to.</label>		<div id="debt-amount-slider">
			<input type="radio" id="37" value="1" name="group10" required>
			<label for="37" data-debt-amount="Never"></label>
			<input type="radio" id="38" value="2" name="group10" required>
			<label for="38" data-debt-amount="Sometimes"></label>
			<input type="radio" id="39" value="3" name="group10" required>
			<label for="39" data-debt-amount="Often"></label>
			<input type="radio" id="40" value="4" name="group10" required>
			<label for="40" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                                <br><br><br>
        <label class="statement">11. I found myself getting agitated.</label>		<div id="debt-amount-slider">
			<input type="radio" id="41" value="1" name="group11" required>
			<label for="41" data-debt-amount="Never"></label>
			<input type="radio" id="42" value="2" name="group11" required>
			<label for="42" data-debt-amount="Sometimes"></label>
			<input type="radio" id="43" value="3" name="group11" required>
			<label for="43" data-debt-amount="Often"></label>
			<input type="radio" id="44" value="4" name="group11" required>
			<label for="44" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                                <br><br><br>
        <label class="statement">12. I found it difficult to relax.</label>		<div id="debt-amount-slider">
			<input type="radio" id="45" value="1" name="group12" required>
			<label for="45" data-debt-amount="Never"></label>
			<input type="radio" id="46" value="2" name="group12" required>
			<label for="46" data-debt-amount="Sometimes"></label>
			<input type="radio" id="47" value="3" name="group12" required>
			<label for="47" data-debt-amount="Often"></label>
			<input type="radio" id="48" value="4" name="group12" required>
			<label for="48" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
                                        <br><br><br>
        <label class="statement">13. I felt down-hearted and blue.</label>		<div id="debt-amount-slider">
			<input type="radio" id="49" value="1" name="group13" required>
			<label for="49" data-debt-amount="Never"></label>
			<input type="radio" id="50" value="2" name="group13" required>
			<label for="50" data-debt-amount="Sometimes"></label>
			<input type="radio" id="51" value="3" name="group13" required>
			<label for="51" data-debt-amount="Often"></label>
			<input type="radio" id="52" value="4" name="group13" required>
			<label for="52" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                                        <br><br><br>
        <label class="statement">14. I was intolerant of anything that kept me from getting on with what I was doing.</label>		<div id="debt-amount-slider">
			<input type="radio" id="53" value="1" name="group14" required>
			<label for="53" data-debt-amount="Never"></label>
			<input type="radio" id="54" value="2" name="group14" required>
			<label for="54" data-debt-amount="Sometimes"></label>
			<input type="radio" id="55" value="3" name="group14" required>
			<label for="55" data-debt-amount="Often"></label>
			<input type="radio" id="56" value="4" name="group14" required>
			<label for="56" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                                        <br><br><br>
        <label class="statement">15. I felt I was close to panic.</label>		<div id="debt-amount-slider">
			<input type="radio" id="57" value="1" name="group15" required>
			<label for="57" data-debt-amount="Never"></label>
			<input type="radio" id="58" value="2" name="group15" required>
			<label for="58" data-debt-amount="Sometimes"></label>
			<input type="radio" id="59" value="3" name="group15" required>
			<label for="59" data-debt-amount="Often"></label>
			<input type="radio" id="60" value="4" name="group15" required>
			<label for="60" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                                        <br><br><br>
        <label class="statement">16. I was unable to become enthusiastic about anything.</label>		<div id="debt-amount-slider">
			<input type="radio" id="61" value="1" name="group16" required>
			<label for="61" data-debt-amount="Never"></label>
			<input type="radio" id="62" value="2" name="group16" required>
			<label for="62" data-debt-amount="Sometimes"></label>
			<input type="radio" id="63" value="3" name="group16" required>
			<label for="63" data-debt-amount="Often"></label>
			<input type="radio" id="64" value="4" name="group16" required>
			<label for="64" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                                        <br><br><br>
        <label class="statement">17. I felt I wasn’t worth much as a person.</label>		<div id="debt-amount-slider">
			<input type="radio" id="65" value="1" name="group17" required>
			<label for="65" data-debt-amount="Never"></label>
			<input type="radio" id="66" value="2" name="group17" required>
			<label for="66" data-debt-amount="Sometimes"></label>
			<input type="radio" id="67" value="3" name="group17" required>
			<label for="67" data-debt-amount="Often"></label>
			<input type="radio" id="68" value="4" name="group17" required>
			<label for="68" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                                        <br><br><br>
        <label class="statement">18. I felt that I was rather touchy.</label>		<div id="debt-amount-slider">
			<input type="radio" id="69" value="1" name="group18" required>
			<label for="69" data-debt-amount="Never"></label>
			<input type="radio" id="70" value="2" name="group18" required>
			<label for="70" data-debt-amount="Sometimes"></label>
			<input type="radio" id="71" value="3" name="group18" required>
			<label for="71" data-debt-amount="Often"></label>
			<input type="radio" id="72" value="4" name="group18" required>
			<label for="72" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                                        <br><br><br>
        <label class="statement">19. I was aware of the action of my heart in the absence of physical exertion.</label>		<div id="debt-amount-slider">
			<input type="radio" id="73" value="1" name="group19" required>
			<label for="73" data-debt-amount="Never"></label>
			<input type="radio" id="74" value="2" name="group19" required>
			<label for="74" data-debt-amount="Sometimes"></label>
			<input type="radio" id="75" value="3" name="group19" required>
			<label for="75" data-debt-amount="Often"></label>
			<input type="radio" id="76" value="4" name="group19" required>
			<label for="76" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                                                <br><br><br>
        <label class="statement">20. I felt scared without any good reason.</label>		<div id="debt-amount-slider">
			<input type="radio" id="77" value="1" name="group20" required>
			<label for="77" data-debt-amount="Never"></label>
			<input type="radio" id="78" value="2" name="group20" required>
			<label for="78" data-debt-amount="Sometimes"></label>
			<input type="radio" id="79" value="3" name="group20" required>
			<label for="79" data-debt-amount="Often"></label>
			<input type="radio" id="80" value="4" name="group20" required>
			<label for="80" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
		</div>
        
        
                                                <br><br><br>
        <label class="statement">21. I felt that life was meaningless.</label>		<div id="debt-amount-slider">
			<input type="radio" id="81" value="1" name="group21" required>
			<label for="81" data-debt-amount="Never"></label>
			<input type="radio" id="82" value="2" name="group21" required>
			<label for="82" data-debt-amount="Sometimes"></label>
			<input type="radio" id="83" value="3" name="group21" required>
			<label for="83" data-debt-amount="Often"></label>
			<input type="radio" id="84" value="4" name="group21" required>
			<label for="84" data-debt-amount="Always"></label>
			<div id="debt-amount-pos"></div>
        </div></form>
              </div>
            </div>
    </div>




  <div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>

  <footer>
    <div class="container">
          <div class="about footer-item">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright"><p>La Salle Avenue, Bacolod City 6100, Negros Occidental, Philippines | +63 34 434 6100<br>
            Ⓒ 2022 University of St. La Salle, Copyrights. All rights reserved.</p>
          </div>
        </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
</body>
</html>