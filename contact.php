<?php

error_reporting(E_ALL ^ E_NOTICE); ///// hide all notices from PHP

if(isset($_POST['submitted'])) {

    if(trim($_POST['yourName']) === '') {
        $nameError =  'Forgot your name!';
        $hasError = true;
    } else {
        $name = trim($_POST['yourName']);
    }


    if(trim($_POST['yourEmail']) === '')  {
        $emailError = 'Hey You Forgot to enter in your e-mail address!';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['yourEmail']))) {
        $emailError = 'Ooops, You entered an invalid email address!';
        $hasError = true;
    } else {
        $email = trim($_POST['yourEmail']);
    }

    if(trim($_POST['message']) === '') {
        $commentError = 'Uhh ooo, You forgot to enter a message!';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['message']));
        } else {
            $comments = trim($_POST['message']);
        }
    }

    if(!isset($hasError)) {

        $emailTo = 'obazechuck@gmail.com'; ///// YOUR email address /////
        $subject = 'Inquiry message from '.$name;
        $sendCopy = trim($_POST['sendCopy']);
        $body = "Name: $yourName \n\nEmail: $yourEmail \n\nMessage: $message";
        $headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        mail($emailTo, $subject, $body, $headers);

        ///// sets boolean value to TRUE /////
        $emailSent = true;
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Graphic and Web Design Portfolio of Chuck Obaze. ">
		<meta name="keywords" content="Graphic Design, Web Design, Web Development, Logo Design, Brochures, Magazines">
		<title>Contact | Chuck Obaze Designs</title>
		<link rel="shortcut icon" href="imgs/chuckobaze-favicon16-6.png"/>
		<link rel="shortcut icon" href="imgs/chuckobaze-favicon32-2.png"/>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/chuck-designs.css"/>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
		<link href='https://fonts.googleapis.com/css?family=Vast+Shadow|Londrina+Outline|Londrina+Shadow|Sonsie+One|Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600italic,600,700,700italic,800italic,900,900italic,800' rel='stylesheet' type='text/css'>
		<script src="js/modernizr.js"></script>
	</head>
	<body class="main-body">
		<div id="main-container"> <!-- Start Main Container -->

			<header class="main-header"> <!-- Start Main Header -->
				<a class="logo-link" href="index.html"><img src="imgs/chuck-obaze-logo-3.png" alt="Chuck Obaze Graphic and Web Design Logo"></a>
				<nav class="main-nav">
					<ul class="active-nav">
						<li class="home-nav"><a class="home-link" href="index.html">HOME</a></li>
						<li class="projects-nav"><a class="project-link" href="projects.html">PORTFOLIO</a></li>
						<li class="resume-nav"><a class="resume-link" href="resume.html">RESUME</a></li>
						<!--<li class="about-nav"><a class="about-link" href="about.html">ABOUT</a></li>-->
						<li class="contact-nav"><a style="border-bottom: solid #82cec4 0.3em;" class="contact-link" href="contact.html">CONTACT</a></li>
					</ul>
				</nav>

			</header> <!-- End Main Header -->

			<div class="contact-bg"></div>
			<section class="contact-home-container"> <!-- Start first container -->
				<div id="contact-home"> <!-- Start Section Home -->
					<h1>GET IN TOUCH</h1>
				</div> <!-- End Section Home -->
			</section> <!-- End first container -->

			<section id="contact-container"> <!-- Start fifth-container -->
				<div id="contact-me"> <!-- Start contact -->
					<h2>CONTACT ME<hr style="background-color:#f98348;"></h2>
					<p>If you need help, have a question, suggestion or want to hire me for a project, please feel free to contact me. Thanks</p>
					<div id="form-holder"> <!-- Start form holder -->
						<form id="get-in-touch" action="#" method="post" accept-charset="utf-8"> <!-- Start form -->

							<div class="entry-one"> <!-- Start entry one -->
								<input id="contactName" name="contactName" type="text" value="" tabindex="1" placeholder="Enter Your Name *">
							</div> <!-- End entry-one -->

							<div class="entry-two"> <!-- Start entry two -->
								<input id="email" name="email" type="text"  value="" tabindex="2" placeholder="Enter Your E-Mail *">
							</div> <!-- End entry-two -->

							<div class="entry-three"> <!-- Start entry three -->
								<textarea name="comments" id="commentsText" rows="8" cols="50" placeholder="Enter Your Message *" maxlength="100" tabindex="4"></textarea>
							</div> <!-- End entry-three -->

							<div> <!-- Start Submit -->
								<button name="submit" type="submit" class="subbutton">SEND MESSAGE</button>
								<input type="hidden" name="submitted" id="submitted" value="true" />
							</div> <!-- End Submit -->

						</form> <!-- End Form -->

					</div> <!-- End Form Holder -->

				</div> <!-- End Contact -->

			</section> <!-- end fifth-container -->

			<footer class="main-footer">
				<p>Copyright &copy; Chuck Obaze, 2015. All Rights Reserved</p>
			</footer>

		</div> <!-- END main-container -->

		<!-- Start jQuery Here -->
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/coba.js"></script>
		<script>
			$(document).ready(function(){

				 $(this).scrollTop(0);

				$(document.body).hide().fadeIn(1000);

				$(window).scroll(function(){

					if ($(window).scrollTop() > 1) {
						$('.main-header').css({ 'background-color': 'rgba(0, 0, 0, 0.6)'});
					} else {
						$('.main-header').css("background-color", "transparent");
					}

				});

				$(window).scroll(function(e){
				  parallax();
				});

				function parallax(){
				  var scrolled = $(window).scrollTop();
				  $('.contact-bg').css('top',-(scrolled*0.1)+'px');
				}
			});
		</script>
	</body>
</html>
