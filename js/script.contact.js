jQuery(document).ready(function(){

    var amazonCafeCompany = {lat: 13.817832, lng: 100.558165};
    $('#googlemap').gmap3({
      center: amazonCafeCompany,
      zoom: 16,
    })
    .marker({
        position: amazonCafeCompany,
        icon: "../images/icon_cup_coffee_map.png"
    }).infowindow({
        content: "<div style='text-align:center;'>ฝ่ายธุรกิจคาเฟ่อเมซอน<br />บริษัท ปตท. จำกัด (มหาชน)<br />555 ถนนวิภาวดีรังสิต แขวงจตุจักร<br />เขตจตุจักร กรุงเทพฯ 10900</div>"
    }).then(function (infowindow) {
        var map = this.get(0);
        var marker = this.get(1);

        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
    });

});
