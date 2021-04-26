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

var news;
var page = 2;


$('#load-more').on('click', function() {
    $.ajax({
        method: "GET",
        url: 'http://localhost:3002/triveneta-assicura/?rest_route=/wp/v2/load-more/' + page,
    }).done(function(response) {
        page++;
        news = response;
        console.log(response);
        news.forEach(function(element, index) {
            console.log(index);
            let category = element.category[0].cat_name;
            let template = $('<div></div>');
            let firstAnchor = $('<a></a>');
            let immage = $('<img></img>');
            let span = $('<span>' + category.toUpperCase() + '</span>');
            let secondAnchor = $('<a></a>');
            let title = $('<h3>' + element.post_title + '</h3>')
            let thirdAnchor = $('<a></a>');
            let link = $('<i class="fas fa-arrow-right"></i><span>Scopri</span>')

            title.addClass('title title-3 text-left');
            firstAnchor.attr('href', element.guid);
            secondAnchor.attr('href', element.guid);
            thirdAnchor.attr('href', element.guid);
            immage.attr('src', element.imageUrl)
            immage.addClass('round-border img-fluid');
            firstAnchor.append(immage);
            secondAnchor.append(title);
            thirdAnchor.append(link);
            thirdAnchor.css('display', 'block');

            template.addClass('mix ' + category + ' items col-lg-4 col-12 scrvl' + page);
            template.append(firstAnchor, span, secondAnchor, element.post_excerpt.substring(0, 280) + '....', thirdAnchor);

            $('.mix-container').append(template).ready(function() {
                if (mixer !== undefined) mixer.destroy();
                init_mixer();
            });
        });
        ScrollReveal().reveal('.scrvl' + page, animation);
    });
})


// NEWS FILTER BUTTONS 

$('#filter-arrow').on('click', function() {
    if ($('#filtercontainer').css('display') === 'flex') {
        $('#filtercontainer').css('display', 'none')
        $('#filtercontainer').animate({
            opacity: 0
        }, 500)
        $(this).animate({
            rotate: '0deg'
        }, 500)
    } else {
        $('#filtercontainer').css('display', 'flex');
        $('#filtercontainer').animate({
            opacity: 1
        }, 500)
        $(this).animate({
            rotate: '180deg'
        })
    }
})





$('.filter-button').on('click', function() {
    $('#selectedfilter').text($(this).html());
    $('.filter-button').removeClass('selected');
    $(this).addClass('selected');
    $('#filtercontainer').css('display', 'none');
    $('#filter-arrow').animate({
        rotate: '0deg'
    }, 500)
})


$(window).on('load', function() {
    $('#popup-closure').modal('show');
})