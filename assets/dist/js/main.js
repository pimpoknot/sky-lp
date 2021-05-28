//MÁSCARA DE TELEFONE
$(document).ready(function () {
    var phones = document.querySelectorAll('.phone');
    phones.forEach(function (phone) {
        window.intlTelInput(phone, {
            initialCountry: 'br',
        });
    });

    // telefone no formato (00) 00000-0000
    var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

    $('.phone').mask(SPMaskBehavior, spOptions);

    $('.iti__country-list li').click(function () {

        setTimeout(function () {
            var title = $("#title-band").attr("title");
            var placeholder = $(".phone").attr("placeholder");

            tamanho = placeholder.length;

            if (title === "Brazil (Brasil): +55") {
                $('.phone').mask(SPMaskBehavior, spOptions);
            } else {
                $('.phone').mask('0000000000');
            }

        }, 300);
    });

    //ÂNCORA
    var $doc = $('html, body');
    $('.nav-item').click(function () {
        $doc.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        return false;
    });

    //SCROLL
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();

        if (scroll < 800) {
            $('#form-suspenso').removeClass('opacity');
        } else {
            $('#form-suspenso').addClass('opacity');
        }
    });
});

//FORM SUSPENSO

document.addEventListener("DOMContentLoaded", function () {
    let buttonSuspenso = document.querySelector('.button p');
    let buttonFormX = document.querySelector('.container-form .form .exit');
    let div = document.getElementById('form-suspenso');

    buttonSuspenso.onclick = function () {

        if (div.classList.contains('back')) {
            div.classList.remove('back');
        } else {
            div.classList.add('back');
            buttonSuspenso.classList.add('exit');
        }
    }

    buttonFormX.onclick = function () {
        div.classList.remove('back');
        buttonSuspenso.classList.remove('exit');
    }
});