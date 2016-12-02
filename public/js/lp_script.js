var $root = $('html, body');

$(document).ready(function () {
    resizeButton();
});

$( window ).load(function() {

});

$(window).resize(function () {

});

function resizeButton() {
    var input_field_height = $("#email_form div").first().outerHeight()-15;
    var submit_button = $("#email_form button");
    submit_button.css('height', input_field_height);
}