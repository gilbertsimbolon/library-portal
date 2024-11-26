<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="flex flex-col justify-start items-center pt-14 h-[calc(100vh-64px)] text-center text-white px-6">
        <div class="w-5/6 mx-auto text-center h-5/6">
        <h2 class="text-5xl font-bold font-serif text-gray-900" style="letter-spacing: 2px">DAFTAR BUKU</h2>
        <div class="overflow-x-auto mt-5">
            <table class="table-auto w-full text-sm text-left text-gray-900 border-collapse border border-gray-200">
                <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Judul</th>
                        <th class="border border-gray-300 px-4 py-2">Penulis</th>
                        <th class="border border-gray-300 px-4 py-2">Penerbit</th>
                        <th class="border border-gray-300 px-4 py-2">ISBN</th>
                        <th class="border border-gray-300 px-4 py-2">Tahun Terbit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">Sebuah Seni Untuk Bersikap Bodo Amat</td>
                        <td class="border border-gray-300 px-4 py-2">Laura Perangin-angin</td>
                        <td class="border border-gray-300 px-4 py-2">Airlangga</td>
                        <td class="border border-gray-300 px-4 py-2">23918-2392-91232</td>
                        <td class="border border-gray-300 px-4 py-2">2020</td>
                    </tr>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">2</td>
                        <td class="border border-gray-300 px-4 py-2">Berpikir dan Berjiwa Besar</td>
                        <td class="border border-gray-300 px-4 py-2">John Doe</td>
                        <td class="border border-gray-300 px-4 py-2">Gramedia</td>
                        <td class="border border-gray-300 px-4 py-2">12345-6789-10112</td>
                        <td class="border border-gray-300 px-4 py-2">2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Navigasi Paginasi -->
        {{-- <div class="mt-4">
            {{ $book->links() }}
        </div> --}}
    </div>
    </div>
</x-app-layout>