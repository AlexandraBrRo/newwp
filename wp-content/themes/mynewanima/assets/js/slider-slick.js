
$(document).ready(function (){
    $('.arrivals-carousel').slick({
        arrows:true,
        slidesToShow:4,
        slidesToScroll:4,
        speed:1000,
        easing:'ease',
        infinitive: true,
        autoPlay:true,
        autoplaySpeed: 1500,
        pauseOnFocus:true,
        pauseOnHover: true,
        pauseOnDotsHover:true,
        draggable: false,
        swipe:true,
        slidesPerRow:1,
        responsive:[
            {
                breakpoint: 768,
                settings:{
                    sliderToShow:2,
                    slidesToScroll:1,

                }
            }, {
                breakpoint: 480,
                settings: {
                    sliderToShow: 1,
                    slidesToScroll: 1,

                },
            }
        ],
        mobileFirst:false,
        // appendArrows:$('.slick-button')
    });

});
