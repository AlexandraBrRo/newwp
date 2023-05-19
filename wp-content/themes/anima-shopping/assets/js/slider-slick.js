
$(document).ready(function (){

    $('.slider-wrapper').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        onInit: function() {
            const sliderItems = $('.slider-wrapper .item-slider');
            const spacing = 24;
            sliderItems.each(function(index) {
                if (index !== sliderItems.length - 1) {
                    $(this).css('margin-right', spacing + 'px');
                }
            });
        }
    });
});

$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        items: 1,
        nav: true,
        navText: ['<button class="owl-prev">Prev</button>', '<button class="owl-next">Next</button>'],
        dots:  false,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    });
});
