$(document).ready(function(){	
$(window).scroll(function(){var o=$(window).scrollTop();o>=1?$(".main_header").addClass("fixed"):$(".main_header").removeClass("fixed")});
$('[data-toggle="tooltip"]').tooltip();
//
$('.main_header .navbar-toggle').click(function() {
        $('.bs-bottom-navbar-collapse').toggleClass('active');
		$(this).toggleClass('closed');
		$('html').toggleClass('active');
    });
//
$('.toggle-close').click(function() {
        $('.bs-bottom-navbar-collapse').toggleClass('active');
		$('.bottom_nav .navbar-toggle').toggleClass('closed');
		$('html').toggleClass('active');
    });
});  

//	
wow=new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0}),wow.init();
