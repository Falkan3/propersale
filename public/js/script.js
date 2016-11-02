$(document).ready(function () {
    $(window).stellar();
    //enableNiceScrolling();

    advantages_slider();
});

$( window ).resize(function() {
    advantages_slider();
});

function advantages_slider() {
    var obj = $('.fill');
    $.each( obj, function( e ) {
        var fill_height = $(this).parent().parent().height();
        $(this).css('height',fill_height);
    });
}

function enableNiceScrolling() {

    $("html").niceScroll({
        cursorcolor: "rgba(30,30,30,.5)",
        zindex: 999,
        scrollspeed: 100,
        mousescrollstep: 50,
        cursorborder: "0px solid #fff",
    });
}

$("#backtotop").click(function (e) {
    e.preventDefault();
    $("body,html").animate({
        scrollTop: 0
    }, 600);
    return false;
});

$(window).scroll(function () {
    if ($(window).scrollTop() > 150) {
        $("#backtotop").addClass("visible");
    } else {
        $("#backtotop").removeClass("visible");
    }

    var shrinkHeader = 50;
    var scroll = getCurrentScroll();
    if ( scroll >= shrinkHeader ) {
        $('.header').addClass('shrink');
    }
    else {
        $('.header').removeClass('shrink');
    }
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }
});

$("nav b").click(function (e) {
    e.preventDefault();
    $(this).toggleClass("visible");
    $(this).next('div').toggleClass("visible");
});

$('#slider_advantages').carousel({
    interval: false,
    wrap: false
});

$('#slider_advantages').children('.left.carousel-control').hide();

$('#slider_advantages').on('slid.bs.carousel', '', function() {
    var $this = $(this);

    $this.children('.carousel-control').show();

    if($('.carousel-inner .item:first').hasClass('active')) {
        $this.children('.left.carousel-control').fadeOut();
    } else if($('.carousel-inner .item:last').hasClass('active')) {
        $this.children('.right.carousel-control').fadeOut();
    }

});

$("#slider_advantages").swiperight(function() {
    $(this).carousel('prev');
});
$("#slider_advantages").swipeleft(function() {
    $(this).carousel('next');
});




