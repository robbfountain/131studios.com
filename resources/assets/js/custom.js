$(document).ready(function() {
	function parallax(){
    var scrolled = $(window).scrollTop();
    $('header').css('top', -(scrolled * 0.2) + 'px');
	}

	$(window).scroll(function(e){
    parallax();
});
});


