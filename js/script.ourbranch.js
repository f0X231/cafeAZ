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


jQuery(document).ready(function(){

    var amazonCafeCompany = {lat: 48.8620722, lng: 2.352047};

    $('#googlemap').gmap3({
      center: amazonCafeCompany,
      zoom: 16,
    })
    .marker({
        position: amazonCafeCompany,
        icon: "./images/icon_cup_coffee_map.png"
    }).infowindow({
        content: "สน. ปตท.สำนักงานใหญ่<br />555 ถ.วิภาวดีรังสิต จตุจักร กทม.<br />โทร. 0625945331"
    }).then(function (infowindow) {
        var map = this.get(0);
        var marker = this.get(1);

        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
    });

    var getHeightBranchList = $('.select-branch').height();
    $('.select-branch-list').slimscroll({
        height: getHeightBranchList+'px'
    });

    $('.branch-list-our').each(function() {
          $(this).click(function(index) {
                var getLat = $(this).find('.branch-latitude').text();
                var getLng = $(this).find('.branch-longitude').text();
                var getText = $(this).find('.branch-text').text();

                var container = $('#googlemap').parent();
                $('#googlemap').remove();
                container.append('<div id="googlemap"></div>');

                $('#googlemap').gmap3({
                    center: [getLat, getLng],
                    zoom: 16,
                })
                .marker({
                    position: [getLat, getLng],
                    icon: "./images/icon_cup_coffee_map.png"
                }).infowindow({
                    content: getText
                }).then(function (infowindow) {
                    var map = this.get(0);
                    var marker = this.get(1);

                    marker.addListener('click', function() {
                      infowindow.open(map, marker);
                    });
                });
          });
    });

    $('#select_location').change(function() {
          var getLat = $(this).find(':selected').data("latitude");
          var getLng = $(this).find(':selected').data("longitude");
          var getText = $(this).val();

          var container = $('#googlemap').parent();
          $('#googlemap').remove();
          container.append('<div id="googlemap"></div>');

          $('#googlemap').gmap3({
              center: [getLat, getLng],
              zoom: 16,
          })
          .marker({
              position: [getLat, getLng],
              icon: "../images/icon_cup_coffee_map.png"
          }).infowindow({
              content: getText
          }).then(function (infowindow) {
              var map = this.get(0);
              var marker = this.get(1);

              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });
          });
    });

    inputDefaultValue('search', 'ค้นหา');

});
