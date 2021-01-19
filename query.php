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
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<link
			href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
			rel="stylesheet"
		/>

		<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
		<link rel="stylesheet" href="css/animate.css" />

		<link rel="stylesheet" href="css/owl.carousel.min.css" />
		<link rel="stylesheet" href="css/owl.theme.default.min.css" />
		<link rel="stylesheet" href="css/magnific-popup.css" />

		<link rel="stylesheet" href="css/aos.css" />

		<link rel="stylesheet" href="css/ionicons.min.css" />

		<link rel="stylesheet" href="css/flaticon.css" />
		<link rel="stylesheet" href="css/icomoon.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div class="bg-top navbar-light">
			<div class="container">
				<div
					class="row no-gutters d-flex align-items-center align-items-stretch"
				>
					<div class="col-md-4 d-flex align-items-center py-4">
						<a class="navbar-brand" href="index.php"
							>Thakur College . <span>of Engineering& Technology</span></a
						>
					</div>
					<div class="col-lg-8 d-block">
						<div class="row d-flex">
							<div
								class="col-md d-flex topper align-items-center align-items-stretch py-md-4"
							>
								<div
									class="icon d-flex justify-content-center align-items-center"
								>
									<span class="icon-paper-plane"></span>
								</div>
								<div class="text">
									<span>Email</span>
									<span>tcet@thakureducation.org</span>
								</div>
							</div>
							<div
								class="col-md d-flex topper align-items-center align-items-stretch py-md-4"
							>
								<div
									class="icon d-flex justify-content-center align-items-center"
								>
									<span class="icon-phone2"></span>
								</div>
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
		<nav
			class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light"
			id="ftco-navbar"
		>
			<div class="container d-flex align-items-center px-4">
				<button
					class="navbar-toggler"
					type="button"
					data-toggle="collapse"
					data-target="#ftco-nav"
					aria-controls="ftco-nav"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="oi oi-menu"></span> Menu
				</button>
				<form action="#" class="searchform order-lg-last">
					<div class="form-group d-flex">
						<input type="text" class="form-control pl-3" placeholder="Search" />
						<button type="submit" placeholder="" class="form-control search">
							<span class="ion-ios-search"></span>
						</button>
					</div>
				</form>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
	        	<li class="nav-item"><a href="study.php" class="nav-link">Study</a></li>
	        	<li class="nav-item active"><a href="query.php" class="nav-link">Queries</a></li>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.20795" type="text/javascript"></script>

