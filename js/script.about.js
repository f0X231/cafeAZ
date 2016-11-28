jQuery(document).ready(function(){
    $('.promotion-picture img').hover(
        function() { $(this).addClass('transition-promotion-products'); },
        function() { $(this).removeClass('transition-promotion-products');  }
    );
});
