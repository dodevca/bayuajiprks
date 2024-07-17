$(document).ready(function () {
    // initial elements
    let header          = $('header')
    let navToggleBtn    = $('.navbar-toggler')
    let navMenu         = $('#navbar-menu')

    // startup functions
    AOS.init()

    // event handlers
    $(window).scroll(() => {
        if($(window).scrollTop() > 0)
            header.addClass('active')
        else
            header.removeClass('active')
    })

    $(navToggleBtn).click(() => {
        if(!header.hasClass('active') && !navMenu.hasClass('show'))
            header.addClass('active')
    })
})