$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});

jQuery(document).ready(function(){

		/*$('.icon-badge li').each(function(index) {
				$('.icon-badge-' + (index + 1)).click(function() {
						$('.icon-badge li').each(function(index) {
								$('.icon-badge-' + (index + 1)).removeClass('active');
						});

						$(this).addClass('active');
						$('.product-picture').animateCss('fadeOutLeft');
						$('.product-picture').attr('src', 'images/products0'+ (index+1) +'.png').each(function() {
								$(this).animateCss('fadeInRight');
						});
						//$('.product-picture').animateCss('fadeInRight');
				});
		});*/

});
