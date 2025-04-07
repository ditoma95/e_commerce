<div class="w-full max-w-[95rem] mx-auto py-8 px-4 sm:px-6 lg:px-8">
  <!-- Breadcrumbs -->
  
  <h1 class="text-3xl font-bold text-gray-900 mb-6">Votre Panier</h1>
  
  <div class="flex flex-col lg:flex-row gap-6">
    <!-- Main Cart Items Section -->
    <div class="lg:w-2/3">
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <!-- Cart Header -->
        <div class="bg-gray-50 px-6 py-3 border-b border-gray-200 flex justify-between items-center">
          <h2 class="font-medium text-gray-700">@if(count($cart_items) > 0) {{ count($cart_items) }} article(s) @else Votre panier est vide @endif</h2>
          <span class="text-sm text-gray-500">Prix</span>
        </div>
        
        <!-- Cart Items -->
        @forelse ($cart_items as $item)
        <div wire:key='{{ $item['product_id']}}' class="p-6 border-b border-gray-200 last:border-b-0">
          <div class="flex flex-col sm:flex-row">
            <!-- Product Image -->
            <div class="flex-shrink-0 mb-4 sm:mb-0">
              <img class="h-32 w-32 object-contain rounded-md" src="{{ url('storage', $item['image'])}}" alt="{{ $item['name'] }}">
            </div>
            
            <!-- Product Details -->
            <div class="flex-grow sm:pl-6">
              <div class="flex flex-col h-full">
                <div class="flex justify-between">
                  <div>
                    <h3 class="text-lg font-medium text-gray-900 hover:text-blue-600 line-clamp-2">{{ $item['name'] }}</h3>
                    <p class="mt-1 text-sm text-gray-500">En stock</p>
                  </div>
                  <div class="text-lg font-semibold text-gray-900">{{ Number::currency($item['unit_amount'], 'INR')}}</div>
                </div>
                
                <div class="mt-4 flex items-end justify-between">
                  <!-- Quantity Selector -->
                  <div class="flex items-center border border-gray-300 rounded-md">
                    <button wire:click='decreaseQty({{ $item['product_id']}})' class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-l-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                      </svg>
                    </button>
                    <span class="px-4 py-1 text-center w-12">{{ $item['quantity'] }}</span>
                    <button wire:click='increaseQty({{ $item['product_id']}})' class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-r-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                      </svg>
                    </button>
                  </div>
                  
                  <!-- Actions -->
                  <div class="flex space-x-4">
                    <button wire:click="removeItem({{ $item['product_id']}})" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                      <span wire:loading.remove wire:target="removeItem({{ $item['product_id']}})">Supprimer</span>
                      <span wire:loading wire:target="removeItem({{ $item['product_id']}})">Suppression...</span>
                    </button>
                    <button class="text-sm font-medium text-blue-600 hover:text-blue-500">Sauvegarder pour plus tard</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @empty
        <div class="p-8 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <h3 class="mt-4 text-lg font-medium text-gray-900">Votre panier est vide</h3>
          <p class="mt-1 text-gray-500">Commencez votre shopping dès maintenant</p>
          <div class="mt-6">
            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
              Découvrir nos produits
            </a>
          </div>
        </div>
        @endforelse
      </div>
      
      <!-- Continue Shopping -->
      @if(count($cart_items) > 0)
      <div class="mt-6">
        <a href="#" class="flex items-center text-sm text-blue-600 hover:text-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
          Continuer vos achats
        </a>
      </div>
      @endif
    </div>
    
    <!-- Order Summary -->
    <div class="lg:w-1/3">
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <h2 class="text-lg font-medium text-gray-900 mb-4">Récapitulatif de commande</h2>
        
        <div class="space-y-4">
          <div class="flex justify-between">
            <span class="text-gray-600">Sous-total ({{ count($cart_items) }} article(s))</span>
            <span class="font-medium">{{ Number::currency($grand_total, 'INR')}}</span>
          </div>
          
          <div class="flex justify-between">
            <span class="text-gray-600">Frais de livraison</span>
            <span class="font-medium">{{ Number::currency(0, 'INR')}}</span>
          </div>
          
          <div class="flex justify-between">
            <span class="text-gray-600">Taxes</span>
            <span class="font-medium">Calculé à l'étape suivante</span>
          </div>
          
          <div class="border-t border-gray-200 pt-4 mt-4">
            <div class="flex justify-between">
              <span class="text-lg font-medium">Total</span>
              <span class="text-lg font-bold text-gray-900">{{ Number::currency($grand_total, 'INR')}}</span>
            </div>
          </div>
        </div>
        
        <!-- Checkout Button -->
        @if(count($cart_items) > 0)
        <button class="mt-6 w-full bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-medium py-3 px-4 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
          Passer la commande
        </button>
        
        <!-- Secure Payment Info -->
        <div class="mt-4 flex items-center justify-center text-sm text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
          Paiement sécurisé
        </div>
        @endif
      </div>
      
      <!-- Promo Code -->
      {{-- @if(count($cart_items) > 0)
      <div class="mt-4 bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <h3 class="text-sm font-medium text-gray-900 mb-2">Appliquer un code promo</h3>
        <div class="flex">
          <input type="text" placeholder="Entrez votre code" class="flex-grow px-4 py-2 border border-gray-300 rounded-l-md focus:ring-blue-500 focus:border-blue-500">
          <button class="px-4 py-2 bg-gray-100 text-gray-800 border border-l-0 border-gray-300 rounded-r-md hover:bg-gray-200">
            Appliquer
          </button>
        </div>
      </div>
      @endif --}}
    </div>
  </div>
</div>