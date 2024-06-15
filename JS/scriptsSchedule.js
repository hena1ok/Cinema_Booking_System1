document.addEventListener("DOMContentLoaded", function () {
   
    const categoryToggle = document.querySelector('.category-toggle');
    const categoryList = document.querySelector('.category-list');
    const searchInput = document.getElementById("search");
    const categoryCheckboxes = document.querySelectorAll(".category-item input[type='checkbox']");
    const movieCards = document.querySelectorAll(".movie-card");

    
    // Filter movies on search input or category checkbox change
    searchInput.addEventListener("input", filterMovies);
    categoryCheckboxes.forEach(checkbox => checkbox.addEventListener("change", filterMovies));

    function filterMovies() {
        const searchText = searchInput.value.trim().toLowerCase();
        const selectedCategories = Array.from(categoryCheckboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.name.toLowerCase());

        movieCards.forEach(card => {
            const title = card.getAttribute("data-title").toLowerCase();
            const categories = card.getAttribute("data-category").toLowerCase().split(',').map(cat => cat.trim());
            const country = card.getAttribute("data-country").toLowerCase();

            const matchesSearch = title.includes(searchText);
            const matchesCategories = selectedCategories.length === 0 || categories.some(cat => selectedCategories.includes(cat));
            const matchesCountry = selectedCategories.length === 0 || country.includes(selectedCategories);

            const shouldDisplay = matchesSearch && (matchesCategories||matchesCountry);
            card.style.display = shouldDisplay ? "flex" : "none";
        });

        // Update checkbox label styling based on checked state
        categoryCheckboxes.forEach(checkbox => {
            const label = checkbox.parentElement;
            label.classList.toggle('checked', checkbox.checked);
        });
    }

    // Toggle video trailer visibility
    function toggleVideo() {
        const trailer = document.querySelector('.trailer');
        trailer.style.display = trailer.style.display === 'flex' ? 'none' : 'flex';
        const video = document.querySelector('.trailer-content video');
        if (trailer.style.display === 'none') {
            video.pause();
        } else {
            video.play();
        }
    }

    // Play trailer on button click
    document.querySelectorAll('.play-trailer').forEach(button => {
        button.addEventListener('click', function () {
            const trailer = document.querySelector('.trailer');
            const video = document.querySelector('.trailer-content video');
            const trailerPath = this.getAttribute('data-trailer');
            video.src = `../Assets/ScheduleAssets/trailers/${trailerPath}`;
            trailer.style.display = 'flex';
            video.play();
        });
    });

    // Close trailer on close button click
    document.querySelector('.trailer .btn.close').addEventListener('click', toggleVideo);

    // Book ticket on button click
    
});
document.addEventListener('DOMContentLoaded', function () {
    const categoryToggle = document.querySelector('.category-toggle');
    const categoryList = document.querySelector('.category-list');

    categoryToggle.addEventListener('click', function () {
        categoryList.classList.toggle('active');
    });
});
