<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="flex flex-col justify-start items-center pt-14  text-center px-6 bg-white mb-20">
        <div class="mx-auto w-full max-w-7xl">
            <!-- Judul -->
            <h2 class="text-5xl font-bold font-serif text-gray-900 mt-4" style="letter-spacing: 2px;">KONTAK</h2>

            <!-- Grid Container -->
            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-8 h-auto">
                <!-- Bagian Formulir -->
                <div class="p-4 rounded-md h-full gap-y-5 hover:shadow-2xl">
                    <h3 class="text-lg font-bold text-center text-gray-900">Formulir Pendaftaran Anggota Perpustakaan
                    </h3>
                    <form action="{{ route('kontak.store') }}" method="POST" class="mx-auto max-w-xl mt-2">
                        @csrf
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div class="sm:col-span-2">
                                <label for="nama_lengkap"
                                    class="block text-sm font-semibold text-gray-900 text-left ml-1">Nama
                                    Lengkap</label>
                                <input type="text" name="nama" id="nama" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder-italic focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                    placeholder="Nama Lengkap" required>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="nim"
                                    class="block text-sm font-semibold text-gray-900 text-left ml-1">NIM</label>
                                <input type="text" name="nim" id="nim" autocomplete="organization"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                    placeholder="Nomor Induk Mahasiswa">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email"
                                    class="block text-sm font-semibold text-gray-900 text-left ml-1">Email
                                    Edukasi</label>
                                <input type="email" name="email_edukasi" id="email_edukasi" autocomplete="email"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                    placeholder="@unima.ac.id">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="no_hp" class="block text-sm font-semibold text-gray-900 text-left ml-1">No.
                                    Handphone</label>
                                <input type="text" name="no_hp" id="no_hp" autocomplete="email"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                    placeholder="0812349xxxxx">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="no_wa" class="block text-sm font-semibold text-gray-900 text-left ml-1">No.
                                    Whatsapp</label>
                                <input type="text" name="no_wa" id="no_wa"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                    placeholder="08123xxxxxxx">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="fakultas"
                                    class="block text-sm font-semibold text-gray-900 text-left ml-1">Fakultas</label>
                                <input type="text" name="fakultas" id="fakultas"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                    placeholder="Fakultas Teknik">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="program_studi"
                                    class="block text-sm font-semibold text-gray-900 text-left ml-1">Program
                                    Studi</label>
                                <input type="text" name="program_studi" id="program_studi"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                    placeholder="Teknik Informatika">
                            </div>
                        </div>
                        <div class="mt-10 mb-10">
                            <button type="submit"
                                class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Bergabung
                                Sekarang !!!</button>
                        </div>
                    </form>
                </div>

                <!-- Bagian Kontak -->
                <div class="p-4 rounded-md">
                    <div class="mt-4 h-[300px]">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.840596400493!2d124.87973521189778!3d1.2684637618238752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287153dc85e9c0f%3A0x5ce6a2455e5eb766!2sPerpustakaan%20UNIMA!5e0!3m2!1sid!2sid!4v1732511837060!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <h3 class="text-2xl font-bold text-left text-gray-900 mt-5">Kontak Perpustakaan</h3>
                    <ul class="mt-5 gap-5 ml-1 text-left text-gray-700">
                        <li class="mt-2">Alamat: Gedung Perpustakaan Kampus Unima di Tondano, Minahasa, 95618, SULUT
                        </li>
                        <li class="mt-2">Telepon: 0431 321845, 321846, 321847</li>
                        <li class="mt-2">Fax: 0431 32166</li>
                        <li class="mt-2">Whatsapp : +62 853-9941-8237</li>
                        <li class="mt-2">Email: perpustakaan@unima.ac.id</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('success'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire({
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
    @else
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire({
                icon: "danger",
                title: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
    @endif
</x-app-layout>