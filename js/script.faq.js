jQuery(document).ready(function(){

    $(".expand").on( "click", function() {
        $(this).next().slideToggle(200);
        $expand = $(this).find(">:first-child");

        if($expand[0].innerHTML == '<img src="images/icon_down.png">') {
            $expand[0].innerHTML = '<img src="images/icon_up_hover.png">';
        }
        else {
            $expand[0].innerHTML = '<img src="images/icon_down.png">';
        }
    });
});
