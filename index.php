<?php

require 'backend/queryData.php';
require 'backend/generate.php';

// Generate about me entries
$aboutMeContent = aboutMeEntry(1);
$aboutMeContent .= aboutMeEntry(2);
$aboutMeContent .= aboutMeEntry(3);
$aboutMeContent = listContent($aboutMeContent);

// Generate project entries
$projectContent = projectEntry(1);
$projectContent .= projectEntry(2);
$projectContent .= projectEntry(3);
$projectContent = listContent($projectContent);

// Generate blog content
$blogContent = "<div class=\"col-lg-9 col-md-10 mx-auto text-center\">"
	. "<div class=\"card card-cascade\">"
		. "<div class=\"view overlay\">"
			. "<img class=\"card-img-top\" src=\"images/blog.jpg\">"
			. "<a href=\"https://blog.geraldwu.com/\">"
				. "<div class=\"mask rgba-white-slight\"></div>"
			. "</a>"
		. "</div>"
		. "<div class=\"card-body card-body-cascade text-center\">"
			. "<h4 class=\"card-title\"><strong>Gerald Wu's Blog</strong></h4>"
			. "<h6 class=\"font-weight-bold indigo-text py-2\">Musings of a Tech Enthusiast</h6>"
			. "<p class=\"card-text\">Just another blog for technological tinkering. Focused on custom-built keyboards, hardware mods, Linux setups, and more.<br>I like spending hours to improve my workflow by seconds.</p>"
		. "</div>"
	. "</div>";
$blogContent = sectionContent($blogContent);

// Generate contact form entries
$contactContent = contactEntry(1);
$contactContent .= contactEntry(2);
$contactContent .= contactEntry(3);
$contactContent = formContent($contactContent);

// Generate sections
$aboutMe = sectionEntry(1, $aboutMeContent, true);
$projects = sectionEntry(2, $projectContent, true);
$blog = sectionEntry(3, $blogContent, true);
$contact = sectionEntry(4, $contactContent, false);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<!-- Useless boilerplate garbage -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="theme-color" content="#4285F4" />
<title>Gerald Wu</title>
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
					<a class="nav-link" href="#intro">Home</a>
				</li>
				<li class="nav-item" id="aboutNav">
					<a class="nav-link" href="#<?php echo queryData("htmlID", "sections", 1); ?>">
						<?php echo ucfirst(queryData("htmlID", "sections", 1)); ?>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#<?php echo queryData("htmlID", "sections", 2); ?>">
						<?php echo ucfirst(queryData("htmlID", "sections", 2)); ?>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#<?php echo queryData("htmlID", "sections", 3); ?>">
						<?php echo ucfirst(queryData("htmlID", "sections", 3)); ?>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#<?php echo queryData("htmlID", "sections", 4); ?>">
						<?php echo ucfirst(queryData("htmlID", "sections", 4)); ?>
					</a>
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

		<?php
			echo $aboutMe;
			echo $projects;
			echo $blog;
			echo $contact;
		?>


	</div>

</main>
<!--Main layout-->

<!--Footer-->
<footer class="page-footer font-small">
	<div class="primary-color">
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
