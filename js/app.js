$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});

function isNumberKey(evt) {
   var charCode = (evt.which) ? evt.which : event.keyCode;
   if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;

   return true;
}


function isNotNumberKey(evt) {
   var charCode = (evt.which) ? evt.which : event.keyCode;
   if (charCode < 48 || charCode > 57)
      return true;

   return false;
}


function isEngKeyOnly(evt) {
   var charCode = (evt.which) ? evt.which : event.keyCode;

   if ( charCode == 8 || charCode == 45 || charCode == 46 || (charCode >= 48 && charCode <= 57) || (charCode >= 64 && charCode <= 90) || charCode == 95  || (charCode >= 97 && charCode <= 122) )
      return true;

   return false;
}


function isLatitudeLongitude(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;

    if(charCode == 46 || charCode == 8)
          return true;
    else if (charCode > 31 && (charCode < 48 || charCode > 57) )
          return false;
    else  return true;
}

function menuGroups() {
		var deviceHeight = $(window).height();

		$('.btn-close-menu').click(function() {
				$('body').removeClass('pushy-open-left');
		});

		if(deviceHeight >= 640) {
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

function gotoTopOfPages() {
      // browser window scroll (in pixels) after which the "back to top" link is shown
      var offset = 300,
      //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
      offset_opacity = 1200,
      //duration of the top scrolling animation (in ms)
      scroll_top_duration = 700,
      //grab the "back to top" link
      $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function(){
      ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
      if( $(this).scrollTop() > offset_opacity ) {
        $back_to_top.addClass('cd-fade-out');
      }
    });

    //smooth scroll to top
    $back_to_top.on('click', function(event){
        event.preventDefault();
        $('body,html').animate({ scrollTop: 0 ,}, scroll_top_duration);
    });
}




$(document).ready(function() {

  	$(document).foundation();

  	menuGroups();
    gotoTopOfPages();
  	$(window).on('orientationchange', function(e){
  			window.location.reload();
  	});

});
