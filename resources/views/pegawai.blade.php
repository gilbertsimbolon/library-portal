<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="flex flex-col justify-start items-center pt-14 min-h-screen text-center px-6 bg-white">
        <div class="w-5/6 mx-auto text-left flex-1">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-serif text-center text-gray-900"
                style="letter-spacing: 2px">
                Pegawai Perpustakaan
            </h2>
            <div class="py-12 sm:py-16 lg:py-24">
                <div class="mx-auto grid max-w-8xl gap-6 sm:gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <div class="mr-4 ml-4">
                        <h2
                            class="text-xl sm:text-2xl lg:text-3xl font-semibold font-serif tracking-tight text-gray-900 text-left">
                            Pegawai<br>&<br>Staff
                        </h2>
                        <p class="mt-4 text-sm sm:text-base lg:text-lg text-gray-600 text-justify indent-5">
                            Selamat datang di halaman pegawai Perpustakaan Universitas Negeri Manado (UNIMA).
                            Halaman ini menyediakan informasi lengkap tentang tim profesional yang bertanggung jawab
                            dalam pengelolaan perpustakaan kami. Dari pustakawan hingga staf administrasi,
                            setiap pegawai berperan penting dalam mendukung layanan akademik dan riset terbaik
                            bagi mahasiswa dan dosen.
                        </p>
                    </div>

                    <ul role="list"
                        class="grid gap-x-2 gap-y-8 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-5 xl:col-span-3 text-left ml-4 mr-4">
                        @foreach ($employees as $d)
                        <li>
                            <div class="flex items-center gap-x-6">
                                <div>
                                    <h3 class="text-base sm:text-lg font-semibold tracking-tight text-gray-900">
                                        {{ $d->nama }}
                                    </h3>
                                    <p class="text-sm sm:text-base font-semibold text-indigo-600">
                                        {{ $d->jabatan }}
                                    </p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>