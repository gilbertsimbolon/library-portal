<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
        <div class="flex flex-col justify-start items-center h-[calc(100vh-64px)] text-center text-white px-6">
            <div class="w-full h-full mx-auto text-center object-contain">
                @if ($strukturImage)
                    <img src="{{ Storage::url($strukturImage->structure_img) }}" alt="Struktur Organisasi" class="w-full h-full object-contain">
                @else
                    <p>Gambar tidak ditemukan.</p>
                @endif
            </div>
        </div>
</x-app-layout>
