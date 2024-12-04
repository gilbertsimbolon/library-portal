<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="flex flex-col justify-start items-center pt-14 h-[calc(100vh-64px)] text-center text-white px-6 bg-white">
        <div class="w-5/6 mx-auto text-center h-auto">
            <h2 class="text-5xl font-bold font-serif text-gray-900" style="letter-spacing: 2px">GALERI</h2>
            <div class="container mx-auto text-center mt-20 drop-shadow-2xl">
                <!-- Galeri Gambar Besar (Jumbotron-like) -->
                <div class="relative overflow-hidden w-full h-[300px] sm:h-[500px]">
                    <div id="image-slider" class="flex transition-all duration-500 ease-in-out">
                        <!-- Gambar pertama -->
                        <div class="w-full flex-shrink-0">
                            <img src="https://unima.ac.id/uploads/img_galeri/1650442785693.jpg" alt="Gambar 1"
                                class="w-full h-full object-cover rounded-lg shadow-lg">
                        </div>
                        <!-- Gambar kedua -->
                        <div class="w-full flex-shrink-0">
                            <img src="https://unima.ac.id/uploads/img_galeri/1650442785693.jpg" alt="Gambar 2"
                                class="w-full h-full object-cover rounded-lg shadow-lg">
                        </div>
                        <!-- Gambar ketiga -->
                        <div class="w-full flex-shrink-0">
                            <img src="https://unima.ac.id/uploads/img_galeri/1650442785693.jpg" alt="Gambar 3"
                                class="w-full h-full object-cover rounded-lg shadow-lg">
                        </div>
                        <!-- Gambar keempat -->
                        <div class="w-full flex-shrink-0">
                            <img src="https://unima.ac.id/uploads/img_galeri/1650442785693.jpg" alt="Gambar 4"
                                class="w-full h-full object-cover rounded-lg shadow-lg">
                        </div>
                        <!-- Gambar kelima -->
                        <div class="w-full flex-shrink-0">
                            <img src="https://unima.ac.id/uploads/img_galeri/1650442785693.jpg" alt="Gambar 5"
                                class="w-full h-full object-cover rounded-lg shadow-lg">
                        </div>
                    </div>

                    <!-- Tombol Navigasi Kiri -->
                    <button id="prev-btn"
                        class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black text-white p-2 rounded-full cursor-pointer">
                        <span class="text-lg">‹</span>
                    </button>

                    <!-- Tombol Navigasi Kanan -->
                    <button id="next-btn"
                        class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black text-white p-2 rounded-full cursor-pointer">
                        <span class="text-lg">›</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentIndex = 0; // Untuk melacak gambar yang sedang ditampilkan
        const images = document.querySelectorAll('#image-slider > div'); // Mengambil semua gambar
        const totalImages = images.length;
        const slider = document.getElementById('image-slider');

        // Tombol Next (Kanan)
        document.getElementById('next-btn').addEventListener('click', () => {
            if (currentIndex < totalImages - 1) {
                currentIndex++;
            } else {
                currentIndex = 0; // Jika sudah gambar terakhir, kembali ke pertama
            }
            updateSliderPosition();
        });

        // Tombol Prev (Kiri)
        document.getElementById('prev-btn').addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalImages - 1; // Jika sudah gambar pertama, ke gambar terakhir
            }
            updateSliderPosition();
        });

        // Fungsi untuk mengupdate posisi slider
        function updateSliderPosition() {
            const offset = -currentIndex * 100; // Menggeser gambar berdasarkan indeks
            slider.style.transform = `translateX(${offset}%)`;
        }
    </script>
</x-app-layout>