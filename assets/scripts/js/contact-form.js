$(document).ready(function($) {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        var form = {
            email_from: $('#mail_from').val(),
            email_body: $('#mail_body').val(),
            privacy_flag: $('#privacy_check').prop('checked'),
            marketing_flag: $('#marketing_check').prop('checked')
        }
        $.ajax({
            method: "POST",
            url: 'http://localhost:3002/triveneta-assicura/?rest_route=/wp/v2/send-mail',
            data: form,
        }).done(function(response) {
            console.log(response);
        })
    })
})