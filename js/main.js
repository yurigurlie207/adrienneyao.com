$(document).ready(function() {

	thankyou();

	/* always refresh screen on resize */
	$(function($){
	var windowWidth = $(window).width();

	$(window).resize(function() {
	    if(windowWidth != $(window).width()){
	     location.reload();
	    return;
	    }

	});
	});


  
    // hiding the fixed nav for mobile on scroll
    // https://medium.com/@mariusc23/hide-header-on-scroll-down-show-on-scroll-up-67bbaae9a78c#.5pgh2yitp
    var didScroll;
    var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $("header").outerHeight();

	// on scroll, let the interval function know the user has scrolled
	$(window).scroll(function(event){
	  didScroll = true;
	});
	// run hasScrolled() and reset didScroll status
	setInterval(function() {
	  if (didScroll) {
	    hasScrolled();
	    didScroll = false;
	  }
	}, 250);


 	function hasScrolled() {

	  	var st = $(this).scrollTop();

	  	// If current position > last position AND scrolled past navbar...
		if (st > lastScrollTop && st > navbarHeight){
		  // Scroll Down
		  $("header").removeClass("nav-down").addClass("nav-up");
		  // $(".menu").removeClass("nav-down").addClass("nav-up");

		} 
		else {
		  // Scroll Up
		  // If did not scroll past the document (possible on mac)...
		  if(st + $(window).height() < $(document).height()) { 
		    $("header").removeClass("nav-up").addClass("nav-down");
		    // $(".menu").removeClass("nav-up").addClass("nav-down");
		  }
		}

		lastScrollTop = st;
	}

	// NAVIGATION SMOOTH SCROLLING
	$.localScroll({
		duration:800
	});



	if ($(window).width() < 501) {
  		// initiate the slidebars plugin
    	$.slidebars();

    	$("nav").addClass("sb-slidebar");
    	$("nav").addClass("sb-left");
    	$("nav").addClass("sb-width-custom");
	}
	else {
		$("nav").removeClass("sb-slidebar");
    	$("nav").removeClass("sb-left");
    	$("nav").removeClass("sb-width-custom");
	}

			// THIS IS THE JQUERY FOR THE FADING OF JUMPING ARROW
			// this is where we apply opacity to the arrow
			$(window).scroll( function(){

			  //get scroll position
			  var topWindow = $(window).scrollTop();
			  //multipl by 1.5 so the arrow will become transparent half-way up the page
			  var topWindow = topWindow * 1.5;
			  
			  //get height of window
			  var windowHeight = $(window).height();
			      
			  //set position as percentage of how far the user has scrolled 
			  var position = topWindow / windowHeight;
			  //invert the percentage
			  position = 1 - position;

			  //define arrow opacity as based on how far up the page the user has scrolled
			  //no scrolling = 1, half-way up the page = 0
			  $('.arrow').css('opacity', position);

			});



});






