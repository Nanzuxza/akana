<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center mb-12">Our Services</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <?php
            $services = [
                [
                    'title' => 'Akana Suits',
                    'description' => 'At Akana Atelier, we believe in the artistry of bespoke tailoring, and now we are inviting you to join us on a journey to master this timeless craft. Our tailored course is designed for individuals who are passionate about learning the intricate skills of garment creation, whether you\'re a beginner or someone looking to enhance your existing knowledge.',
                    'image' => 'https://images.unsplash.com/photo-1594938298603-c8148c4dae35?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80'
                ],
                [
                    'title' => 'Custom Shirts',
                    'description' => 'Elevate your wardrobe with our custom-made shirts. Choose from a wide range of fabrics, collar styles, and cuff options to create a shirt that\'s uniquely yours and perfectly fitted.',
                    'image' => 'https://images.unsplash.com/photo-1617127365659-c47fa864d8bc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80'
                ],
                [
                    'title' => 'Wedding Attire',
                    'description' => 'Make your special day even more memorable with our bespoke wedding attire. From elegant suits for grooms to stunning dresses for brides, we ensure you look your absolute best on your big day.',
                    'image' => 'https://images.unsplash.com/photo-1549417229-aa67d3263c09?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80'
                ],
                [
                    'title' => 'Alterations',
                    'description' => 'Transform your existing garments with our expert alteration services. Whether it\'s adjusting the fit of a beloved suit or updating the style of a cherished dress, our skilled tailors can breathe new life into your wardrobe.',
                    'image' => 'https://images.unsplash.com/photo-1556905055-8f358a7a47b2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80'
                ]
            ];

            foreach ($services as $service) {
                echo '<div class="bg-gray-100 rounded-lg overflow-hidden shadow-md flex flex-col">';
                echo '<img src="' . $service['image'] . '" alt="' . $service['title'] . '" class="w-full h-64 object-cover">';
                echo '<div class="p-6 flex flex-col flex-grow">';
                echo '<h2 class="text-2xl font-semibold mb-4">' . $service['title'] . '</h2>';
                echo '<p class="text-gray-600 mb-4 flex-grow">' . $service['description'] . '</p>';
                echo '<a href="index.php?page=contact" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-2 px-4 rounded inline-block text-center">Book Now</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Why Choose Akana Atelier?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php
            $reasons = [
                [
                    'icon' => '<svg class="h-12 w-12 text-gold-500 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>',
                    'title' => 'Unparalleled Quality',
                    'description' => 'We use only the finest materials and time-honored techniques to create garments of exceptional quality.'
                ],
                [
                    'icon' => '<svg class="h-12 w-12 text-gold-500 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/></svg>',
                    'title' => 'Perfect Fit Guarantee',
                    'description' => 'Our expert tailors ensure that every garment fits you perfectly, or we\'ll alter it until it does.'
                ],
                [
                    'icon' => '<svg class="h-12 w-12 text-gold-500 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/></svg>',
                    'title' => 'Personalized Service',
                    'description' => 'From consultation to final fitting, we provide attentive, personalized service to meet your unique needs.'
                ]
            ];

            foreach ($reasons as $reason) {
                echo '<div class="bg-white p-6 rounded-lg shadow-md text-center">';
                echo $reason['icon'];
                echo '<h3 class="text-xl font-semibold mb-4">' . $reason['title'] . '</h3>';
                echo '<p class="text-gray-600">' . $reason['description'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>
