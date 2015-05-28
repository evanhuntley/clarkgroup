/* =======================================================================
    General Scripts
=========================================================================== */

var app = app || {};
app.nav = $('nav[role="navigation"]');

$(document).ready(function() {

    $('.nav-toggle').on('click', function() {
        console.log('test');
        app.nav.addClass('open');
    });

    $('.close-nav').on('click', function() {
        app.nav.removeClass('open');
    });

});
