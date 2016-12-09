jQuery(document).ready(function(){

      $(".factory-pic-slide").owlCarousel({
        navigation : true, // Show next and prev buttons
        navigationText: [
                          "<img src='./images/icon_arrow_prev.png' />",
                          "<img src='./images/icon_arrow_next.png' />"
                        ],
          autoPlay: 8000, //Set AutoPlay to 3 seconds
          items : 3,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
      });

      $(".factory-pic-slide-one").owlCarousel({
          navigation : false, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem: true,
          autoPlay: 8000
          // "singleItem:true" is a shortcut for:
          // items : 1,
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
      });

      $('.leaf-footer').css('display', 'none');
});
