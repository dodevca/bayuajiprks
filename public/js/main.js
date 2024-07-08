$(document).ready(function () {
    // initial elements
    let nav = $('header')

    // startup functions
    AOS.init()

    // event handlers
    $(window).scroll(function() {
        if($(window).scrollTop() > 0)
            nav.addClass('active')
        else
            nav.removeClass('active')
    })
})