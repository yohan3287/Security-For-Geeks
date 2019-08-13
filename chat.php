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
<title>SecurityForGeeks - News - </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/news_post_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_post_responsive.css">
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
			<h1>Forum</h1>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Post Column -->

				<div class="col-lg-8">
					
					<div class="news_post_container">
						<?php
							include 'controller/connectDb.php';
								
							$forumID = $_GET['forumID'];

							$query = "SELECT * FROM Forum 
								WHERE ForumID = '$forumID'";
							$result = $db->query($query);
							$forum = $result->fetch_assoc()
						?>
						<!-- News Post -->
						<div class="news_post">
							<!-- <div class="news_post_image">
								<img src="images/news_1.jpg" alt="https://unsplash.com/@dsmacinnes">
							</div> -->
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_top d-flex flex-column align-items-center justify-content-center">
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<b><font size="5px"><?=$forum['ForumTitle']?></font></b><br>
										posted on : <?=$forum['ForumDatetime']?>
									</div>
									<!--
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">By J.Andrew.K</a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#">3 Comments</a></span>
									</div>
									-->
								</div>
							</div>

							<!-- <div class="news_post_quote">
								<p class="news_post_quote_text"><span>E</span>tiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies venena tis. Suspendisse fermentum sodales lacus, lacinia gravida elit.</p>
							</div> -->

							<!-- <p class="news_post_text" style="margin-top: 59px;">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies venenatis. Suspendisse fermentum sodales lacus, lacinia gravida elit dapibus sed. Cras in lectus elit. Maecenas tempus nunc vitae mi egestas venenatis. Aliquam rhoncus, purus in vehicula porttitor, lacus ante consequat purus, id elementum enim purus nec enim. In sed odio rhoncus, tristique ipsum id, pharetra neque. </p> -->
						</div>

					</div>
					
					<!-- Chats -->
					<div class="news_post_comments">
						<ul class="comments_list">
							
							<?php
								$query = "SELECT 
								CustomerFullname as cf,
								ChatDateTime as cdt, 
								ChatText as ct

									FROM Customer cu
									JOIN Chat ch ON cu.CustomerID = ch.CustomerID 
									JOIN Forum f ON f.ForumID = ch.ForumID
									WHERE ch.ForumID = '$forumID'";
								$result = $db->query($query);
								while($chat = $result->fetch_assoc()){
							?>

							<!-- Chat -->
							<li class="comment">
								<div class="comment_container d-flex flex-row">
									<!--
									<div>
										<div class="comment_image">
											<img src="images/comment_1.jpg" alt="">
										</div>
									</div>
									-->
									<div class="comment_content">
										<div class="comment_meta">
											<span class="comment_name"><?=$chat['cf']?></span>
											<span class="comment_separator">|</span>
											<span class="comment_date"><?=$chat['cdt']?></span>
											<!--
											<span class="comment_separator">|</span>
											<span class="comment_reply_link"><a href="#">Reply</a></span>
											-->
										</div>
										<p class="comment_text"><?=$chat['ct']?></p>
									</div>
								</div>
							</li>

							<?php
								}
							?>
						</ul>

					</div>

					<!-- Leave Comment -->

					<div class="leave_comment">
						<!--<div class="leave_comment_title">Leave a comment</div>-->

						<div class="leave_comment_form_container">
							<form action="controller/addChat.php?forumID=<?=$forumID?>" method="POST">
								<!-- <input id="comment_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
								<input id="comment_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required."> -->
								<textarea id="comment_form_message" class="text_field contact_form_message" name="message" placeholder="Comment" ></textarea>
								<button id="comment_send_btn" type="submit" class="comment_send_btn trans_200" value="Submit">send comment</button>
							</form>
						</div>
					</div>

				</div>

				<!-- Sidebar Column -->
				<!--
				<div class="col-lg-4">
					<div class="sidebar">

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Archives</h3>
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="#">Design Courses</a></li>
								<li class="sidebar_list_item"><a href="#">All you need to know</a></li>
								<li class="sidebar_list_item"><a href="#">Uncategorized</a></li>
								<li class="sidebar_list_item"><a href="#">About Our Departments</a></li>
								<li class="sidebar_list_item"><a href="#">Choose the right course</a></li>
							</ul>
						</div>


						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Latest posts</h3>
							</div>

							<div class="latest_posts">
								
								
								<div class="latest_post">
									
									<div class="latest_post_title"><a href="news_post.php">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By J.Andrew.K</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>

								
								<div class="latest_post">
									
									<div class="latest_post_title"><a href="news_post.php">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By J.Andrew.K</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>

								
								<div class="latest_post">
									
									<div class="latest_post_title"><a href="news_post.php">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By J.Andrew.K</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>

							</div>

						</div>

						

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Tags</h3>
							</div>
							<div class="tags d-flex flex-row flex-wrap">
								<div class="tag"><a href="#">Course</a></div>
								
								<div class="tag"><a href="#">FAQ</a></div>
								<div class="tag"><a href="#">Teachers</a></div>
								
							</div>
						</div>

					</div>
				</div>
				-->
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<!-- <div class="newsletter">
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
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Palbatu 1 Street, South Jakarta
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									081808436745
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
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
<script src="js/news_post_custom.js"></script>

</body>
</html>