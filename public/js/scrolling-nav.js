//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

var links = $('nav .page-scroll');
var sections = new Array();
links.each(function(e) {
    sections.push($('section' + $(this).attr('href')));
});

$(window).scroll(function () {
    links.each(function(e) {
        if ($(window).scrollTop() >= sections[links.index($(this))].offset().top) {
            $(this).parent().addClass('active');
        }
        else {
            $(this).parent().removeClass('active');
        }
    });
});

