
$(document).ready(function() {

	var getWidth = $(window).width();
	var getHeight = $(window).height();

	var paramMulti = 0.8;
	if(getWidth < 641) {
			if(getWidth > getHeight) {
				var paramMulti = 1.5;
			}
	}

	$(window).resize(function(){
			window.location.href = window.location.href;
	});
	$('.slide-animation').DrSlider({
			width: $(window).width(),
			height: ($(window).height() * paramMulti),
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
	//$('.slide-animation').resize(function () {
			//window.location.reload();
			//console.log('xxxxxx');
	//});

	$('.vdo-content-0').removeClass('vdo-content-txt');
	$('.orbit').on('slidechange.zf.orbit', function() {

				$('.amazon-vdo').each(function(){
						this.contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*')
				});

				$('.vdo-carousel-content p').each(function(index) {
							if(!$('.vdo-content-' + index).hasClass('vdo-content-txt')) {
									$('.vdo-content-' + index).addClass('vdo-content-txt')
							}
				});

				var currentItem = $('li.orbit-slide.is-active').index();
				$('.vdo-content-' + currentItem).removeClass('vdo-content-txt');
	});

});
