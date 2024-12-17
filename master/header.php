<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">

</head>

<body class="bg-gray-100 text-gray-900">
    <header class="">
        <nav class="bg-blue-600 p-4">
            <div class="max-w-7xl mx-auto flex justify-between items-center">

                <!-- Logo -->
                <a href="#" class="text-2xl font-bold text-white">NO</a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="text-white hover:text-gray-300">Home</a>
                    <a href="#" class="text-white hover:text-gray-300">About</a>
                    <a href="#" class="text-white hover:text-gray-300">Services</a>
                    <a href="#" class="text-white hover:text-gray-300">Contact</a>
                </div>

                <!-- Mobile Menu Toggle Button -->
                <div class="md:hidden">
                    <button id="menuButton" class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="md:hidden hidden">
                <div class="space-y-4 py-4">
                    <a href="#" class="block text-white hover:text-gray-300 px-4">Home</a>
                    <a href="#" class="block text-white hover:text-gray-300 px-4">About</a>
                    <a href="#" class="block text-white hover:text-gray-300 px-4">Services</a>
                    <a href="#" class="block text-white hover:text-gray-300 px-4">Contact</a>
                </div>
            </div>
        </nav>
    </header>