<?php

require 'backend/queryData.php';

// Captcha
$ini_array = parse_ini_file("backend/config.ini");
$publickey = $ini_array["publickey"];


function aboutMeEntry($id) {
	$table = "aboutme";
	$div = "<div class=\"col-md-4 mb-1\">";
	$div .= "<i class=\"fa fa-" . queryData("icon", $table, $id) . " fa-4x blue-text\"></i>";
	$div .= "<h4 class=\"mt-4 font-weight-bold\">" . queryData("title", $table, $id) . "</h4>";
	$div .= "<h6 class=\"grey-text\">" . queryData("subtitle", $table, $id) . "</h6>";
	$div .= "<p>" . queryData("description", $table, $id) . "</p>";
	$div .= "</div>";
	echo $div;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<!-- Useless boilerplate garbage -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="theme-color" content="#4285F4" />
<title>Gerald Wu's Portfolio</title>
<link rel="shortcut icon" href="favicon.ico" />

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

<!-- Emoji CSS -->
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

<!-- Cerebral CSS -->
<link rel="stylesheet" href="css/style.css">

<!-- Google reCAPTCHA -->
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

<!--Main Navigation-->
<header>

	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

		<!-- Navbar brand -->
		<!--<a class="navbar-brand" href="#">GeraldWu.com</a>-->

		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Collapsible content -->
		<div class="collapse navbar-collapse" id="mainNav">

			<!-- Links -->
			<ul class="navbar-nav mr-auto smooth-scroll">
				<li class="nav-item active">
					<a class="nav-link" href="#intro">Home
				</a>
				</li>
				<li class="nav-item" id="aboutNav">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#projects">Projects</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>


			</ul>

			<ul class="navbar-nav nav-flex-icons">
				<li class="nav-items ml-2 social">
					<a href="https://github.com/98WuG/" class="nav-link white-text"><i class="fa fa-github"></i></a>
				</li>
				<li class="nav-items ml-2 social">
					<a href="https://linkedin.com/in/98wug/" class="nav-link white-text"><i class="fa fa-linkedin"></i></a>
				</li>
			</ul>
		</div>
		<!-- Collapsible content -->

	</nav>
	<!--/.Navbar-->

	<!--Mask-->
	<div id="intro" class="view">

		<div class="mask rgba-black-strong intro">

			<div class="container-fluid d-flex align-items-center justify-content-center h-100">

				<div class="row d-flex justify-content-center text-center">

					<div class="col-md-12">

						<!-- Heading -->
						<h2 class="display-3 font-weight-bold white-text pt-5 mb-3">Gerald Wu</h2>

						<!-- Divider -->
						<hr class="hr-light">

						<!-- Description -->
						<h4 class="white-text">Software Development / IT</h4>
						<h6 class="white-text mb-4">Scala, Java, C++, Webdev / RHEL7</h6>
						<button type="button" class="btn btn-outline-white readmore" href="#about">About Me</button>

					</div>

				</div>

			</div>

		</div>

	</div>
	<!--/.Mask-->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="mt-5">
	<div class="container">

		<section id="about" class="text-center">

			<h2 class="mb-2 font-weight-bold">Hi, I'm Gerald!</h2>

			<div class="row d-flex justify-content-center mb-3">
				<div class="col-md-8">
					<p class="subtitle grey-text">Here's a little bit about me <i class="em em-smiley"></i></p>
				</div>
			</div>

			<div class="row list">
				<?php
					aboutMeEntry(1);
					aboutMeEntry(2);
					aboutMeEntry(3);
				?>
			</div>

		</section>

		<hr class="my-5">

		<section id="projects" class="text-center">

			<h2 class="mb-2 font-weight-bold">My Projects</h2>

			<div class="row d-flex justify-content-center mb-3">
				<div class="col-md-8">
					<p class="subtitle grey-text">Just a few projects I've worked on. Click on an image to learn more.</p>
				</div>
			</div>

			<div class="row list">
				<div class="col-lg-4 col-md-12 mb-4">
					<div class="view-overlay z-depth-1-half">
						<a href="https://github.com/98WuG/QuantumEvolution">
							<img src="./images/quantum.jpg" class="img-fluid" alt="">
						</a>
					</div>

					<h4 class="mt-4 font-weight-bold">Quantum Mechanical Wave Function Propagation</h4>
					<h6 class="grey-text">Processing</h6>
					<p class="grey-text">A program to evolve arbitrary initial states through time for the one-dimensional Schrodinger Equation and Wave Equation in the absence of a potential field. Highly optimized to run in <b>real time</b>. No pre-rendering. Accurate to millions of timesteps before runaway error propagation. Written in Processing (a fork of Java with a focus on real-time graphing), with a small shell script launcher.
				</div>

				<div class="col-lg-4 col-md-6 mb-4">
					<div class="view-overlay z-depth-1-half">
						<a href="https://github.com/98WuG/SeniorResearch">
							<img src="./images/packing.jpg" class="img-fluid" alt="">
						</a>
					</div>

					<h4 class="mt-4 font-weight-bold">An Approximate Solution to the Packing Problem</h4>
					<h6 class="grey-text">C++ / Shell</h6>
					<p class="grey-text">This program provides an approximate, polynomial time solution to the classic NP-hard packing problem. Implemented using the sorting-first greedy approach to packing. Includes a detailed report showcasing results (typeset in LaTeX). Writte in C++, with a shell script helper for initalization and final visualization.
				</div>

				<div class="col-lg-4 col-md-6 mb-4">
					<div class="view-overlay z-depth-1-half">
						<a href="https://github.com/98WuG/Authorize.Net-Web">
							<img src="./images/payment.jpg" class="img-fluid" alt="">
						</a>
					</div>

					<h4 class="mt-4 font-weight-bold">PHP Implementation of Authorize.Net Payments</h4>
					<h6 class="grey-text">PHP / JQuery</h6>
					<p class="grey-text">An implementation of Authorize.Net's API in PHP that allows merchants to store payment methods without any sensitive information hitting the merchant's database, thereby exempting them from tedious PCI compliance. These may also be charged at a later date. Responsive front-end design with mdbootstrap and flexible backend written in PHP.
				</div>
			</div>
		</section>

		<hr class="my-5">

		<section id="contact">
			<h2 class="font-weight-bold text-center">Contact Me</h2>

			<div class="row d-flex justify-content-center mb-3">
				<div class="col-md-8 text-center">
					<p class="subtitle grey-text">Let me know you're interested!</p>
				</div>
			</div>

			<!--Grid column-->
			<div class="col-lg-9 mx-auto col-md-12 mb-5">
				<!-- Form contact -->
				<form action="javascript:email()">
					<div class="md-form form-sm"> <i class="fa fa-user prefix grey-text"></i>
						<input type="text" id="name" class="form-control form-control-sm" required />
						<label for="form3">Name</label>
					</div>
					<div class="md-form form-sm"> <i class="fa fa-envelope prefix grey-text"></i>
						<input type="email" id="email" class="form-control form-control-sm" required />
						<label for="form2">Email</label>
					</div>
					<div class="md-form form-sm"> <i class="fa fa-tag prefix grey-text"></i>
						<input type="text" id="subject" class="form-control form-control-sm" required />
						<label for="form34">Subject</label>
					</div>
					<div class="md-form form-sm"> <i class="fa fa-pencil prefix grey-text"></i>
						<textarea type="text" id="message" class="md-textarea form-control form-control-sm" rows="4" required></textarea>
						<label for="form8">Message</label>
					</div>
					<center>
						<div class="g-recaptcha" data-sitekey="<?php echo $publickey ?>"></div>
					</center>
					<div class="text-center mt-2">
						<button type="submit" class="btn btn-primary" id="send-button">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
					</div>
				</form>
				<!-- Form contact -->
			</div>
			<!--Grid column-->

		</section>
	</div>

</main>
<!--Main layout-->

<!--Footer-->
<footer class="page-footer font-small">
	<div class="blue">
		<div class="container">
			<div class="row py-4 d-flex align-items-center">
				<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
					<h6 class="mb-0 white-text">Get connected on social media!</h6>
				</div>

				<div class="col-md-6 col-lg-7 text-center text-md-right">
					<a href="https://github.com/98WuG/" class="gh-ic ml-0">
						<i class="fa fa-github white-text mr-4"></i>
					</a>
					<a href="https://www.linkedin.com/in/98wug/" class="li-ic">
						<i class="fa fa-linkedin white-text mr-lg-4"></i>
					</a>
				</div>
			</div>
		</div>
	</div>

</footer>
<!--Footer-->

<div class="modal fade bottom" id="not-implemented-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-frame modal-bottom" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row d-flex justify-content-center align-items-center">
					<p class="mx-3 pt-3 pr-2">Sorry, this isn't implemented yet! Check back later <i class="em em-smiley" style="font-size:11px"></i></p>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade bottom" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="contact-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-frame modal-bottom" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row d-flex justify-content-center align-items-center">
					<p class="mx-3 pt-3 pr-2" id="send-status">Failed to send message!</p>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer-copyright py-3 white-text text-center blue darken-4">
	&copy; Copyright 2018 Gerald Wu
</div>


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>



<script type="text/javascript" src="js/min.js">
</script>

</body>

</html>