<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.20795" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.20795" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.20795" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5f6c4c83346ec05354558fe8"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.20795" />
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{
        width:690px;
        color:#cccccc !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/PREFERENCES STYLE/
    .form-all {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-header-group {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-label {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      max-width: 1110px;
      width: 100%;
	  margin: auto;
	  margin top: 5%;
	  color: #0d1128;


    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 14pxpx
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14pxpx
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14pxpx
    }
  
    .supernova {
      background-color: #3e3e3e;
    }
    .supernova body {
      background: transparent;
    }
  
    .supernova .form-all, .form-all {
      background-color: #4e4e4e;
      border: 1px solid transparent;
    }
  
    .form-all {
      color:
    }
    .form-header-group .form-header {
      color: #cccccc;
    }
    .form-header-group .form-subHeader {
      color: #cccccc;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #cccccc;
    }
    .form-sub-label {
      color: #e6e6e6;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #3e3e3e;
    }
  
    .form-line-error {
      overflow: hidden;
      transition: none;
      background-color: rgba(255, 50, 0, 0.6);
    }

    .form-line-error .form-error-message {
      background-color: #FF3200;
      clear: both;
      float: none;
    }

    .form-line-error .form-error-arrow {
      border-bottom-color: #FF3200;
    }

    .form-line-error input:not(#coupon-input),
    .form-line-error textarea,
    .form-line-error .form-validation-error {
      border: 1px solid #FF3200;
      .box-shadow(0 0 3px #FF3200);
    }
   
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
     background-color: #0d1128;;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /PREFERENCES STYLE//_INSPECT_SEPERATOR_/
    /* Injected CSS Code */
</style>

<form class="jotform-form" action="https://submit.jotform.com/submit/202802869927466/" method="post" name="form_202802869927466" id="202802869927466" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="202802869927466" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_3" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_3" class="form-header" data-component="header">
              What is it all about?
            </h2>
            <div id="subHeader_3" class="form-subHeader">
              To ask questions, please complete the form below.
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_4">
        <div id="cid_4" class="form-input-wide">
          <div id="text_4" class="form-html" data-component="text">
            <p><span style="color:#808080;"><strong><span style="font-size:medium;">Personal details and Identification</span></strong></span></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> Student ID Number: </label>
        <div id="cid_5" class="form-input-wide">
          <input type="text" id="input_5" name="q5_studentId" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_5" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_11">
        <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11"> Branch: </label>
        <div id="cid_11" class="form-input-wide">
          <input type="text" id="input_11" name="q11_branch11" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_11" />
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="first_6"> Full Name: </label>
        <div id="cid_6" class="form-input-wide">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_6" name="q6_fullName6[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_6 sublabel_6_first" />
              <label class="form-sub-label" for="first_6" id="sublabel_6_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="middle">
              <input type="text" id="middle_6" name="q6_fullName6[middle]" class="form-textbox" size="10" value="" data-component="middle" aria-labelledby="label_6 sublabel_6_middle" />
              <label class="form-sub-label" for="middle_6" id="sublabel_6_middle" style="min-height:13px" aria-hidden="false"> Middle Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_6" name="q6_fullName6[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_6 sublabel_6_last" />
              <label class="form-sub-label" for="last_6" id="sublabel_6_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9"> Full Address: </label>
        <div id="cid_9" class="form-input-wide">
          <textarea id="input_9" class="form-textarea" name="q9_fullAddress" cols="40" rows="6" data-component="textarea" aria-labelledby="label_9"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> E-mail: </label>
        <div id="cid_8" class="form-input-wide">
          <input type="email" id="input_8" name="q8_email" class="form-textbox validate[Email]" size="30" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_8" />
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_10">
        <div id="cid_10" class="form-input-wide">
          <div id="text_10" class="form-html" data-component="text">
            <hr />
            <p><span style="color:#808080;font-size:medium;"><strong>Tell us about your question</strong></span></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_15">
        <label class="form-label form-label-top form-label-auto" id="label_15" for="input_15"> Detailed description of query: </label>
        <div id="cid_15" class="form-input-wide">
          <textarea id="input_15" class="form-textarea" name="q15_detailedDescription" cols="40" rows="6" data-component="textarea" aria-labelledby="label_15"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_17">
        <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17"> Is there anything that you'd like to learn more? </label>
        <div id="cid_17" class="form-input-wide">
          <div class="form-single-column" role="group" aria-labelledby="label_17" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_17_0" name="q17_isThere[]" value="I want to know about the financial assistance in study." />
              <label id="label_input_17_0" for="input_17_0"> I want to know about the financial assistance in study. </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_17_1" name="q17_isThere[]" value="I want to know about residential/hostel facilities." />
              <label id="label_input_17_1" for="input_17_1"> I want to know about residential/hostel facilities. </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_17_2" name="q17_isThere[]" value="I want to know  about the internship programmes." />
              <label id="label_input_17_2" for="input_17_2"> I want to know about the internship programmes. </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_17_3" name="q17_isThere[]" value="I want to know  about the scholarship offered." />
              <label id="label_input_17_3" for="input_17_3"> I want to know about the scholarship offered. </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_17_4" name="q17_isThere[]" value="Other" />
              <label id="label_input_17_4" for="input_17_4"> Other </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_18">
        <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18"> Other: </label>
        <div id="cid_18" class="form-input-wide">
          <textarea id="input_18" class="form-textarea" name="q18_other" cols="40" rows="6" data-component="textarea" aria-labelledby="label_18"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:left" data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-none submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Ask Now!
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="202802869927466" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='202802869927466'] .si" + "mple" + "_spc");

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