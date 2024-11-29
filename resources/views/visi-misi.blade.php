<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col justify-start items-center pt-14 h-[calc(100vh-64px)] text-center text-white px-6">
            <div class="max-w-7xl mx-auto text-center h-4/6">
                <h2 class="text-5xl font-bold font-serif text-gray-900" style="letter-spacing: 3px">VISI & MISI</h2>
                <div class="mt-12 flex flex-col lg:flex-row gap-10 font-serif h-full">
                        <!-- Bagian Visi -->
                    <div class="flex-1 px-8 py-8">
                        <h3 class="text-3xl font-semibold text-gray-800 text-left">VISI</h3>
                        <p class="mt-4 text-lg text-gray-700 text-justify tracking-wide">
                        Menyediakan perpustakaan yang unggul dengan fasilitas yang lengkap dan mampu memberikan pelayanan yang berkualitas kepada pengguna dengan berbasis pada teknologi. 
                        </p>    
                    </div>

                    <!-- Garis Vertikal -->
                    <div class="border-l-2 border-gray-300 min-h-full mx-4"></div>

                    <!-- Bagian Misi -->
                    <div class="flex-1 px-8 py-8">
                        <h3 class="text-3xl font-semibold text-gray-800 text-right">MISI</h3>                           
                        <p class="mt-4 text-lg text-gray-700 text-justify tracking-wide">
                            1. Menyelenggarakan pendidikan tinggi yang berkualitas dan relevan dengan kebutuhan masyarakat.<br>
                            2. Melakukan penelitian untuk pengembangan ilmu pengetahuan yang bermanfaat bagi masyarakat.<br>
                            3. Mengabdi kepada masyarakat melalui pengabdian yang berbasis pada penelitian dan pengembangan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
