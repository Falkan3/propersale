$(document).ready(function () {
    $(window).stellar();
    enableNiceScrolling();
});

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

    var shrinkHeader = 300;
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




