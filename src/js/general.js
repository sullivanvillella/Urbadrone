$( document ).ready(function() {
  	//	Variable Init
	var windowHeight = $(window).height();

	//	Navigation
	$('.nav_toggle').click(function(){
		$(this).toggleClass('active');
		$('.blur').toggleClass('active');
		$('.navigation').fadeToggle(300);
		$('body').toggleClass('no_scroll');
		if($(document).scrollTop() > windowHeight-50){
			$('nav').toggleClass('scrolled');
			$('.nav_toggle').toggleClass('scrolled');
		}
	});
	/*$('.right_nav').click(function(){
		$('.blur').toggleClass('active');
		$('.navigation').fadeToggle(300);
		$('body').toggleClass('no_scroll');
		$('.nav_toggle').toggleClass('active');
	});*/

	$('.menu').click(function(){
		$('.hidden_menu').toggle();



	});

	//	Scroll Navigation
	$(window).scroll(function(){
		if($(window).scrollTop() > windowHeight-50){
			$('nav').addClass('scrolled');
			$('.nav_toggle').addClass('scrolled');
		}
		else {
			$('nav').removeClass('scrolled').addClass('scrolledAnimation');
			$('.nav_toggle').removeClass('scrolled').addClass('scrolledAnimation');
		}
	});

	//	Google Maps Init
	var myLatlng = new google.maps.LatLng(50.280409, 2.795920);
	var myLatlngCenter = new google.maps.LatLng(50.280506, 2.793047);
	var mapOptions = {
	  zoom: 16,
	  scrollwheel: false,
	    navigationControl: false,
	    mapTypeControl: false,
	    scaleControl: false,
	  center: myLatlngCenter
	}
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);

	var marker = new google.maps.Marker({
	    position: myLatlng,
	    title:"Lycée Guy Mollet"
	});
	marker.setMap(map);
});
