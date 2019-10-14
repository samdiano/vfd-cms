var mq = window.matchMedia("(max-width: 768px)");

if (mq.matches) {
    $('#myGovernanceTab').removeClass('nav-justified-2')
    $('#blogTab').removeClass('nav-justified media-margin');
    $('#myTabJust').removeClass('nav-justified');
    $('#investor_tab').removeClass('nav-justified');
    $('#careerTab').removeClass('nav-justified-career border');
}

$('.active-link').removeClass('px-md-4');

$("#display_busari_details").hover(
    function() {
        $('#busari').addClass("show");
        $('#busari').show();
        console.log('in')
    }, function() {
        $('#busari').removeClass("show");
        $('#busari').hide();
        console.log('out')
    }
);


$(document).ready(function() {

    $('.subsidiary_home').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2500,
        arrows: true,
        dots: false,
        pauseOnHover: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    autoplay: true,
                    autoplaySpeed: 2000
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000
                }
            }
        ],
        nextArrow: '<i class="fa fa-angle-right fa-3x slick_dark right-arrow d-none"></i>',
        prevArrow: '<i class="fa fa-angle-left fa-3x slick_dark left-arrow d-none"></i>',
    });

})
