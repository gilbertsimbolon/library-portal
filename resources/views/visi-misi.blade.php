<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class=" bg-white">
        <div class="flex flex-col justify-start items-center pt-14 text-center text-white px-6 ">
            <div class="mx-auto text-center max-w-7xl h-auto">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900" style="letter-spacing: 3px">
                    VISI & MISI
                </h2>
                <div class="flex flex-col gap-10 mt-12 font-serif lg:flex-row lg:items-start">
                    @if ($visiMisi)
                        <!-- Bagian Visi -->
                        <div class="flex-1 px-8 py-8">
                            <h3 class="text-2xl sm:text-3xl font-semibold text-left text-gray-800">VISI</h3>
                            <p class="mt-4 text-lg tracking-wide text-justify text-gray-700">
                                {{ $visiMisi->visi }}
                            </p>
                        </div>

                        <!-- Garis Vertikal (Hanya terlihat di layar besar) -->
                        <div class="hidden lg:block min-h-full border-l-2 border-gray-300"></div>

                        <!-- Bagian Misi -->
                        <div class="flex-1 px-8 py-8">
                            <h3 class="text-2xl sm:text-3xl font-semibold text-left lg:text-right text-gray-800">MISI</h3>
                            <ul class="mt-4 text-lg tracking-wide text-justify text-gray-700">
                                @foreach ($visiMisi->misi as $misi)
                                    <li class="mt-2">
                                        {{ htmlspecialchars($misi) }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <p class="text-lg text-gray-800">Tidak ada visi dan misi yang ditemukan.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
