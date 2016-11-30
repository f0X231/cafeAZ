$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});


function menuGroups() {
		var deviceHeight = $(window).height();

		$('.btn-close-menu').click(function() {
				$('body').removeClass('pushy-open-left');
		});

		if(deviceHeight >= 600) {
				$('#menu-footer-groups').addClass('menu-footer-groups');
		}
}

function goBack() {
		window.history.back();
}


$(document).ready(function() {

	$(document).foundation();

	menuGroups();
	$(window).on('orientationchange resize', function(e){
			window.location.reload();
	});

});
