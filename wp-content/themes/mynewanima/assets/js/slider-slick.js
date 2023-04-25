
$(document).ready(function (){
    $('.arrivals-carousel').slick({
        arrows:true,
        dots:false,
        adaptiveHeight:false,
        slidesToShow:2,
        slidesToScroll:2,
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
        waitForAnimate:false,
        centerMode:false,
        variableWidth:false,
        rows:2,
        slidesPerRow:1,
        responsive:[
            {
                breakpoint: 768,
                settings:{
                    sliderToShow:2,
                    slidesToScroll:1,
                    rows:1,
                }
            }, {
                breakpoint: 480,
                settings: {
                    sliderToShow: 1,
                    slidesToScroll: 1,
                    rows: 1,
                },
            }
        ],
        mobileFirst:false,
        appendArrows:$('.arrivals-img')
    });
});
