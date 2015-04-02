// JavaScript Document
	// Preloader //
	$(window).load(function() {
			$('.loader').fadeOut('slow');
		
		
	});

// Page intro //
$(document).ready(function(){
	$("#avatar-en,#avatar-fr").hide();
  $("#frenchbox").mouseover(function(){
    $("#avatar,#avatar-en").hide();
	$("#avatar-fr").show();
  });
  $("#frenchbox").mouseout(function(){
    $("#avatar").show();
	$("#avatar-fr").hide();
  });
   $("#englishbox").mouseover(function(){
    $("#avatar,#avatar-fr").hide();
	$("#avatar-en").show();
  });
  $("#englishbox").mouseout(function(){
    $("#avatar").show();
	$("#avatar-en").hide();
  });
});

// Anchors //
 $(document).ready(function() {

      $('#nav a.nav').smoothScroll();

      $('#nav a.nav').click(function(event) {
        event.preventDefault();
        var link = this;
        $.smoothScroll({
          scrollTarget: link.hash
        });
      });
	  
	  $('#nav a.nav li').click(function(event) {
		$('#nav a.nav li').removeClass('active');
		$(this).addClass('active');		  
	  });

    });
	
	$(document).ready(function() {

      $('#scroll a').smoothScroll();

      $('#scroll a').click(function(event) {
        event.preventDefault();
        var link = this;
        $.smoothScroll({
          scrollTarget: link.hash
        });
      });

    });
	

// Home Slider //
$(window).load(function(){
	$('.slider').fractionSlider({
		'fullWidth': 			true,
		'controls': 			true, 
		'pager': 				true,
		'responsive': 			true,
		'dimensions': 			"2560,1440",
	    'increase': 			false,
		'autoChange' : false, // auto change slides
		'pauseOnHover': 		true,
		'slideEndAnimation': 	true
	});

});

// Nav Bar //
$(document).ready(function() {
  $('#simple-menu').sidr();
});


// Sticky menu
 $("document").ready(function($){
    var nav = $('#portfolio-nav');

    $(window).scroll(function () {
          if($(window).scrollTop() >= $("#portfolio-header").height()){
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });
});
 $("document").ready(function($){
    var nav = $('.nav-bar');
    
    $(window).scroll(function () {
          if($(window).scrollTop() >= $("#portfolio-header").height()){
			
			if ($(window).width() < 415)
            nav.addClass("pushnav");
        } else {
            nav.removeClass("pushnav");
        }
    });
});
		
	// scroll to top //	
// Animation scrolltop btn///////////////////		
		
	$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});

	// Contact message //	
$(function(){
    $('#nl-form').submit(function(e){
		$("#alertbox").fadeIn(500);
		 $("#alertbox").animate({left:'750px'});

    	});
	$("#alertbox").click(function(){
  			$("#alertbox").fadeOut(500);
		});

});