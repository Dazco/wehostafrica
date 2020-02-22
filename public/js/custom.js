jQuery(document).ready(function ($) {

    // Initiate the wowjs animation library
    new WOW().init();

    function testimonialSlider() {
        if ($('.testi_slider').length) {
            $('.testi_slider').owlCarousel({
                loop: true,
                margin: 30,
                items: 2,
                nav: true,
                autoplay: true,
                dots: true,
                smartSpeed: 1500,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                }
            })
        }
    }

    testimonialSlider();

});


$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#top').fadeIn("slow");
            $('#head_nav').addClass("fixed");
        } else {
            $('#top').fadeOut("slow");
            $('#head_nav').removeClass("fixed");
        }

        if ($(this).scrollTop() > 700) {
            $('#sec_link').fadeIn("slow");
        } else {
            $('#sec_link').fadeOut("slow");
        }
    });

    $('#top').click(function () {
        $('body,html').animate({scrollTop: 0}, 800);
    })
});

// learn more
$('#hl_other_cont').click(function () {
    $('#other_cont').show();
    $('body,html').animate({
        'scrollTop': '#hl_other_cont'.offset().top
    }, 'swing');
});


$(document).ready(function () {
    $('a[href^="#hl"]').on('click', function (e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $('#hl_other_cont').show();
        $('html, body').animate({
            'scrollTop': $target.offset().top
        }, 1000, 'swing');
    });
})

// slideshow
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1
    }
    x[slideIndex - 1].style.display = "block";
    setTimeout(carousel, 9000);
}
