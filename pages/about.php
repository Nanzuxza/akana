<!-- Our Story Section -->
<section class="py-32 bg-gradient-to-b from-gray-50 to-white overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 relative group">
                <div class="absolute -inset-2 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-xl opacity-75 blur-lg group-hover:opacity-100 transition duration-300"></div>
                <img src="./img/logoAkana.jpg" alt="Tailor at work" class="relative rounded-xl shadow-2xl w-full object-cover transform group-hover:scale-[1.02] transition duration-300">
            </div>
            <div class="md:w-1/2">
                <h1 class="text-5xl lg:text-6xl font-extrabold mb-8 bg-clip-text text-transparent bg-gradient-to-r from-gray-800 to-gray-600">
                    Our Story
                </h1>
                <div class="space-y-6 text-lg text-gray-600 leading-relaxed">
                    <p class="transform hover:translate-x-2 transition-transform duration-300">
                        Founded in 2013 by Rani Suryani, Akana Atelier is known for its precision and elegance in women's fashion. Our reputation is built on trust and quality.
                    </p>
                    <p class="transform hover:translate-x-2 transition-transform duration-300">
                        We merge tradition with contemporary techniques to craft attire that embodies artistry and sophistication.
                    </p>
                    <p class="transform hover:translate-x-2 transition-transform duration-300">
                        Our passion for perfection ensures that each piece we create is more than just clothing—it is a masterpiece.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Process Section -->
<section class="py-32 bg-white relative">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-yellow-50 to-transparent opacity-50"></div>
    <div class="container mx-auto px-6 relative">
        <h2 class="text-4xl lg:text-5xl font-extrabold text-center mb-16 bg-clip-text text-transparent bg-gradient-to-r from-gray-800 to-gray-600">
            Our Process
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <?php
            $steps = [
                [
                    'icon' => '<svg class="w-16 h-16 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>',
                    'title' => 'Consultation',
                    'description' => 'Understanding your unique style and vision through personal consultation sessions.'
                ],
                [
                    'icon' => '<svg class="w-16 h-16 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>',
                    'title' => 'Measurement',
                    'description' => 'Ensuring the perfect fit tailored to your unique body measurements and preferences.'
                ],
                [
                    'icon' => '<svg class="w-16 h-16 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/></svg>',
                    'title' => 'Crafting',
                    'description' => 'Bringing your vision to life with expert techniques and meticulous attention to detail.'
                ]
            ];

            foreach ($steps as $step) {
                echo '<div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">';
                echo '<div class="bg-yellow-50 w-24 h-24 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-yellow-100 transition-colors duration-300">';
                echo $step['icon'];
                echo '</div>';
                echo '<h3 class="text-2xl font-semibold text-gray-800 mb-4">' . $step['title'] . '</h3>';
                echo '<p class="text-gray-600 leading-relaxed">' . $step['description'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-32 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl lg:text-5xl font-extrabold text-center mb-16 bg-clip-text text-transparent bg-gradient-to-r from-gray-800 to-gray-600">
            Meet Our Team
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php
            $team_members = [
                [
                    'name' => 'Rani Suryani',
                    'position' => 'Fashion Designer',
                    'image' => './img/tanterani.jpeg',
                    'bio' => 'Founder and lead designer with over 10 years of experience.'
                ],
                [
                    'name' => 'Louisa Edenia',
                    'position' => 'Creative Editor',
                    'image' => './img/louis.jpg',
                    'bio' => 'Brings creative vision to life through innovative design concepts.'
                ],
                [
                    'name' => 'Keiza Valerie',
                    'position' => 'Media & Marketing',
                    'image' => './img/kai.jpeg',
                    'bio' => 'Crafts our brand story and connects with our community.'
                ],
                [
                    'name' => 'Idar Arianty',
                    'position' => 'Seamstress',
                    'image' => './img/fotoabout.jpeg',
                    'bio' => 'Master of precision craftsmanship and detailed finishing.'
                ]
            ];

            foreach ($team_members as $member) {
                echo '<div class="group">';
                echo '<div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform group-hover:-translate-y-2">';
                echo '<div class="relative overflow-hidden">';
                echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '" class="w-full h-80 object-cover transform group-hover:scale-110 transition duration-700 ease-out">';
                echo '<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>';
                echo '</div>';
                echo '<div class="p-6">';
                echo '<h3 class="text-xl font-semibold text-gray-800 mb-1">' . $member['name'] . '</h3>';
                echo '<p class="text-yellow-500 font-medium mb-3">' . $member['position'] . '</p>';
                echo '<p class="text-gray-600 text-sm">' . $member['bio'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

<style>
    /* Smooth Scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Enhanced Focus States */
    a:focus-visible,
    button:focus-visible {
        outline: 2px solid #fbbf24;
        outline-offset: 2px;
    }

    /* Gradient Text Animation */
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .gradient-animate {
        animation: gradient 6s ease infinite;
        background-size: 200% 200%;
    }
</style>