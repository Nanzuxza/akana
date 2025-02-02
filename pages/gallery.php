<!-- New Arrivals Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl font-bold text-gray-800 mb-6">New Arrivals!</h2>
        <p class="text-xl text-gray-600 mb-12">Discover our latest tailor-made designs, crafted with precision and elegance.</p>
        
        <div class="flex justify-center">
            <div class="overflow-hidden transition-transform hover:scale-105 transform-gpu">
                <img 
                    src="https://images.unsplash.com/photo-1594938298603-c8148c4dae35?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80" 
                    alt="Luxury Custom Suit" 
                    class="w-full max-w-lg h-auto object-cover shadow-xl rounded-lg"
                >
                <div class="mt-6">
                    <h3 class="text-2xl font-semibold text-gray-800">Luxury Custom Suit</h3>
                    <p class="text-gray-600 mt-2">Tailored to perfection with high-end fabric for a premium feel.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-20 bg-white" x-data="{ 
    selected: null, 
    galleryItems: [
        {image: 'https://images.unsplash.com/photo-1594938298603-c8148c4dae35?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80', title: 'Custom Navy Suit'},
        {image: 'https://images.unsplash.com/photo-1593030761757-71fae45fa0e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80', title: 'Tailored Wedding Dress'},
        {image: 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80', title: 'Bespoke Tuxedo'},
        {image: 'https://images.unsplash.com/photo-1490707967831-1fd9b48e40e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80', title: 'Altered Evening Gown'},
        {image: 'https://images.unsplash.com/photo-1598522325074-042db73aa4e6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80', title: 'Custom Blazer'},
        {image: 'https://images.unsplash.com/photo-1617127365659-c47fa864d8bc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80', title: 'Tailored Shirt'}
    ],
    nextImage() {
        this.selected = this.selected === this.galleryItems.length - 1 ? 0 : this.selected + 1;
    },
    prevImage() {
        this.selected = this.selected === 0 ? this.galleryItems.length - 1 : this.selected - 1;
    }
}" @click.away="selected = null">
    <div class="container mx-auto px-4 sm:px-6">
        <h1 class="text-4xl font-bold text-center mb-12 text-gray-800">Our Gallery</h1>
        <div class="w-full overflow-x-auto">
            <div class="flex space-x-6 pb-6">
                <template x-for="(item, index) in galleryItems" :key="index">
                    <div 
                        class="group relative bg-gray-100 rounded-lg overflow-hidden shadow-lg cursor-pointer transition-transform hover:scale-105 transform-gpu flex-shrink-0 w-80 h-96"
                        @click="selected = index">
                        <img 
                            :src="item.image" 
                            :alt="item.title" 
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 transform-gpu"
                        >
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <h3 class="text-white text-xl font-semibold text-center" x-text="item.title"></h3>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <!-- Lightbox with Slider -->
    <div
        x-show="selected !== null"
        class="fixed inset-0 bg-black/90 flex items-center justify-center z-50 p-4"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        <div 
            x-show="selected !== null"
            class="relative max-w-2xl sm:max-w-3xl md:max-w-4xl w-full mx-4"
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            
            <!-- Close Button -->
            <button 
                @click="selected = null" 
                class="absolute -top-10 right-0 text-white text-3xl font-bold hover:text-gray-300 z-60">
                &times;
            </button>

            <!-- Navigation Buttons -->
            <button 
                @click="prevImage"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white/50 hover:bg-white/75 p-3 rounded-full ml-4 z-50 transition-all">
                &#10094;
            </button>
            <button 
                @click="nextImage"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white/50 hover:bg-white/75 p-3 rounded-full mr-4 z-50 transition-all">
                &#10095;
            </button>

            <!-- Image Display -->
            <img 
                x-show="selected !== null"
                :src="galleryItems[selected].image"
                :alt="galleryItems[selected].title"
                class="w-full max-h-[80vh] object-contain bg-white rounded-lg shadow-2xl"
            >
            
            <!-- Title -->
            <div class="mt-4 text-center bg-white rounded-b-lg p-4">
                <h3 x-text="galleryItems[selected]?.title" class="text-xl font-semibold text-gray-800"></h3>
            </div>
        </div>
    </div>
</section>