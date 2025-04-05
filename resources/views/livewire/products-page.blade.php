{{-- <div class="w-full max-w-[95rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
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
                    

                    {{ $products->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
 --}}



 <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <section class="py-10 bg-gray-50 font-poppins dark:bg-gray-800 rounded-lg">
      <div class="px-4 py-4 mx-auto max-w-7xl lg:py-6 md:px-6">
        <div class="flex flex-wrap mb-24 -mx-3">
          <div class="w-full pr-2 lg:w-1/4 lg:block">
            <div class="p-4 mb-5 bg-white border border-gray-200 dark:border-gray-900 dark:bg-gray-900">
              {{-- {{ json_encode($selected_categories) }} --}}
              
              <h2 class="text-2xl font-bold dark:text-gray-400"> Categories</h2>
              <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
              <ul>
                @forelse ($categories as $category)
                  <li class="mb-4" wire:key='"{{ $category->id }}'>
                    <label for="{{ $category->slug }}" class="flex items-center dark:text-gray-400 ">
                      <input id="{{ $category->slug }}" wire:model.live="selected_categories"  value="{{ $category->id }}" type="checkbox" class="w-4 h-4 mr-2">
                      <span class="text-lg">
                        {{ $category->name }}
                      </span>
                    </label>
                  </li>
                @empty
                  <p>indeisponible</p>
                @endforelse
              </ul>
            </div>

{{-- -------------------------------------------------------------brands----------------------------------------------------------------------------------------------- --}}

            <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
              <h2 class="text-2xl font-bold dark:text-gray-400">Brand</h2>
              <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
              <ul>

                @forelse ($brands as $brand)
                  <li class="mb-4" wire:key="{{ $brand->id }}">
                    <label for="{{ $brand->slug }}" class="flex items-center dark:text-gray-300">
                      <input id="{{ $brand->slug }}" wire:model.live="selected_brands"  value="{{ $brand->id }}" type="checkbox" class="w-4 h-4 mr-2">
                      <span class="text-lg dark:text-gray-400">
                        {{ $brand->name }}
                      </span>
                    </label>
                  </li>  
                @empty
                  <p>indeisponible</p>
                @endforelse
              </ul>
            </div>

            

{{-- ------------------------------------------------------Recherche par categorie------------------------------------------------------------------------------------ --}}

            <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
              <h2 class="text-2xl font-bold dark:text-gray-400">Product Status</h2>
              <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
              <ul>
                <li class="mb-4">
                  <label for="featured" class="flex items-center dark:text-gray-300">
                    <input type="checkbox" id="featured" value="1" class="w-4 h-4 mr-2" wire:model.live="featured">
                    <span class="text-lg dark:text-gray-400">Featured product</span>
                  </label>
                </li>
                <li class="mb-4">
                  <label for="on_sale" class="flex items-center dark:text-gray-300">
                    <input type="checkbox" wire:model.live='on_sale' id="on_sale" value="1" class="w-4 h-4 mr-2">
                    <span class="text-lg dark:text-gray-400">On Sale</span>
                  </label>
                </li>
              </ul>
            </div>
  
            <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
              <h2 class="text-2xl font-bold dark:text-gray-400">Price</h2>
              <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
              <div>
                <div class="text-yellow-400 font-bold"> {{ Number::currency($price_range, 'INR') }} </div>
                <input type="range" wire:model.live='price_range' class="w-full h-1 mb-4 bg-blue-100 rounded appearance-none cursor-pointer" max="500000" value="100000" step="100000">
                <div class="flex justify-between ">
                  <span class="inline-block text-lg font-bold text-blue-400 "> {{ Number::currency(1000, 'EUR') }} </span>
                  <span class="inline-block text-lg font-bold text-blue-400 "> {{ Number::currency(500000, 'EUR') }} </span>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-3 lg:w-3/4">
            <div class="px-3 mb-4">
              <div class="items-center justify-between hidden px-3 py-2 bg-gray-100 md:flex dark:bg-gray-900 ">
                <div class="flex items-center justify-between">
                  <select wire:model.live='sort' class="block w-40 text-base bg-gray-100 cursor-pointer dark:text-gray-400 dark:bg-gray-900">
                    <option value="latest">Sort by latest</option>
                    <option value="price">Sort by Price</option>
                  </select>
                </div>
              </div>
            </div>


{{-- -------------------------------------Products----------------------------------------------------- --}}

            <div class="flex flex-wrap items-center ">
              @forelse ($products as $prod)
                <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3" wire:key="{{ $prod->id }}">
                  <div class="border border-gray-300 dark:border-gray-700">
                    <div class="relative bg-gray-200">
                      <a href="/products/{{$prod->slug}}" class="">
                        <img src="{{ url('storage', $prod->images[0]) }}" alt="{{ $prod->name }}" class="object-cover w-full h-56 mx-auto ">
                      </a>
                    </div>
                    <div class="p-3 ">
                      <div class="flex items-center justify-between gap-2 mb-2">
                        <h3 class="text-xl font-medium dark:text-gray-400">
                         {{$prod->name}}
                        </h3>
                      </div>
                      <p class="text-lg ">
                        <span class="text-green-600 dark:text-green-600">
                          {{ Number::currency($prod->price, 'EUR') }}
                        </span>
                      </p>
                    </div>
                    <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">
    
                      <a wire:click.prevent='addToCart({{ $prod->id }})' href="#" class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-red-500 dark:hover:text-red-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                        </svg>
                          <span wire:loading.remove>Add to Cart</span>
                          <span wire:loading wire:target='addToCart({{ $prod->id }})'>Adding .....</span>
                      </a>
    
                    </div>
                  </div>
                </div>
              @empty
                <p>indeisponible</p>
              @endforelse
            </div>


{{-- --------------------------------------Pagination---------------------------------------------------------------- --}}
            <div class="flex justify-end mt-6">
              {{ $products->links() }}
            </div>
            <!-- pagination end -->
          </div>
        </div>
      </div>
    </section>
  
  </div>


