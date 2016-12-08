$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});

function isNumberKey(evt) {
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;

   return true;
}

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

function inputDefaultValue(input_id_name, defaultValue)
{
		$('#' + input_id_name).attr('value', defaultValue).focus(function() {
				if ($(this).val() == defaultValue) {
						$(this).attr('value', '');
				}
		}).blur(function() {
				if ($(this).val() == '') {
						$(this).attr('value', defaultValue)
				}
		});
}





$(document).ready(function() {

  	$(document).foundation();

  	menuGroups();
  	$(window).on('orientationchange', function(e){
  			window.location.reload();
  	});

});
