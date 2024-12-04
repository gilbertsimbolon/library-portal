@if (session()->has('success'))
    <div class="fixed top-0 left-0 z-50 w-full h-full bg-gray-500 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-6 rounded-md shadow-lg">
            {{ session('success') }}
            <button class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-md" onclick="closeModal()">Tutup</button>
        </div>
    </div>
@endif
@if (session()->has('error'))
    <div class="fixed top-0 left-0 z-50 w-full h-full bg-gray-500 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-6 rounded-md shadow-lg">
            {{ session('error') }}
            <button class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-md" onclick="closeModal()">Tutup</button>
        </div>
    </div>
@endif
