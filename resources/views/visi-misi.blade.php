<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col justify-start items-center pt-14 h-[calc(100vh-64px)] text-center text-white px-6">
            <div class="mx-auto text-center max-w-7xl h-4/6">
                <h2 class="font-serif text-5xl font-bold text-gray-900" style="letter-spacing: 3px">VISI & MISI</h2>
                <div class="flex flex-col h-full gap-10 mt-12 font-serif lg:flex-row">     
                    @if ($visiMisi)
                    <!-- Bagian Visi -->
                    <div class="flex-1 px-8 py-8">
                        <h3 class="text-3xl font-semibold text-left text-gray-800">VISI</h3>
                        <p class="mt-4 text-lg tracking-wide text-justify text-gray-700">
                        {{ $visiMisi->visi }}
                        </p>    
                    </div>

                    <!-- Garis Vertikal -->
                    <div class="min-h-full mx-4 border-l-2 border-gray-300"></div>

                    <!-- Bagian Misi -->
                    <div class="flex-1 px-8 py-8">
                        <h3 class="text-3xl font-semibold text-right text-gray-800">MISI</h3>                           
                        <p class="mt-4 text-lg tracking-wide text-justify text-gray-700">
                            {{ $visiMisi->misi }}
                        </p>
                    </div>
                    @else
                        <p>Tidak ada visi dan misi yang ditemukan.</p>    
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
