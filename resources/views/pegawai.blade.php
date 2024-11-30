<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="flex flex-col justify-start items-center pt-14 h-[calc(100vh-64px)] text-center text-white px-6">
         <div class="w-5/6 mx-auto text-center h-5/6">
        <h2 class="text-5xl font-bold font-serif text-gray-900" style="letter-spacing: 2px">
            Pegawai Perpustakaan    
        </h2>
        <div class="py-24 sm:py-32">
            <div class="mx-auto grid max-w-8xl gap-25 xl:grid-cols-4">
                <div class="mr-4 ml-4">
                    <h2 class="text-pretty text-3xl font-semibold font-serif tracking-tight text-gray-900 sm:text-4xl text-left">
                        Pegawai<br>&<br>Staff
                    </h2>
                    <p class="mt-2 text-lg/8 text-gray-600 text-justify indent-5">Selamat datang di halaman pegawai Perpustakaan Universitas Negeri Manado (UNIMA).  
                    Halaman ini menyediakan informasi lengkap tentang tim profesional yang bertanggung jawab  
                    dalam pengelolaan perpustakaan kami. Dari pustakawan hingga staf administrasi,  
                    setiap pegawai berperan penting dalam mendukung layanan akademik dan riset terbaik  
                    bagi mahasiswa dan dosen.
                    </p>
                </div>
                <ul role="list" class="grid gap-x-1 gap-y-12 sm:grid-cols-4 sm:gap-y-2 xl:col-span-3">
                @foreach ($employees as $d)
                    <li>
                        <div class="flex items-left gap-x-6">
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 text-left">{{ $d->nama }}</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 text-left">{{ $d->jabatan }}</p>
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