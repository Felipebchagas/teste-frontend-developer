$(document).ready(function () {

    toggleQuestion();

    function toggleQuestion() {
        $('.question').click(function () {
            if ($(this).hasClass('active')) {
                $(this).find('.question-content').slideUp();
                $(this).toggleClass('active')
            } else {
                $(this).find('.question-content').slideDown();
                $(this).toggleClass('active')
            }

        })
    }

    $('#deco-serv-span, #start-project, #leave-msg').click(function () {
        document.getElementById("contact-form").scrollIntoView({ behavior: "smooth" });
    })


    $('#reg-phone').keyup(function () {
        if ($(this).val().length == 15) {
            $(this).mask('(00) 00000-0009');
        } else {
            $(this).mask('(00) 0000-00009');
        }
    })


    $('#submit-btn').click(function (e) {
        e.preventDefault();

        let data = $('#contact-form').serialize();
        $('.input-group input, #message-sub').css('border-color', '');
        $('.msg-handler').hide();

        $.ajax({
            method: 'POST',
            dataType: "json",
            url: '',
            data: data
        }).done(function (data) {

            $.each(data, function (key, value) {

                switch (key) {

                    case '201':
                        $('.alert').addClass('sucess').html(value).show().fadeOut(18000);
                        break;
                    case 'invalidEmail':
                        $('#reg-email').css('border-color', 'red')
                        $('#reg-email').closest('.input-group').find('.msg-handler').addClass('error').show().html(value);
                        break;
                    case 'invalidPhone':
                        $('#reg-phone').css('border-color', 'red')
                        $('#reg-phone').closest('.input-group').find('.msg-handler').addClass('error').show().html(value);
                        break;
                    case 'emptyName':
                        $('#reg-name').css('border-color', 'red')
                        $('#reg-name').closest('.input-group').find('.msg-handler').addClass('error').show().html(value);
                        break;
                    case 'emptyMsg':
                        $('#message-sub').css('border-color', 'red')
                        $('#message-sub').closest('.input-group').find('.msg-handler').addClass('error').show().html(value);
                        break;
                }
            })

        })
    })

});