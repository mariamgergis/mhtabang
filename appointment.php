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
    <link rel="stylesheet" href="style_appoint.css">
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
            <center>
            <h2> Schedule an <em>Appointment</em></h2></center>  
<!-- Calendly inline widget begin --><div class="background">
<!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/mhtabang-1/mhtabang?hide_event_type_details=1&hide_gdpr_banner=1&text_color=1d3656&primary_color=89f3cd" style="min-width:520px;height:950px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->
<!-- Calendly badge widget end -->
    </div>
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