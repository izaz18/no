<footer class="bg-gray-800 text-white p-4 text-center">
    <p>&copy; 2024 My Tailwind Project</p>
  </footer>
<!-- jQuery (necessary for Owl Carousel) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

  <script>
    // Toggle mobile menu
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
