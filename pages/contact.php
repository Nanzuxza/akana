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

<!-- Call-to-Action Section -->
<!-- <section class="py-20 bg-indigo-600">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Have Questions? We're Here to Help!</h2>
        <p class="text-lg text-indigo-100 mb-8">Reach out to us via phone or email, and we'll get back to you as soon as possible.</p>
        <div class="flex justify-center space-x-4">
            <a href="tel:+628884377084" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-indigo-50 transform hover:scale-105 transition duration-300">
                Call Us Now
            </a>
            <a href="mailto:info@akanaatelier.com" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-indigo-600 transform hover:scale-105 transition duration-300">
                Email Us
            </a>
        </div>
    </div>
</section> -->

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
                if ($faq !== reset($faqs)) {
                    echo '<hr class="border-t border-gray-200">';
            }
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