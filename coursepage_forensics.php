<?php
	session_start();
	session_regenerate_id();

	if(!isset($_SESSION['userID'])){
		header("Location: loginform.php?error= Login first ! ");
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SecurityForGeeks - Forensics -</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="styles/coursepage.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">

</head>
<body>


  <!-- header!!-->
  <!-- <div class="super_container"> -->

      <!-- Header -->
    
      <header class="header d-flex flex-row">
          <div class="header_content d-flex flex-row align-items-center">
            <!-- Logo -->
            <div class="logo_container">
              <div class="logo">
                <img src="images/logos.png" alt="">
              
              </div>
            </div>
            
            <!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
                <ul class="main_nav_list">
						<li class="main_nav_item"><a href="index.php">HOME</a></li>
						<li class="main_nav_item"><a href="about.php">ABOUT US</a></li>
						<li class="main_nav_item"><a href="courses.php">COURSES</a></li>

						<?php
							if(isset($_SESSION['userID'])){
						?>

						<li class="main_nav_item"><a href="forum.php">FORUM</a></li>

						<?php
							}
							else{
						?>

						<li class="main_nav_item"><a href="register-optional.php">REGISTER</a></li>
						<li class="main_nav_item"><a href="loginform.php">SIGN IN</a></li>

						<?php
							}
						?>

						<li class="main_nav_item"><a href="memberplan.php">MEMBERSHIP</a></li>
						<li class="main_nav_item"><a href="contact.php">CONTACT US</a></li>
							<!-- Logout -->
						<?php
							
							if(isset($_SESSION['userID'])){
						?>
                        <li class="main_nav_item"><a href="profile.php">PROFILE</a></li>
						<li class="main_nav_item"><a href="logout.php">LOGOUT</a></li>

						<?php
							}
						?>
					</ul>
				</div>
			</nav>
          </div>
          <!-- Copy this to print user's Full name -->
		<?php
		if (isset($_SESSION['userID'])){
		?>
		<br><br>&nbsp;&nbsp;&nbsp; Hello,  <?=$_SESSION['Fullname']?>
		<?php
		}
		?>
          <!-- <div class="header_side d-flex flex-row justify-content-center align-items-center">
            <img src="images/phone-call.svg" alt="">
            <span>+62 81808436745</span>
          </div> -->
      
          <!-- Hamburger -->
          <div class="hamburger_container">
            <i class="fas fa-bars trans_200"></i>
          </div>
      
        </header>

<!--Video + Teks -->
<div class="container text-center">
          <h1>Forensics</h1>
          <div class = "row">
          <div class= "col-md-4">
          <img src="images/digital_forensics_slide_1.jpg" class="img-fluid" data-toggle="modal" data-target="#video1">
          <img src="images/play.png" class="play-btn"  >
</div>
    <div class= "col-md-4">
    <img src="images/digital_forensics_slide_1.jpg" class="img-fluid" data-toggle="modal" data-target="#video2">
    <img src="images/play.png" class="play-btn"  >
</div>
   
<div class= "col-md-4">
    <img src="images/digital_forensics_slide_1.jpg" class="img-fluid" data-toggle="modal" data-target="#video3">
    <img src="images/play.png" class="play-btn"  >

</div>
</div>
  </div>
      </div>
          </div>
    
          <div class="modal fade" id="video1">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  
                  <div class="modal-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/hOtZhNb4TKg" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               
          
                </div>
                  
                </div>
              </div>
            </div>
            <div class="modal fade" id="video2">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    
                    <div class="modal-body">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/hOtZhNb4TKg" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 
            
                  </div>
                    
                  </div>
                </div>
              </div>
              <div class="modal fade" id="video3">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      
                      <div class="modal-body">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/hOtZhNb4TKg" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
              
                    </div>
                      
                    </div>
                  </div>
                  </div>
                  <br><br><br>
                  <footer class="footer">

                    <div class="container text-center"
                    <font color = "white"><h2> Forensic Training</h2></font>
                       <center><font color = "white"><h1><a href="latihanforensik.php"> Train yourself in here!</h1></font></center>
                    </div>
                        <div class="container">
                        
                       

                      
                
                            <!-- Footer Content -->
                
        <div class="footer_content">
            <div class="row">

                                
                
             <!-- Footer Column - About -->
                <div class="col-lg-3 footer_col">
                <!-- Logo -->
                    <div class="logo_container">
                        <div class="logo">
                            <img src="images/logos.png" alt="">
                        </div>
                    </div>
                    <p class="footer_about_text" style="color:white">Just a Cyber Security Learning Platform. We learn and contribute to Cyber Security Industries </p>

                </div>
                
                                    <!-- Footer Column - Menu -->
                
                                    <div class="col-lg-3 footer_col">
                                        <div class="footer_column_title">Menu</div>
                                        <div class="footer_column_content">
                                            <ul>
                                                <li class="footer_list_item"><a href="index.php">Home</a></li>
                                                <li class="footer_list_item"><a href="about.php">About Us</a></li>
                                                <li class="footer_list_item"><a href="courses.php">Courses</a></li>
                                                <li class="footer_list_item"><a href="forum.php">Forum</a></li>
                                                <li class="footer_list_item"><a href="contact.php">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                
                                    <!-- Footer Column - Usefull Links -->
                
                                    <div class="col-lg-3 footer_col">
                                        <div class="footer_column_title">Useful Links</div>
                                        <div class="footer_column_content">
                                            <ul>
                                                <li class="footer_list_item"><a href="#">Testimonials</a></li>
                                                <li class="footer_list_item"><a href="#">FAQ</a></li>
                                                <li class="footer_list_item"><a href="#">Community</a></li>
                                                <!-- <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                                                <li class="footer_list_item"><a href="#">Tuitions</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                
                                    <!-- Footer Column - Contact -->
                
                                    <div class="col-lg-3 footer_col">
                                        <div class="footer_column_title">Contact</div>
                                        <div class="footer_column_content">
                                            <ul>
                                                <li class="footer_contact_item">
                                                    <div class="footer_contact_icon">
                                                        <img src="images/location.png" alt="https://www.flaticon.com/authors/lucy-g">
                                                    </div>
                                                    Palbatu 1 Street, South Jakarta
                                                </li>
                                                <li class="footer_contact_item">
                                                    <div class="footer_contact_icon">
                                                        <img src="images/telephone.png" alt="https://www.flaticon.com/authors/lucy-g">
                                                    </div>
                                                    081808436745
                                                </li>
                                                <li class="footer_contact_item">
                                                    <div class="footer_contact_icon">
                                                        <img src="images/mail.png" alt="https://www.flaticon.com/authors/lucy-g">
                                                    </div>securegeeks24@gmail.com
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                
                                </div>
                            </div>
                
                            <!-- Footer Copyright -->
                
                            <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                                <div class="footer_copyright" style="
                                font-style: White;
                                color: white;">
                                    Copyright 2019&copy; SecurityForGeeks <!-- <i class="fa fa-heart" aria-hidden="true"></i> -->
                                </div>
                                <div class="footer_social ml-sm-auto">
                                    <ul class="menu_social">
                                        <!-- <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                
                        </div>
                    </footer>
                </div>
</body>
</html>