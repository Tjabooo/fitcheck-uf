const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.carousel-button.right');
const prevButton = document.querySelector('.carousel-button.left');
const slideWidth = slides[0].getBoundingClientRect().width;
let currentIndex = 0;

slides.forEach((slide, index) => {
    slide.style.left = `${slideWidth * index}px`;
});

function moveToSlide(track, currentIndex) {
    track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

nextButton.addEventListener('click', () => {
    if (currentIndex < slides.length - 3) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    moveToSlide(track, currentIndex);
});

prevButton.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = slides.length - 3;
    }
    moveToSlide(track, currentIndex);
});
