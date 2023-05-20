
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

    $('#owl-favorites').owlCarousel({
        items: 4, // Кількість видимих елементів
        loop: true, // Зациклити карусель
        nav: true, // Показати навігаційні кнопки
        dots: true, // Показати крапки-індикатори
        margin: 10, // Відступи між елементами
        responsive: {
            0: {
                items: 1 // Кількість видимих елементів на малих екранах
            },
            768: {
                items: 3 // Кількість видимих елементів на середніх екранах
            },
            992: {
                items: 4 // Кількість видимих елементів на великих екранах
            }
        }
    });

});
