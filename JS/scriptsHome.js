document.addEventListener('DOMContentLoaded', () => {
   

    // Slider functionality
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
            dots[i].classList.toggle('active', i === index);
        });
        const offset = -index * 100;
        document.querySelector('.slider').style.transform = `translateX(${offset}%)`;
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            showSlide(currentIndex);
        });
    });

    // Auto slide
    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }, 5000);

    // "Read more" functionality
    document.querySelectorAll('.read-more').forEach(readMoreBtn => {
        readMoreBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const movieItem = e.target.closest('.movie-item');
            movieItem.querySelector('.short-desc').style.display = 'none';
            movieItem.querySelector('.full-desc').style.display = 'block';
        });
    });

    document.querySelectorAll('.read-less').forEach(readLessBtn => {
        readLessBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const movieItem = e.target.closest('.movie-item');
            movieItem.querySelector('.full-desc').style.display = 'none';
            movieItem.querySelector('.short-desc').style.display = 'block';
        });
    });
});
