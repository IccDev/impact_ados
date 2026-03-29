document.addEventListener('DOMContentLoaded', function () {
    var carousels = document.querySelectorAll('.carousel');

    if (!carousels.length) {
        return;
    }

    Array.prototype.forEach.call(carousels, function (carousel) {
        var track = carousel.querySelector('.carousel-track');
        var slides = carousel.querySelectorAll('.carousel-slide');
        var prevBtn = carousel.querySelector('.carousel-btn.prev');
        var nextBtn = carousel.querySelector('.carousel-btn.next');
        var dotsContainer = carousel.querySelector('.carousel-dots');
        var currentIndex = 0;
        var slideCount = slides.length;
        var dots = [];
        var timer = null;

        if (!track || slideCount < 1) {
            return;
        }

        function updateCarousel() {
            track.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';

            for (var i = 0; i < dots.length; i++) {
                dots[i].className = 'carousel-dot' + (i === currentIndex ? ' active' : '');
            }
        }

        function goToSlide(index) {
            if (index < 0) {
                currentIndex = slideCount - 1;
            } else if (index >= slideCount) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }

            updateCarousel();
        }

        function createDots() {
            if (!dotsContainer) {
                return;
            }

            dotsContainer.innerHTML = '';
            dots = [];

            for (var i = 0; i < slideCount; i++) {
                (function (index) {
                    var dot = document.createElement('button');
                    dot.type = 'button';
                    dot.className = 'carousel-dot' + (index === 0 ? ' active' : '');
                    dot.setAttribute('aria-label', 'Aller à la photo ' + (index + 1));

                    dot.addEventListener('click', function () {
                        goToSlide(index);
                        restartAutoplay();
                    });

                    dotsContainer.appendChild(dot);
                    dots.push(dot);
                })(i);
            }
        }

        function restartAutoplay() {
            if (timer) {
                clearInterval(timer);
                timer = null;
            }

            timer = setInterval(function () {
                goToSlide(currentIndex + 1);
            }, 4000);
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function () {
                goToSlide(currentIndex - 1);
                restartAutoplay();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function () {
                goToSlide(currentIndex + 1);
                restartAutoplay();
            });
        }

        createDots();
        updateCarousel();
        restartAutoplay();

        carousel.addEventListener('mouseenter', function () {
            if (timer) {
                clearInterval(timer);
                timer = null;
            }
        });

        carousel.addEventListener('mouseleave', function () {
            restartAutoplay();
        });
    });
});