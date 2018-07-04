$(".view .mask").removeClass("waves-effect waves-light");

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

$(document).ready(function () {
	$('a[href^="#"]').on('click', function (e) {
		e.preventDefault();

		var target = this.hash,
			$target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top - 90
		}, 900, 'swing', function () {
		});
	});
});

$('.navbar-nav li').click(function(e) {
	var $this = $(this);
	$('.navbar-nav li').removeClass('active');
	if (!$this.hasClass('active')) {
		$this.addClass('active');
	}
	if(!$('.navbar-toggler').hasClass('collapsed')) {
		$('.navbar-toggler').click();
	}
	e.preventDefault();
});
