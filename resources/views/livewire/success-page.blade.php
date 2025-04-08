{{-- <div class="w-full max-w-6xl mx-auto px-4 py-8 animate-fade-in">
  <!-- Header with animation -->
  <div class="text-center mb-12 animate-slide-down">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-green-500 mx-auto mb-4 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">Thank you for your order!</h1>
    <p class="text-lg text-gray-600 dark:text-gray-300">Your order has been confirmed and will be processed shortly.</p>
    <div class="w-24 h-1 bg-blue-500 mx-auto mt-4 rounded-full"></div>
  </div>

  <!-- Order summary card with hover effect -->
  <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden mb-8 transition-all duration-300 hover:shadow-xl">
    <div class="p-6 md:p-8">
      <div class="flex flex-col md:flex-row justify-between mb-6">
        <div class="mb-6 md:mb-0">
          <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Order Summary</h2>
          <div class="flex items-center space-x-2">
            <span class="text-gray-600 dark:text-gray-300">Order #</span>
            <span class="font-medium text-gray-800 dark:text-white">29</span>
          </div>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Date</p>
            <p class="font-medium text-gray-800 dark:text-white">17-02-2024</p>
          </div>
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Total</p>
            <p class="font-medium text-blue-600 dark:text-blue-400">₹157,495.00</p>
          </div>
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Payment</p>
            <p class="font-medium text-gray-800 dark:text-white">Cash on Delivery</p>
          </div>
        </div>
      </div>

      <!-- Progress tracker -->
      <div class="mb-8">
        <h3 class="text-lg font-medium text-gray-800 dark:text-white mb-4">Order Status</h3>
        <div class="relative">
          <div class="absolute top-1/2 left-0 right-0 h-1 bg-gray-200 dark:bg-gray-700 transform -translate-y-1/2"></div>
          <div class="relative flex justify-between">
            <div class="flex flex-col items-center">
              <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mb-2 animate-pulse">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-800 dark:text-white">Confirmed</span>
            </div>
            <div class="flex flex-col items-center">
              <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Processing</span>
            </div>
            <div class="flex flex-col items-center">
              <div class="w-8 h-8 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center text-gray-500 dark:text-gray-400 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                  <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1v-1h.05a2.5 2.5 0 014.9 0H19a1 1 0 001-1V5a1 1 0 00-1-1H3z" />
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Shipped</span>
            </div>
            <div class="flex flex-col items-center">
              <div class="w-8 h-8 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center text-gray-500 dark:text-gray-400 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Delivered</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Order details -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-lg font-medium text-gray-800 dark:text-white mb-4">Order Details</h3>
          <div class="space-y-3">
            <div class="flex justify-between">
              <span class="text-gray-600 dark:text-gray-300">Subtotal</span>
              <span class="font-medium text-gray-800 dark:text-white">₹157,495.00</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-600 dark:text-gray-300">Discount</span>
              <span class="font-medium text-gray-800 dark:text-white">₹0.00</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-600 dark:text-gray-300">Shipping</span>
              <span class="font-medium text-gray-800 dark:text-white">Free</span>
            </div>
            <div class="flex justify-between pt-3 border-t border-gray-200 dark:border-gray-700">
              <span class="text-lg font-semibold text-gray-800 dark:text-white">Total</span>
              <span class="text-lg font-semibold text-blue-600 dark:text-blue-400">₹157,495.00</span>
            </div>
          </div>
        </div>

        <!-- Shipping info -->
        <div>
          <h3 class="text-lg font-medium text-gray-800 dark:text-white mb-4">Shipping Information</h3>
          <div class="bg-blue-50 dark:bg-gray-700 rounded-lg p-4 transition-all duration-300 hover:scale-[1.02]">
            <div class="flex items-start space-x-3">
              <div class="bg-blue-100 dark:bg-blue-900 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-gray-800 dark:text-white">Cielo Schimmel</h4>
                <p class="text-gray-600 dark:text-gray-300">71582 Schmitt Springs</p>
                <p class="text-gray-600 dark:text-gray-300">Castro Valley, Delaware, 53476-0454</p>
                <p class="text-gray-600 dark:text-gray-300">Phone: 587-019-6103</p>
              </div>
            </div>
          </div>
          
          <div class="mt-4 bg-gray-50 dark:bg-gray-700 rounded-lg p-4 transition-all duration-300 hover:scale-[1.02]">
            <div class="flex items-start space-x-3">
              <div class="bg-gray-200 dark:bg-gray-600 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-gray-800 dark:text-white">Standard Shipping</h4>
                <p class="text-gray-600 dark:text-gray-300">Estimated delivery: 24 hours</p>
                <p class="text-gray-600 dark:text-gray-300">Tracking number: will be provided</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA buttons -->
  <div class="flex flex-col sm:flex-row justify-center gap-4 px-4 mt-8 animate-slide-up">
    <a href="/products" class="px-6 py-3 border border-blue-500 text-blue-500 rounded-lg font-medium text-center transition-all duration-300 hover:bg-blue-50 dark:hover:bg-gray-800 hover:shadow-md">
      Continue Shopping
    </a>
    <a href="/orders" class="px-6 py-3 bg-blue-500 text-white rounded-lg font-medium text-center transition-all duration-300 hover:bg-blue-600 hover:shadow-md">
      View Order Details
    </a>
  </div>
</div> --}}



















