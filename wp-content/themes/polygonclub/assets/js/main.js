(function($) {
    "use strict";

    jQuery(document).ready(function($) {


        $(document).ready(function() {

            var bannerSlider = new Swiper('.banner-slider', {
                loop: true,
                centeredSlides: true,
                slidesPerView: 1,
                navigation: {
                    nextEl: ".posters .arrow-right",
                    prevEl: ".posters .arrow-left",
                },
            });


            $('.button__widget').on('click', function() {
                $('.performances-info').toggleClass('show');

            })

            // $('.arrow-right').on('click', function(){
            //   $descriprionSlider.swipePrev();
            // })
            // $('.arrow-left').on('click', function(){
            //   $descriprionSlider.swipeNext();
            // })




        })



    }); // end 





}(jQuery));