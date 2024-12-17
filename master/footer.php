<footer class="bg-gray-800 text-white p-4 text-center">
    <p>&copy; 2024 My Tailwind Project</p>
</footer>
<!-- jQuery (necessary for Owl Carousel) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $(".hero-slider").owlCarousel({
            items: 1, // Number of items to show
            loop: true, // Infinite loop
            autoplay: true, // Enable autoplay
            autoplayTimeout: 3000, // Autoplay delay in ms
            nav: true, // Show next/prev navigation buttons
            dots: true, // Show pagination dots
            animateOut: 'fadeOut', // Animation on slide out
            animateIn: 'fadeIn', // Animation on slide in
        });
    });
    // Toggle mobile menu
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
</body>

</html>