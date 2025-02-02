<!-- Hero Section -->
<section class="relative min-h-screen flex items-center bg-gray-900 text-white overflow-hidden">
    <!-- Background Image with Parallax Effect -->
    <div class="absolute inset-0 bg-center bg-cover bg-fixed z-0 transform scale-105 parallax"
        style="background-image: url('./img/fotobg.jpg');">
    </div>

    <!-- Enhanced Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/85 to-transparent z-10"></div>

    <!-- Content -->
    <div class="container mx-auto px-6 py-32 md:py-40 relative z-20">
        <div class="max-w-4xl">
            <h1 class="text-5xl md:text-7xl font-bold mb-8 leading-tight opacity-0 animate-slide-up">
                Attire for your <br>
                <span class="bg-gradient-to-r from-yellow-400 to-yellow-200 text-transparent bg-clip-text">
                    special moments.
                </span>
            </h1>
            <p class="text-xl md:text-2xl mb-12 max-w-2xl text-gray-200 opacity-0 animate-slide-up-delay-1">
                Experience the art of perfect tailoring at Akana Atelier. Where precision meets style, and every garment tells a unique story.
            </p>
            <div class="space-x-4 opacity-0 animate-slide-up-delay-2">
                <!-- <a href="index.php?page=contact"
                    class="inline-block bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 text-gray-900 font-bold py-4 px-8 rounded-full text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                    Book an Appointment
                </a> -->
                <a href="index.php?page=gallery"
                    class="inline-block bg-transparent border-2 border-white text-white hover:bg-white hover:text-gray-900 font-bold py-4 px-8 rounded-full text-lg transition-all duration-300">
                    View Gallery
                </a>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-white to-transparent z-20"></div>
</section>

<!-- Services Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-6">
            Our Signature Services
        </h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-16">
            Discover our range of premium tailoring services, each crafted with precision and dedication to bring your vision to life.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php
            $services = [
                [
                    'icon' => '<svg class="w-12 h-12 text-yellow-500 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>',
                    'title' => 'Custom Attire',
                    'description' => 'Crafted with precision and art, our custom attire is a testament to perfection of a masterpiece.',
                    'link' => 'index.php?page=services#custom'
                ],
                [
                    'icon' => '<svg class="w-12 h-12 text-yellow-500 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>',
                    'title' => 'Semi-Custom Attire',
                    'description' => 'Transform your existing fabric with our precision measurement. Perfect fit sizing guaranteed.',
                    'link' => 'index.php?page=services#semi-custom'
                ],
                [
                    'icon' => '<svg class="w-12 h-12 text-yellow-500 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>',
                    'title' => 'Bridal & Formal Wear',
                    'description' => 'Make your special day unforgettable with our custom bridal and formal wear services.',
                    'link' => 'index.php?page=services#bridal'
                ]
            ];

            foreach ($services as $service) {
                echo '<div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">';
                echo '<div class="bg-yellow-50 w-24 h-24 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-yellow-100 transition-colors duration-300">';
                echo $service['icon'];
                echo '</div>';
                echo '<h3 class="text-2xl font-semibold mb-4 text-gray-800">' . $service['title'] . '</h3>';
                echo '<p class="text-gray-600 mb-6">' . $service['description'] . '</p>';
                echo '<a href="' . $service['link'] . '" class="inline-flex items-center text-yellow-500 hover:text-yellow-600 font-medium">';
                echo 'Learn more <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>';
                echo '</a>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Find Us Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center mb-12 text-gray-800">Find Us</h1>
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Contact Information -->
            <div class="md:w-1/2">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Get in Touch</h2>
                <p class="text-gray-600 mb-6">We'd love to hear from you. Whether you have a question about our services, need to schedule an appointment, or just want to say hello, don't hesitate to reach out.</p>
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Visit Our Atelier</h3>
                    <p class="text-gray-600">Minasa Indah Residence</p>
                    <p class="text-gray-600">Blok D17, Gunung Sari, Kec. Rappocini</p>
                    <p class="text-gray-600">Makassar, Sulawesi Selatan 90223</p>
                </div>
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Contact Information</h3>
                    <p class="text-gray-600">Phone: <a href="tel:+628884377084" class="text-indigo-600 hover:text-indigo-800 transition-colors">(+62)888-4377-084</a></p>
                    <p class="text-gray-600">Email: <a href="mailto:info@akanaatelier.com" class="text-indigo-600 hover:text-indigo-800 transition-colors">info@akanaatelier.com</a></p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Business Hours</h3>
                    <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM</p>
                    <p class="text-gray-600">Saturday: 10:00 AM - 4:00 PM</p>
                    <p class="text-gray-600">Sunday: Closed</p>
                </div>
            </div>

            <!-- Google Maps Embed -->
            <div class="md:w-1/2">
                <div class="rounded-lg overflow-hidden shadow-lg transform transition duration-500 hover:scale-105">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1986.732582145083!2d119.45668117838065!3d-5.189318299078672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3d8472cbb3b%3A0x36e0c85a8a6d04e!2sAKANA%20ATELIER%20Studio%20Jahit!5e0!3m2!1sen!2sid!4v1738528228390!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Frequently Asked Questions</h2>
        <div class="space-y-6">
            <?php
            $faqs = [
                [
                    'question' => 'How long does it take to create a suit?',
                    'answer' => 'The process depends on the complexity of the design, the number of fittings required, and our booking lists.'
                ],
                [
                    'question' => 'Do you offer alterations for garments not purchased from Akana Atelier?',
                    'answer' => 'No, we only provide alterations for garments purchased from us conditionally.'
                ],
                [
                    'question' => 'What should I expect during my first consultation?',
                    'answer' => 'During your initial consultation, we\'ll discuss your style preferences, take precise measurements by online/offline appointment, and guide you through fabric and design options.'
                ],
                [
                    'question' => 'Do you offer wedding party packages?',
                    'answer' => 'Yes, we offer special packages for wedding parties. Whether you need attire for the party or just the bride, we can create a cohesive look for your special day.'
                ]
            ];

            foreach ($faqs as $faq) {
                echo '<div x-data="{ open: false }" class="border-b border-gray-200 pb-4">';
                echo '<button @click="open = !open" class="flex justify-between items-center w-full text-left focus:outline-none">';
                echo '<span class="text-lg font-semibold text-gray-800">' . $faq['question'] . '</span>';
                echo '<svg class="h-6 w-6 text-gray-500 transform transition-transform duration-300" :class="{ \'rotate-180\': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">';
                echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
                echo '</svg>';
                echo '</button>';
                echo '<div x-show="open" x-collapse class="mt-2">';
                echo '<p class="text-gray-600">' . $faq['answer'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>



<style>
    /* Enhanced Animations */
    @keyframes slide-up {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-up {
        animation: slide-up 1s ease-out forwards;
    }

    .animate-slide-up-delay-1 {
        animation: slide-up 1s ease-out 0.2s forwards;
    }

    .animate-slide-up-delay-2 {
        animation: slide-up 1s ease-out 0.4s forwards;
    }

    /* Parallax Effect */
    .parallax {
        will-change: transform;
        transition: transform 0.5s ease-out;
    }

    /* Smooth Scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Enhanced Focus States */
    a:focus-visible {
        outline: 2px solid #fbbf24;
        outline-offset: 2px;
    }
</style>