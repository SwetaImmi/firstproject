<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Product List') }}
        </h2>
    </x-slot>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-purple-700">Our Product</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <div class="flex items-end justify-end w-full bg-cover">

                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase"></h3>
                    <span class="mt-2 text-gray-500"></span>
                    <form action="{{ route('favorite.add', $product->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <button class="p-2 bg-red-100 rounded hover:bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-red-700 hover:text-red-100">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                        </button>
                    </form>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>