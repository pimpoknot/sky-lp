$(document).ready(function () {
    $('.owl-carousel.info-carousel').owlCarousel({
        margin: 5,
        nav: false,
        dots: false,
        items: 1,
        loop: false,
    });

    $('.toright.arrow-info').click(function () {
        $('.owl-carousel.info-carousel').trigger('next.owl.carousel');
    });

    $('.toleft.arrow-info').click(function () {
        $('.owl-carousel.info-carousel').trigger('prev.owl.carousel');
    });
});

document.addEventListener('DOMContentLoaded', function () {

    if (document.querySelector('.info-carousel')) {
        setTimeout(function () {

            let slide = document.querySelectorAll('.info-carousel .owl-item');

            let slidetotal = document.querySelectorAll('.info-carousel');
            let ultimo = slide.length - 1;

            let arrows = document.querySelectorAll('.arrow-info');

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
});