(function ($) {
    "use strict";
    $(document).ready(function () {
        var $back_to_top = $("#back-to-top");

        if( $back_to_top.length) {

            var $min         = 200;
            var $inDelay     = 600;
            var $outDelay    = 400;
            var $scrollSpeed = 300;
            var $easingType  = 'linear';            

            $( $back_to_top ).hide().on("click",function(e){
                $('html, body').animate({scrollTop:0}, $scrollSpeed, $easingType);
                $('#back-to-top-hover').stop().animate({'opacity': 0 }, $inDelay, $easingType);
                return false;
            }).hover(function(){
                $('#back-to-top-hover').stop().animate({
                    'opacity': 1
                }, 600, 'linear');
            },function(){
                $('#back-to-top-hover').stop().animate({
                    'opacity': 0
                }, 700, 'linear');
            });

            $(window).scroll(function(){
                var $sd = $(window).scrollTop();
                if(typeof document.body.style.maxHeight === "undefined") {
                    $($back_to_top).css({
                        'position': 'absolute',
                        'top': sd + $(window).height() - 50
                    });
                }

                if ( $sd > $min ){
                    $($back_to_top).fadeIn($inDelay);
                } else {
                    $($back_to_top).fadeOut($outDelay);
                }
            });

        }
    });
})(jQuery);  


// color change while in dark bg

window.addEventListener("scroll", function () {
    let button = document.querySelector(".back-to-top-icon");
    let blackBgSections = document.querySelectorAll(".wdt-black-bg"); // Select all black background sections
    let buttonRect = button.getBoundingClientRect();
    let isOverBlack = false;

    blackBgSections.forEach((section) => {
        let rect = section.getBoundingClientRect();
        if (
            buttonRect.top < rect.bottom &&
            buttonRect.bottom > rect.top
        ) {
            isOverBlack = true;
        }
    });

    if (isOverBlack) {
        button.style.color = "var(--wdtPrimaryColor)"; // Change to required color
    } else {
        button.style.color = "var(--wdtTertiaryColor)"; // Default color
    }
});