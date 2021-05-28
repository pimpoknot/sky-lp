$(document).ready(function () {
    $('.owl-carousel.imagens-carousel').owlCarousel({
        margin: 5,
        nav: false,
        dots: false,
        items: 1,
        loop: false,
    });

    $('.toright.arrow-imagem').click(function () {
        $('.owl-carousel.imagens-carousel').trigger('next.owl.carousel');
    });

    $('.toleft.arrow-imagem').click(function () {
        $('.owl-carousel.imagens-carousel').trigger('prev.owl.carousel');
    });
});

document.addEventListener('DOMContentLoaded', function () {

    if (document.querySelector('.imagens-carousel')) {
        setTimeout(function () {

            let slide = document.querySelectorAll('.imagens-carousel .owl-item');

            let slidetotal = document.querySelectorAll('.imagens-carousel');
            let ultimo = slide.length - 1;

            let arrows = document.querySelectorAll('.arrow-imagem');

            function remover() {
                if (slide[0].classList.contains('active')) {
                    arrows[0].classList.add('d-none');
                    arrows[1].classList.remove('d-none');
                } else if (slide[ultimo].classList.contains('active')) {
                    arrows[0].classList.remove('d-none');
                    arrows[1].classList.add('d-none');
                } else {
                    arrows[0].classList.remove('d-none');
                    arrows[1].classList.remove('d-none');
                }
            }

            remover();

            for (let itens of arrows) {
                itens.onclick = function () {
                    remover();
                };
            }

            for (let itens of slidetotal) {
                itens.ondrag = function () {
                    remover();
                }
            }
        }, 300)
    }

    setInterval(function () {
        const imagemsrc = $('.imagens-carousel .owl-item.active img').attr('src');
        $("#ampliar").attr("href", imagemsrc);

        function alterar() {
            const imagemsrc = $('.imagens-carousel .owl-item.active img').attr('src');

            $("#ampliar").attr("href", imagemsrc);
        }

        var $seta = $('.arrow-imagem');

        $seta.onClick = alterar;
        $seta.ontouchstart = alterar;

    }, 500);
});