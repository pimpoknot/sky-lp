$(document).ready(function () {
    let owl = $('.owl-carousel.plantas-carousel').owlCarousel({
        margin: 5,
        nav: false,
        dots: true,
        dotsData: true,
        items: 1,
        loop: false,
    });

    $('.toright.arrow-plantas').click(function () {
        $('.owl-carousel.plantas-carousel').trigger('next.owl.carousel');
    });

    $('.toleft.arrow-plantas').click(function () {
        $('.owl-carousel.plantas-carousel').trigger('prev.owl.carousel');
    });

    $('.owl-dot').click(function () {
        owl.trigger('to.owl.carousel', [$(this).index(), 1000]);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    if (document.querySelector('.plantas-carousel')) {
        setTimeout(function () {

            let slide = document.querySelectorAll('.plantas-carousel .owl-item');

            let slidetotal = document.querySelectorAll('.plantas-carousel');
            let ultimo = slide.length - 1;

            let arrows = document.querySelectorAll('.arrow-plantas');

            function remover() {
                if (slide[0].classList.contains('active')) {
                    arrows[0].classList.add('d-none');
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