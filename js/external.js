$(document).ready(function() {
	// Remove wave effect on intro image
	$(".view .intro").removeClass("waves-effect waves-light");
	// Open all external links in new tab
	$('a[href^=http').attr("target", "_blank");
	// Prepare the smooth scrolling collapsible navbar hack
	if(!$('.navbar-toggler').hasClass('collapsed')) {
		$('.navbar-toggler').addClass('collapsed');
	}
});

// Smooth scrolling for "read more" button
// See navbar smooth scrolling
$('.readmore').click(function() {
	var sectionTo = $(this).attr('href');
	$('html, body').animate({
		scrollTop: $(sectionTo).offset().top - 90
	}, 900, 'swing');
	if(!$("#aboutNav").hasClass('active')) {
		$('.navbar-nav li').removeClass('active');
		$("#aboutNav").addClass('active');
	}
});

// Smooth scrolling for navbar
$(document).ready(function () {
	// Run on any internal link click
	$('a[href^="#"]').on('click', function (e) {
		e.preventDefault();

		// I actually don't remember what this is for
		var target = this.hash,
			$target = $(target);

		// Smooth scroll to the target
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top - 90
		}, 900, 'swing', function () {
		});
	});
});

// Navbar graphics (active element, collapse on click)
$('.navbar-nav li').click(function(e) {
	// Only run if on same page (not a social link)
	var $this = $(this);
	if(!$this.hasClass('social')) {
		// Remove all active elements
		$('.navbar-nav li').removeClass('active');
		// Add active element to the button the user clicked
		if (!$this.hasClass('active')) {
			$this.addClass('active');
		}
		// If not already collapsed, collapse the navbar
		if(!$('.navbar-toggler').hasClass('collapsed')) {
			$('.navbar-toggler').click();
		}
		e.preventDefault();
	}
});

// Handle contact form email
function email() {
	$('#send-button').html('Send <i class="fa fa-circle-o-notch fa-spin ml-1"></i>');
	$.ajax({
		type: "POST",
		url: "backend/mail.php",
		data: {
			name: $('#name').val(),
			email: $('#email').val(),
			subject: $('#subject').val(),
			message: $('#message').val(),
			captcha: grecaptcha.getResponse()
		},
		success: function(response) {
			var status = "";
			if(response == 0) {
				status = "Email sent!";
			} else if(response == 1) {
				status = "Captcha failed! Please try again.";
			} else {
				status = "Failed to send email, please try again.";
			}
			$('#send-button').html('Send <i class="fa fa-paper-plane ml-1"></i>');
			$('#send-status').text(status);
			$('#contact-modal').modal();
		}
	});
}
