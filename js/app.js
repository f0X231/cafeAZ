$(document).ready(function() {

	$('.overlay').on('click mousemove', function () {
    	$('.leaf01').addClass('animated fadeOutUp');
    	$('.leaf02').addClass('animated fadeOutLeft');
    	$('.leaf03').addClass('animated fadeOutDown');
    	$('.leaf04').addClass('animated fadeOutDown');
    	$('.leaf05').addClass('animated fadeOutRight');
    	$('.leaf06').addClass('animated fadeOutUp');
    	$('.overlay').addClass('animated fadeOut');
	});

	$('.slide-animation').DrSlider({
			transitionSpeed: 1500,
			duration: 8000,
			showProgress: false,
			showNavigation: true,
			classNavigation: 'navigation-circle',
			navigationColor: '#ffffff',
			navigationHighlightColor: '#284a2b',
			navigationHoverColor: '#284a2b',
			onReady: function() {}
	});

});
