<?php include ('controllerUserData.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="signup_style.css">
    
     <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style_index.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body>



  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">

          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="https://i.ibb.co/Nn5qZKW/logo.png">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="signup-user.php">Sign Up</a></li> 
              <li class="scroll-to-section"><div class="main-button-hover"><a href="signup-user.php">LOG IN</a></div></li> 
            </ul>        

            <!-- ***** Menu End ***** -->
          </nav>
      </div>

  </header>
  <!-- ***** Header Area End ***** -->
  <div class="main-banner" id="top">
      

      
    <div class="container">
          <div class="row">
                <div class="item header-text">

                  
                    </div>
                  </div>
                </div>
                    </div>
<body>
    <div class="container"><br><br>
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">Please provide your information below.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                     <div class="form-group">
                        <input class="form-control" type="number" name="idnumber" placeholder="Id Number" required value="<?php echo $idnumber ?>">
                    </div>
                     <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="Username" required value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="fullname" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="address" placeholder="Address" required>
                    </div>
        <div class="form-group">             
        <select class="form-control" id="college" name="college">
            <optgroup label="Select Your College Department">
            <option value="College of Engineering and Technology">College of Engineering and Technology</option>
            <option value="College of Business and Accountancy">College of Business and Accountancy</option>
            <option value="College of Arts and Sciences">College of Arts and Sciences</option>
            <option value="College of Nursing">College of Nursing</option>
            <option value="College of Education">College of Education</option>
        </optgroup>     
	   </select>
       </div>
       <div class="form-group">
            <select class="form-control" id="year" name="year">
            <optgroup label="Select Your Year Level">
              <option value="1st Year">1st Year</option>
              <option value="2nd Year">2nd Year</option>
              <option value="3rd Year">3rd Year</option>
              <option value="4th Year">4th Year</option>
              <option value="5th Year">5th Year</option>
            </optgroup>
          </select>
        </div>           
                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    
                    <div class="link login-link text-center">
                    <input type="checkbox" id="checkbox" value="interest_design" name="checkbox"> I 
                    agree to the <a href="terms.html">Terms and Conditions</a> and accept the <a href="privacy.html">Privacy Policy</a>
                    </div>
                    
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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