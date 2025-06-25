document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('imageSlider');
    const slides = document.querySelectorAll('.slide-link');
    const prevBtn = document.querySelector('.slider-prev');
    const nextBtn = document.querySelector('.slider-next');
    let currentSlide = 0;
    // Šířka jednoho slidu v px
    const slideWidth = 250; 
    let slideInterval;

    // Funkce pro posun na konkrétní slide
    function goToSlide(n) {
        currentSlide = (n + slides.length) % slides.length;
        slider.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    }

    // Automatické posouvání
    function startSlider() {
        slideInterval = setInterval(() => {
            goToSlide(currentSlide + 1);
        }, 5000);
    }

    // Pozastavení automatického posouvání
    function pauseSlider() {
        clearInterval(slideInterval);
    }

    // Event listeners pro tlačítka
    prevBtn.addEventListener('click', () => {
        pauseSlider();
        goToSlide(currentSlide - 1);
    });

    nextBtn.addEventListener('click', () => {
        pauseSlider();
        goToSlide(currentSlide + 1);
    });

    // Pozastavení při najetí myší
    slider.addEventListener('mouseenter', pauseSlider);
    slider.addEventListener('mouseleave', startSlider);

    // Klávesová navigace
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') goToSlide(currentSlide - 1);
        if (e.key === 'ArrowRight') goToSlide(currentSlide + 1);
    });

    // Inicializace
    goToSlide(0);
    startSlider();
});