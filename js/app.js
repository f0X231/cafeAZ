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

function getParameterByName(name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}





$(document).ready(function() {

  	$(document).foundation();

  	menuGroups();
  	$(window).on('orientationchange resize', function(e){
  			window.location.reload();
  	});

    var button = $(".to-top");

		$(window).scroll(function(){
			if ($(window).scrollTop() > 200 ){
				 button.show()
            }else{
				 button.hide()
			};
		});

		button.click(function(){
				$('html , body').animate({scrollTop:0},1000)
		});

});
