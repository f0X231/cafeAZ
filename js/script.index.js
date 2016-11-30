
$(document).ready(function() {

	$('.overlay').on('click', function () {
    	$('.leaf01').addClass('animated fadeOutUp');
    	$('.leaf02').addClass('animated fadeOutLeft');
    	$('.leaf03').addClass('animated fadeOutDown');
    	$('.leaf04').addClass('animated fadeOutDown');
    	$('.leaf05').addClass('animated fadeOutRight');
    	$('.leaf06').addClass('animated fadeOutUp');
    	$('.overlay').addClass('animated fadeOut');

			setTimeout(function() {
				$('.overlay').hide();
  		}, 5000);

	});

	$('.slide-animation').DrSlider({
			width: $(window).width(),
			height: ($(window).height() * 0.8),
			transitionSpeed: 1500,
			duration: 8000,
			showProgress: false,
			showControl: false,
			showNavigation: true,
			navigationType: 'circle',
			navigationColor: '#ffffff',
			navigationHighlightColor: '#284a2b',
			navigationHoverColor: '#284a2b',
			positionNavigation: 'in-right-bottom',
			onChageSlide: function(index) {
					$('.slide-content').hide();
					$('.slide-content').css('opacity', 0);

					$('.slide-content-num-' + index).show();
					$('.slide-content-num-' + index).animate({opacity: 1}, {queue: false, duration: 'slow'});

			}
	});

});
