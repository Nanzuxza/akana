<header class="bg-white shadow-md sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="index.php" class="text-2xl font-bold text-gray-800 hover:text-yellow-500 transition-colors duration-300">
                AKANA ATELIER
            </a>

            <!-- Hamburger Menu (Mobile) -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden focus:outline-none">
                <svg class="h-6 w-6 text-gray-800 hover:text-yellow-500 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="text-gray-600 hover:text-yellow-500 transform hover:scale-105 transition duration-300 ease-in-out">Home</a>
                <a href="?page=about" class="text-gray-600 hover:text-yellow-500 transform hover:scale-105 transition duration-300 ease-in-out">About</a>
                <a href="?page=gallery" class="text-gray-600 hover:text-yellow-500 transform hover:scale-105 transition duration-300 ease-in-out">Gallery</a>
                <!-- <a href="?page=contact" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-full transform hover:scale-105 transition duration-300 ease-in-out">Book Now</a> -->
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" class="md:hidden mt-4">
            <div class="flex flex-col space-y-4">
                <a href="index.php" class="text-gray-600 hover:text-yellow-500 transform hover:scale-105 transition duration-300 ease-in-out">Home</a>
                <a href="?page=about" class="text-gray-600 hover:text-yellow-500 transform hover:scale-105 transition duration-300 ease-in-out">About</a>
                <a href="?page=gallery" class="text-gray-600 hover:text-yellow-500 transform hover:scale-105 transition duration-300 ease-in-out">Gallery</a>
                <!-- <a href="?page=contact" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-full transform hover:scale-105 transition duration-300 ease-in-out text-center">Book Now</a> -->
            </div>
        </div>
    </nav>
</header>