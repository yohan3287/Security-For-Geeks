<!DOCTYPE html>
<html lang="en">
<head>
<title>SecurityForGeeks - Courses -</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>
<body>

<div class="super_container">

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
							session_start();
							session_regenerate_id();
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
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.php">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.php">Courses</a></li>
					<li class="menu_item menu_mm"><a href="Login.php">Login</a></li>
					<li class="menu_item menu_mm"><a href="register-optional.php">Register</a></li>
					<li class="menu_item menu_mm"><a href="contact.php">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">SecurityForGeeks</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/onlinecourse.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Courses</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular Courses</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_3.jpg" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="coursepage_forensics.php">Forensics</a></div>
							<div class="card-text">Learn Digital Forensic in advanced methods</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/yohankecil.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Yohan, <span>Author</span></div>
							
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_1.jpg" alt="">
						<div class="card-body text-center">
							<div class="card-title">COMING SOON<BR>Secure Web Programming</div>
							<div class="card-text">Learn how to develop secure web</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/foto andrew2.jpg" alt="">
							</div>
							<div class="course_author_name">J.Andrew.K, <span>Author</span></div>
						
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_2.jpg" alt="">
						<div class="card-body text-center">
							<div class="card-title">COMING SOON<BR>Cryptography</div>
							<div class="card-text">Learn how to secure your data</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/jojokecil.png" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Yonathan Wieliem, <span>Author</span></div>
							
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<!-- <div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_3.jpg" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">Advanced Photoshop</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div> -->

				<!-- Popular Course Item -->
				<!-- <div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_4.jpg" alt="https://unsplash.com/@kellitungay">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">A complete guide to design</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div> -->

				<!-- Popular Course Item -->
				<!-- <div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_5.jpg" alt="https://unsplash.com/@claybanks1989">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">Beginners guide to HTML</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div> -->

				<!-- Popular Course Item -->
				<!-- <div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_6.jpg" alt="https://unsplash.com/@element5digital">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">Advanced Photoshop</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div> -->

				<!-- Popular Course Item -->
				<!-- <div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_7.jpg" alt="https://unsplash.com/@gaellemm">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">A complete guide to design</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div> -->

				<!-- Popular Course Item -->
				<!-- <div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_8.jpg" alt="https://unsplash.com/@juanmramosjr">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">Beginners guide to HTML</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div> -->

				<!-- Popular Course Item -->
				<!-- <div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_9.jpg" alt="https://unsplash.com/@kimberlyfarmer">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">Advanced Photoshop</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div>

			</div>
		</div>		
	</div> -->

	<!-- Footer -->
</br><br>
	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->
<!-- 
			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to our newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div> -->

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

						<p class="footer_about_text">Just a Cyber Security Learning Platform. We learn and contribute to Cyber Security Industries </p>

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
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>