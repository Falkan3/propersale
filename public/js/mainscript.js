var $root = $('html, body');
var $body = $('body');

$(document).on({
    /*
    ajaxStart: function() { $body.addClass('loading'); },
    ajaxStop: function() { $body.removeClass('loading'); }
    */
});

$(document).ready(function () {
    //$(window).stellar();
});

$( window ).load(function() {

});

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

    var transparenHeader = 10;
    if($( window ).width() > 768) {
        if ($(this).scrollTop() >= transparenHeader) {
            $('header nav').removeClass('transparent_nav');
        }
        else {
            $('header nav').addClass('transparent_nav');
        }
    }
});





