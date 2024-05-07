const button = document.querySelector('.projetsButton');
const imgs = document.querySelectorAll('.projetsImg');

button.addEventListener('mouseover', function() {
    imgs.forEach(img => {
        img.style.opacity = '0.5';
    });
});

button.addEventListener('mouseout', function() {
    imgs.forEach(img => {
        img.style.opacity = '1';
    });
});





const carousel = document.querySelector('.carousel');
const container = carousel.querySelector('.carouselContainer');
const items = carousel.querySelectorAll('.carouselItem');
const totalItems = items.length;
let currentIndex = 0;

function nextSlide() {
    if (currentIndex < totalItems - 1) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    updateCarousel();
}

function prevSlide() {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = totalItems - 1;
    }
    updateCarousel();
}

function updateCarousel() {
    const itemWidth = items[0].offsetWidth;
    container.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
}


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function wait() {
    while (true) {
        await sleep(3500);
        nextSlide();
    }
}

wait();
