<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="flex flex-col justify-center items-center h-auto min-h-[calc(100vh-64px)] text-center text-white px-4 bg-white">
        <div class="w-full max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6 shadow-lg rounded-lg">
                    <div class="w-full mx-auto">
                        <!-- Gambar -->
                        <img src="https://unima.ac.id/uploads/img_logo/1650416196421.png" alt="Logo Unima"
                            class="w-32 h-32 mx-auto sm:w-40 sm:h-40 lg:w-48 lg:h-48 rounded-lg">

                        <!-- Judul -->
                        <h1 class="mt-8 text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl lg:text-4xl">
                            PERPUSTAKAAN UNIVERSITAS NEGERI MANADO
                        </h1>

                        <!-- Deskripsi -->
                        <p
                            class="mt-4 w-full text-sm sm:text-base md:text-lg text-justify indent-8 text-gray-700 leading-relaxed">
                            Perpustakaan Universitas Negeri Manado (UNIMA) adalah pusat informasi dan pembelajaran yang
                            dirancang untuk mendukung aktivitas akademik, penelitian, dan pengembangan ilmu pengetahuan
                            di lingkungan universitas. Dengan koleksi yang beragam, mulai dari buku teks, jurnal ilmiah,
                            skripsi, hingga sumber digital, perpustakaan ini menjadi pusat referensi yang komprehensif
                            bagi mahasiswa, dosen, dan staf akademik.
                            Mengintegrasikan teknologi modern, perpustakaan UNIMA menyediakan layanan digital yang
                            memungkinkan akses ke e-book, jurnal elektronik, dan database ilmiah internasional. Ruang
                            baca yang nyaman, area diskusi, dan fasilitas multimedia menjadikan perpustakaan ini sebagai
                            tempat yang ideal untuk belajar dan berkolaborasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
