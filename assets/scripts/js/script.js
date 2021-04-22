$(document).ready(function() {
    //hamburger toggle
    $('#ham-btn').click(function(e) {
        $('#ham-btn').attr('disabled', true);
        if ($('#mobile-menu').css('display') === "none") {
            $('#mobile-menu').show(250, () => $('#ham-btn').attr('disabled', false));
        } else {
            $('#mobile-menu').hide(250, () => $('#ham-btn').attr('disabled', false));
        }
        $('.nav-icon').toggleClass('open');
    })
})




var animation = {
    distance: '250px',
    duration: '1500',
    opacity: '0',
    delay: '200'
}
ScrollReveal().reveal('.jumbo', animation);
ScrollReveal().reveal('.scrvl1', animation);
ScrollReveal().reveal('.scrvl2', animation);