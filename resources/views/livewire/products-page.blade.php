<div class="w-full max-w-[95rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Sidebar Filters -->
        <div
            class="w-full lg:w-1/5 bg-white dark:bg-gray-900 p-4 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
            <h2 class="text-xl font-bold mb-4 dark:text-white">Filtrer par</h2>

            <!-- Categories -->
            <div class="mb-6">
                <h3 class="font-semibold text-lg mb-3 dark:text-gray-300">Catégories</h3>
                <ul class="space-y-2">
                    @foreach($categories as $category)
                    <li wire:key=" {{ $category->id }}">
                        <label for="{{ $category->slug }}" class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" wire:model.live="selectd_categories"  id="{{ $category->slug }}" value="{{ $category->id }}" class="rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800">
                            <span class="text-gray-700 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">{{$category->name }}</span>
                        </label>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Price Range -->
            <div class="mb-6">
                <h3 class="font-semibold text-lg mb-3 dark:text-gray-300">Fourchette de prix</h3>
                <div class="px-2">
                    <input type="range" min="0" max="1000" value="500"
                        class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                    <div class="flex justify-between mt-2">
                        <span class="text-sm text-gray-600 dark:text-gray-400">$0</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">$1000</span>
                    </div>
                </div>
            </div>

            <!-- Brands -->
            <div class="mb-6">
                <h3 class="font-semibold text-lg mb-3 dark:text-gray-300">Marques</h3>
                <ul class="space-y-2">
                    @foreach($brands as $brand)
                    <li wire:key=" {{ $brand->id }}">
                        <label for="{{ $brand->slug }}" class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" id="{{ $brand->slug }}" value="{{ $brand->id }}" class="rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800">
                            <span class="text-gray-700 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">{{$brand->name }}</span>
                        </label>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Availability -->
            <div>
                <h3 class="font-semibold text-lg mb-3 dark:text-gray-300">Disponibilité</h3>
                <ul class="space-y-2">
                    <li>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800"
                                checked>
                            <span
                                class="text-gray-700 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">En
                                stock</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800">
                            <span
                                class="text-gray-700 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">Promotions</span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-full lg:w-4/5">
            <!-- Sort Options -->
            <div
                class="bg-white dark:bg-gray-900 p-4 mb-4 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 flex justify-between items-center">
                <div class="text-sm text-gray-600 dark:text-gray-400">
                    <span>1-12 sur 1000 résultats</span>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Trier par :</span>
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                        <option selected>Pertinence</option>
                        <option>Prix croissant</option>
                        <option>Prix décroissant</option>
                        <option>Évaluations</option>
                        <option>Nouveautés</option>
                    </select>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($products as $product)
                <a href="/products/{{ $product->slug }}">
                    <div wire:key=" {{ $product->id }}"
                        class="bg-white dark:bg-gray-900 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-md transition-shadow duration-300">
                        <div class="p-4">
                            <div class="relative h-48 w-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center">
                                <img src="{{ url('storage', $product->images[0]) }}" alt="{{ $product->name }}"
                                    class="max-h-full max-w-full object-contain">
                                <span
                                    class="absolute top-2 right-2 bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded-full">Promo</span>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <h3
                                class="text-md font-semibold text-gray-800 dark:text-white line-clamp-2 hover:text-blue-600 dark:hover:text-blue-400 cursor-pointer">
                                {{ $product->name }}
                            </h3>
                            <div class="flex items-center mt-1">
                                <div class="flex items-center">

                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>

                                    <span class="text-xs text-gray-600 dark:text-gray-400 ml-1">(1234)</span>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="flex items-center">
                                    <span class="text-lg font-bold text-gray-900 dark:text-white">{{ Number::currency($product->price, 'INR')}}</span>

                                    <span class="text-sm text-gray-500 line-through ml-2 dark:text-gray-400">$899.99</span>
                                    <span
                                        class="text-xs bg-red-100 text-red-800 font-semibold ml-2 px-1.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">-11%</span>

                                </div>
                            </div>
                            <div class="mt-3">
                                <button
                                    class="w-full bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-medium py-2 px-4 rounded-lg shadow-sm transition duration-150 flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                    Ajouter au panier
                                </button>
                            </div>

                            <div class="mt-2 text-xs text-green-600 dark:text-green-400">
                                <span>Livraison gratuite</span>
                            </div>

                        </div>
                    </div>
                </a>
                @endforeach
            </div>


            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav class="inline-flex rounded-md shadow-sm -space-x-px">
                    {{-- <a href="#"
                        class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 bg-white text-blue-600 hover:bg-blue-50 dark:bg-gray-800 dark:border-gray-700">1</a>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">2</a>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">3</a>
                    <span
                        class="px-4 py-2 border border-gray-300 bg-white text-gray-500 dark:bg-gray-800 dark:border-gray-700">...</span>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">8</a>
                    <a href="#"
                        class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a> --}}

                    {{ $products->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>

