var $root = $('html, body');
var timer3;
var timer1;
var animated_list = $('.animated_list');
var last_child_of_anim_list = animated_list.find('li').last().find('img');
var list_position = animated_list.position().top - animated_list.outerHeight()/2;
var client_slider = $('.bxslider');

var vlist_index = 0; var tab_images_index = 0;
var tab_gallery_desc = $('.tab-gallery_container ul.description');
var tab_gallery = $('.tab-gallery ul.images');
var tab_gallery_subimages = $('.tab-gallery ul.images ul.subimages');
var vertical_list = $('.vertical_eq');
var vlist_index_max = vertical_list.children().length;
var tab_images_index_max = [5,3,3,3,3,1];
var rand_image_array = [];

$(document).ready(function () {
    /* Animated list*/
    if ($(this).scrollTop() < list_position) {
        animated_list.children().hide();
    }
    /* /Animated list*/

    advantages_slider();

    bxslider_init();

    timer1 = setInterval(function(){
        switchImages();
        tab_images_index++;
    }, 2000);
    switchTab();
    switchImages();
});

$( window ).load(function() {

});

$(window).resize(function () {
    advantages_slider();
});

function advantages_slider() {
    var obj = $('.fill');
    $.each(obj, function (e) {
        var fill_height = $(this).parent().parent().height();
        $(this).css('height', fill_height);
    });
}

function bxslider_init() {
    client_slider.bxSlider({
        auto: true,
        autoHover: true,
        minSlides: 1,
        maxSlides: 4,
        speed: 2000,
        pause: 3000,
        slideWidth: 260,
        slideMargin: 30,
        adaptiveHeight: true,
        responsive: true,
        pager: true,
        navigation: true,
        moveSlides: 3
    });
}

/*
$('#pronext').on('click', function(){
    client_slider.parent().parent().remove();
    $('#clients').prepend(client_slider);

    client_slider.reloadSlider({
        useCSS: false,
        minSlides: 1,
        maxSlides: 4,
        ticker: true,
        speed: 100000,
        slideWidth: 260,
        slideMargin: 30,
        tickerHover: true,
        adaptiveHeight: true,
        responsive: true,
        pager: true,
        navigation: true,
        moveSlides: 1
    })
    return false;
});


$('#proprev').on('click', function(){
    client_slider.reloadSlider({
        minSlides: 1,
        maxSlides: 4,
        ticker: false,
        speed: 2000,
        pause: 3000,
        slideWidth: 260,
        slideMargin: 30,
        tickerHover: true,
        adaptiveHeight: true,
        responsive: true,
        pager: true,
        navigation: true,
        moveSlides: 1
    })
    return false;
});
*/
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

var links = $('nav .page-scroll');
var sections = new Array();
links.each(function(e) {
    sections.push($('section' + $(this).attr('href')));
});

$(window).scroll(function () {
    if ($(this).scrollTop() >= list_position) {
        animateList();
    }
    links.each(function(e) {
        if ($(window).scrollTop() >= sections[links.index($(this))].offset().top) {
            $(this).parent().addClass('active');
        }
        else {
            $(this).parent().removeClass('active');
        }
    });
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

    var items = animated_list.children();
    items.show('slide', {direction: 'left'}, 1500);

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

function switchTab () {
    rand_image_array = shuffle(init_array(tab_images_index_max[vlist_index]));
    if(vlist_index<vlist_index_max) {
        vertical_list.children().each(function() {
            $(this).removeClass('active');
        });
        tab_gallery_desc.children().each(function() {
            $(this).removeClass('active');
        });
        tab_gallery.children().each(function() {
            $(this).removeClass('active');
        });
        vertical_list.children().eq(vlist_index).addClass('active');
        tab_gallery_desc.children().eq(vlist_index).addClass('active');
        tab_gallery.children().eq(vlist_index).addClass('active');
        //vlist_index++;
    }
    else {
        vlist_index = 0;
        switchTab();
    }
}

function switchImages () {
    if(tab_images_index<tab_images_index_max[vlist_index]) {
        tab_gallery.children().eq(vlist_index).children().children().each(function() {
            $(this).removeClass('active');
        });
        tab_gallery.children().eq(vlist_index).children().children().eq(rand_image_array[tab_images_index]).addClass('active');
    }
    else {
        tab_images_index = 0;
        vlist_index++;
        switchTab();
        switchImages();
    }
}

vertical_list.children().hover(function(e) {
    var index = $(this).attr('index-number');
    if(index>=0 && index < vlist_index_max) {
        vlist_index = $(this).attr('index-number');
        switchTab();
        tab_images_index = 0;
        switchImages();
        clearInterval(timer1);
        timer1 = setInterval(function(){
            switchImages();
            tab_images_index++;
        }, 2000);
    }
});

function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}

function init_array(length) {
    var array = [];
    for(var i=0; i<length; i++)
    {
        array.push(i);
    }
    return array;
}