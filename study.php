<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
	header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>College Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	<div class="bg-top navbar-light">
	  <div class="container">
		  <div class="row no-gutters d-flex align-items-center align-items-stretch">
			  <div class="col-md-4 d-flex align-items-center py-4">
				  <a class="navbar-brand" href="index.php">Thakur College . <span>of Engineering& Technology</span></a>
			  </div>
			  <div class="col-lg-8 d-block">
				  <div class="row d-flex">
					  <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
						  <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						  <div class="text">
							  <span>Email</span>
							  <span>tcet@thakureducation.org</span>
						  </div>
					  </div>
					  <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
						  <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						  <div class="text">
							  <span>Call</span>
							  <span>Call Us: + 91 9555542222</span>
						  </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
							<p class="mb-0">
								<a href="erp.php"
									class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
									<span><img
									src="https://img.icons8.com/metro/26/000000/guest-male.png">
								<?php echo "Welcome ". $_SESSION['username']?></span>
								</a>
							</p>
						</div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
	        	<li class="nav-item active"><a href="study.php" class="nav-link">Study</a></li>
	        	<li class="nav-item"><a href="query.php" class="nav-link">Queries</a></li>
	        	<li class="nav-item"><a href="community.php" class="nav-link">Community</a></li>
	        	<li class="nav-item"><a href="library.php" class="nav-link">Library</a></li>
	        	
	        	 
			  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
			  <li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Courses</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Courses <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row">
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/images.jpeg);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mrs.Prachi Janroa</span>
								
								
							</p>
							<h3><a href="#">Data Structure</a></h3>
							<p><ul><a href="download folder/"> Introduction to Data Structure</a></ul><ul><a href="download folder/"> Stacks and Queues</a></ul><ul><a href="download folder/"> Linked List</a></ul><ul><a href="download folder/"> Introduction to Non Linear Data Structure</a></ul><ul><a href="download folder/">Graphs & Searching and Sorting</a></ul></p>
						
							
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/unnamed.png);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr.Vikash Mishra</span>
								
								
							</p>
							<h3><a href="#">Mathematics III (Applied)</a></h3>
							<p><ul><a href="download folder/Module 1 AM III COMP 2020-21.pdf"> Introduction to Set Theory and Proofing Techniques</a></ul><ul><a href="download folder/Module 2 AM III comp 2020-21 .pdf"> Logic & Modular Arithmetic</a></ul><ul><a href="download folder/">Graph Technology</a></ul><ul><a href="download folder/">Relation and Funtion</a></ul><ul><a href="download folder/"> Algebric Structure</a></ul></p>
							
						</div>
					</div>+++
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/img.png);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr.Anand Khandare</span>
								
								
							</p>
							<h3><a href="#">Database Management System</a></h3>
							<p><ul><a href="downlaod folder/dbms 1" >Introduction to Database Concept</a></ul><ul><a href="download folder/dbms 2.pdf"> ER MODEL,Relational Model and Extended ER Model</a></ul><ul><a href="download folder/dbms 3.pdf"> Introduction to Structured Query Language(SQL)</a></ul><Ul><a href="download folder/"> Advanced SQL with Integrity,Security and Authorization</a></Ul><ul><a href="download folder/"> Relational Database Design &Transaction, Recovery and Concurrecy Control</a></ul></p>
							
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/Dhaancha-THumbnail-1.png);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr.Zahir Aalam</span>
								
							</p>
							<h3><a href="#">Digital Logic Design & Analysis</a></h3>
							<p><ul><a href="download folder/Module 1 DLDA.pdf"> System and Codes</a></ul><ul><a href="download folder/Module 2 DLDA.pdf"> Boolean Algebra &Logic Gates</a></ul><ul><a href="download folder/Module 3 DLDA.pdf"> Digital Logic Families</a></ul> 
							<a href="download folder/">	Analysis and Design of Combinational Logic</a></ul><ul><a href="download folder/"> Latches and flip flops</a></ul><ul><a href="download folder/"> Counter and Shift register</a></ul></p>
							

							
						</div>
					</div>

					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/images\ \(1\).jpeg);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mrs.Lydia Wiselin</span>
								
							</p>
							<h3><a href="#">Computer Organization & Architecture</a></h3>
							<p><ul><a href="download folder/Module 1 COA.pdf"> Introduction of Computer Organization and Architecture</a></ul><ul><a href="download folder/Module 2 COA.pdf"> Representation and Arithmetic Algorithm</a></ul><ul><a href="download folder/Module 3 COA.pdf"> Unit Design</a></ul><ul><a href="download folder/" >Organization</a></ul><ul><a href="download folder/">I/O Organization</a></ul><ul><a href="download folder/">  parallel processing</a></ul></p>
							
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/images\ \(2\).jpeg);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr. Manish Rana</span>
								
							</p>
							<h3><a href="#">Environmental Studies</a></h3>
							<p><ul><a href="download folder/">Concept of Environmental Science</a></ul><ul><a href="download folder/"> Natural Resourses , Biodiversity and its conservation</a></ul><ul><a href="download folder/">Environmental Pollution</a></ul><ul><a href="download folder/"> Environmental Biotechnology</a></ul><ul><a href="download folder/"> Social Issues and Environment</a></ul><ul><a href="download folder/" >Environmental Monitoring</a></ul></p>
							
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
				</div>
			</div>
		</section>

		
		<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text"> A-Block, Thakur
										Educational Campus, Shyamnarayan Thakur Marg, Thakur Village, Kandivali East,
										Mumbai, Maharashtra 400101</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+91
											9555542222</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">tcet@thakureducation.org</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2">Recent Blog</h2>
						<div class="block-21 mb-4 d-flex">
							<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
							<div class="text">
								<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a>
								</h3>
								<div class="meta">

								</div>
							</div>
						</div>
						<div class="block-21 mb-5 d-flex">
							<a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
							<div class="text">
								<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a>
								</h3>
								<div class="meta">

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-5 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2">Subscribe Us!</h2>
						<form action="#" class="subscribe-form">
							<div class="form-group">
								<input type="text" class="form-control mb-2 text-center"
									placeholder="Enter email address">
								<input type="submit" value="Subscribe" class="form-control submit px-3">
							</div>
						</form>
					</div>
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						
						Copyright &copy;
						<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> by <a
							href="https://www.tcetmumbai.in" target="_blank">TCET</a>
						
					</p>
				</div>
			</div>
		</div>
	</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>