var $root = $('html, body');
// Get the modal
var modal = $("#status")

// Get the <span> element that closes the modal
var span = $(".close");

$(document).ready(function () {
    resizeButton();
});

$(window).load(function () {

});

$(window).resize(function () {

});

function resizeButton() {
    var input_field_height = $("#email_form div").first().outerHeight() - 15;
    var submit_button = $("#email_form button");
    submit_button.css('height', input_field_height);
}

// When the user clicks on <span> (x), close the modal
span.click(function() {
    modal.hide();
});

$(window).click(function event() {
    modal.hide();
});

// When the user clicks anywhere outside of the modal, close it
