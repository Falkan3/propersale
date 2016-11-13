var $root = $('html, body');

var animated_list = $('.animated_list');
var last_child_of_anim_list = animated_list.find('li').last().find('img');
var list_position = animated_list.position().top + (animated_list.outerHeight() - animated_list.position().top) / 2;
var circleContainer = $('.circle-big');
var circleArray = $('.rotate_item');
var screen_width_2 = 35 + circleArray.width()*1.25;
var angle = 0;

$(document).ready(function () {
    $(window).stellar();
    //enableNiceScrolling();

    /* Animated list*/
    animated_list.children().hide();
    /* /Animated list*/

    advantages_slider();
});

$( window ).load(function() {
    screen_width_2 = 35 + circleArray.width()*1.25;
    chargearray();
});

$(window).resize(function () {
    advantages_slider();
    screen_width_2 =  35 + circleArray.width()*1.25;
});

function advantages_slider() {
    var obj = $('.fill');
    $.each(obj, function (e) {
        var fill_height = $(this).parent().parent().height();
        $(this).css('height', fill_height);
    });
}

/*
$(document).on('click', 'a', function (event) {
    if ($(this).attr('anchor') == 'true' && $(this).attr('href').length > 1 && $(this).attr('href').charAt(0) == '#') {
        event.preventDefault();

        $root.animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 50
        }, 500);
    }
});
*/

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
    if ($(this).scrollTop() >= list_position) {
        animateList();
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

$('#slider_advantages').on('slid.bs.carousel', '', function () {
    var $this = $(this);

    $this.children('.carousel-control').show();

    if ($('.carousel-inner .item:first').hasClass('active')) {
        $this.children('.left.carousel-control').fadeOut();
    } else if ($('.carousel-inner .item:last').hasClass('active')) {
        $this.children('.right.carousel-control').fadeOut();
    }

});

$("#slider_advantages").swiperight(function () {
    $(this).carousel('prev');
});
$("#slider_advantages").swipeleft(function () {
    $(this).carousel('next');
});

/* SMOOTH ANIMATION  -------------------------------------------------------------------------------------------------*/

function animateList() {
    //$(children[i])

    var items = $('.animated_list').children();

    for (var i = 0; i < items.length; i++) {
        $(items[i]).animate({
            width:"show",
            opacity:"show"
        },1500);
    }

    //last_child_of_anim_list.animate({height: '150px', width: '150px'}, 1500);

}

function pulse(obj) {
    obj.animate({
        width: 150, height: 150, // sets the base height and width
        opacity: 0.5
    }, 700, function() {
        obj.animate({
            width: 175, height: 175, // sets the alternative height and width
            opacity: 1
        }, 700, function() {
            pulse(obj);
        });
    });
};

/*
 animated_list.animate({
 height: "show",
 opacity: "show"
 }, 1000);
 */

/*
 var styles;
 styles = [{'left': 10 + $(items[0]).find('div').width()}, {'right': 10 + $(items[1]).find('div').width() * 2}, {
 'left': '50%',
 'margin-left': $(items[2]).find('img').width() / -2
 }, {
 'left': '30%',
 'margin-left': $(items[3]).find('img').width() / -2,
 'margin-top': $(items[3]).find('div').height() * 2 + 15
 }, {
 'right': '30%',
 'margin-right': $(items[4]).find('img').width() / -2,
 'margin-top': $(items[4]).find('img').height() * 2 + 15
 }];
 */

function chargearray () {
    for (var i = 0, j = circleArray.length; i < j; i++) {
        var circle = circleArray[i];
        var circleAngle = parseInt (circle.dataset.angle);
        var totalAngle = angle + circleAngle;
        var style = "rotate(" + totalAngle + "deg) translate(" + (screen_width_2) + "px)";
        totalAngle = - totalAngle;
        style = style + " rotate(" + totalAngle + "deg)"
        circle.style.webkitTransform = style;
        circle.style.Transform = style;
    }
}

window.setInterval(function(){
    angle = angle + 1;
    chargearray ();
}, 100);





