jQuery(document).ready(function(){
    $('#landing-content').mousemove(function(e){
        var x = -(e.pageX + this.offsetLeft) / 20;
        var y = -(e.pageY + this.offsetTop) / 20;
        $(this).css('background-position', x + 'px ' + y + 'px');
    });

    $('.promotion-picture img').hover(
        function() { $(this).addClass('transition-promotion-products'); },
        function() { $(this).removeClass('transition-promotion-products');  }
    );
});


var map = new GMaps({
                      el: '#googlemap',
                      lat: -12.043333,
                      lng: -77.028333
                    });
map.addMarker({
                lat: -12.043333,
                lng: -77.028333,
                infoWindow: {
                              content: '<p>HTML Content</p>'
                            }
              });
map.drawOverlay({
                  lat: -12.043333,
                  lng: -77.028333,
                  content: '<img src="images/icon_cool.png" />'
                });