<div class="w-full max-w-6xl mx-auto px-4 py-8 animate-fade-in">
  <!-- En-tête avec animation -->
  <div class="text-center mb-12 animate-slide-down">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-green-500 mx-auto mb-4 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">Merci pour votre commande !</h1>
    <p class="text-lg text-gray-600 dark:text-gray-300">Votre commande a été confirmée et sera traitée sous peu.</p>
    <div class="w-24 h-1 bg-blue-500 mx-auto mt-4 rounded-full"></div>
  </div>

  <!-- Carte de résumé de commande avec effet de survol -->
  <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden mb-8 transition-all duration-300 hover:shadow-xl">
    <div class="p-6 md:p-8">
      <div class="flex flex-col md:flex-row justify-between mb-6">
        <div class="mb-6 md:mb-0">
          <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Résumé de la commande</h2>
          <div class="flex items-center space-x-2">
            <span class="text-gray-600 dark:text-gray-300">Commande n°</span>
            <span class="font-medium text-gray-800 dark:text-white">29</span>
          </div>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Date</p>
            <p class="font-medium text-gray-800 dark:text-white">17-02-2024</p>
          </div>
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Total</p>
            <p class="font-medium text-blue-600 dark:text-blue-400">157 495,00 €</p>
          </div>
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Paiement</p>
            <p class="font-medium text-gray-800 dark:text-white">Paiement à la livraison</p>
          </div>
        </div>
      </div>

      <!-- Suivi de progression -->
      <div class="mb-8">
        <h3 class="text-lg font-medium text-gray-800 dark:text-white mb-4">État de la commande</h3>
        <div class="relative">
          <div class="absolute top-1/2 left-0 right-0 h-1 bg-gray-200 dark:bg-gray-700 transform -translate-y-1/2"></div>
          <div class="relative flex justify-between">
            <div class="flex flex-col items-center">
              <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mb-2 animate-pulse">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-800 dark:text-white">Confirmée</span>
            </div>
            <div class="flex flex-col items-center">
              <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-500 dark:text-gray-400">En traitement</span>
            </div>
            <div class="flex flex-col items-center">
              <div class="w-8 h-8 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center text-gray-500 dark:text-gray-400 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                  <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1v-1h.05a2.5 2.5 0 014.9 0H19a1 1 0 001-1V5a1 1 0 00-1-1H3z" />
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Expédiée</span>
            </div>
            <div class="flex flex-col items-center">
              <div class="w-8 h-8 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center text-gray-500 dark:text-gray-400 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Livrée</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Détails de la commande -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-lg font-medium text-gray-800 dark:text-white mb-4">Détails de la commande</h3>
          <div class="space-y-3">
            <div class="flex justify-between">
              <span class="text-gray-600 dark:text-gray-300">Sous-total</span>
              <span class="font-medium text-gray-800 dark:text-white">157 495,00 €</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-600 dark:text-gray-300">Réduction</span>
              <span class="font-medium text-gray-800 dark:text-white">0,00 €</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-600 dark:text-gray-300">Livraison</span>
              <span class="font-medium text-gray-800 dark:text-white">Gratuite</span>
            </div>
            <div class="flex justify-between pt-3 border-t border-gray-200 dark:border-gray-700">
              <span class="text-lg font-semibold text-gray-800 dark:text-white">Total</span>
              <span class="text-lg font-semibold text-blue-600 dark:text-blue-400">157 495,00 €</span>
            </div>
          </div>
        </div>

        <!-- Informations de livraison -->
        <div>
          <h3 class="text-lg font-medium text-gray-800 dark:text-white mb-4">Informations de livraison</h3>
          <div class="bg-blue-50 dark:bg-gray-700 rounded-lg p-4 transition-all duration-300 hover:scale-[1.02]">
            <div class="flex items-start space-x-3">
              <div class="bg-blue-100 dark:bg-blue-900 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-gray-800 dark:text-white">Cielo Schimmel</h4>
                <p class="text-gray-600 dark:text-gray-300">71582 Schmitt Springs</p>
                <p class="text-gray-600 dark:text-gray-300">Castro Valley, Delaware, 53476-0454</p>
                <p class="text-gray-600 dark:text-gray-300">Téléphone : 587-019-6103</p>
              </div>
            </div>
          </div>
          
          <div class="mt-4 bg-gray-50 dark:bg-gray-700 rounded-lg p-4 transition-all duration-300 hover:scale-[1.02]">
            <div class="flex items-start space-x-3">
              <div class="bg-gray-200 dark:bg-gray-600 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-gray-800 dark:text-white">Livraison standard</h4>
                <p class="text-gray-600 dark:text-gray-300">Livraison estimée : 24 heures</p>
                <p class="text-gray-600 dark:text-gray-300">Numéro de suivi : sera fourni</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Boutons d'action -->
  <div class="flex flex-col sm:flex-row justify-center gap-4 px-4 mt-8 animate-slide-up">
    <a href="/products" class="px-6 py-3 border border-blue-500 text-blue-500 rounded-lg font-medium text-center transition-all duration-300 hover:bg-blue-50 dark:hover:bg-gray-800 hover:shadow-md">
      Continuer vos achats
    </a>
    <a href="/orders" class="px-6 py-3 bg-blue-500 text-white rounded-lg font-medium text-center transition-all duration-300 hover:bg-blue-600 hover:shadow-md">
      Voir les détails
    </a>
  </div>
</div>