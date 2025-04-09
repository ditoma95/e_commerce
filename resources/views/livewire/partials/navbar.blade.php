<div>
    <header class="flex z-50 sticky top-0 flex-wrap md:justify-start md:flex-nowrap w-full bg-white text-sm py-3 md:py-0 dark:bg-gray-800 shadow-md">
      <nav class="max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8" aria-label="Main navigation">
        <div class="relative md:flex md:items-center md:justify-between">
          <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold dark:text-white focus:outline-none focus:ring-1 focus:ring-gray-600" href="/" aria-label="TemApp - Home">
              TemApp
            </a>
            <div class="md:hidden">
              <button type="button" 
                      class="hs-collapse-toggle flex justify-center items-center w-9 h-9 text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 focus:outline-none focus:ring-1 focus:ring-gray-600" 
                      data-hs-collapse="#navbar-collapse-with-animation" 
                      aria-controls="navbar-collapse-with-animation" 
                      aria-label="Toggle navigation">
                <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <line x1="3" x2="21" y1="6" y2="6" />
                  <line x1="3" x2="21" y1="12" y2="12" />
                  <line x1="3" x2="21" y1="18" y2="18" />
                </svg>
                <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M18 6 6 18" />
                  <path d="m6 6 12 12" />
                </svg>
              </button>
            </div>
          </div>
  
          <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
            <div class="overflow-hidden overflow-y-auto max-h-[75vh] scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-slate-500 dark:scrollbar-track-slate-700">
              <div class="flex flex-col gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:ps-7 md:divide-y-0 md:divide-solid dark:divide-gray-700">
                <a wire:navigate class="{{ request()->is('/') ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} font-medium py-3 md:py-6 hover:text-gray-400 dark:hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600" href="/" aria-current="page">
                  Home
                </a>
  
                <a wire:navigate class="{{ request()->is('/products') ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} font-medium hover:text-gray-400 py-3 md:py-6 dark:hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600" href="/products">
                  Products
                </a>
  
                <a wire:navigate class="font-medium flex items-center {{ request()->is('/cart') ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} hover:text-gray-400 py-3 md:py-6 dark:hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600" href="/cart" aria-label="Shopping cart">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-1" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                  </svg>
                  <span class="mr-1">Cart</span> 
                  <span class="py-0.5 px-1.5 rounded-full text-xs font-medium bg-blue-50 border border-blue-200 text-blue-600">{{ $total_count ?? 0 }}</span>
                </a>
  
                @auth
                <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--trigger:hover] md:py-4 pt-3 md:pt-0">
                  <button type="button" class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600" aria-expanded="false" aria-label="User menu">
                    {{ auth()->user()->name }}
                    <svg class="ms-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="m6 9 6 6 6-6" />
                    </svg>
                  </button>
  
                  <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-white md:shadow-md rounded-lg p-2 dark:bg-gray-800 md:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute before:-top-5 before:start-0 before:w-full before:h-5">
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                      My Orders
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                      My Account
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="/logout">
                      Logout
                    </a>
                  </div>
                </div>
                @else
                <div class="pt-3 md:pt-0">
                  <a wire:navigate class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-600 text-white hover:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="/login">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                      <circle cx="12" cy="7" r="4" />
                    </svg>
                    Log in
                  </a>
                </div>
                @endauth
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </div>








  {{-- -------------------------------------------------------------brands----------------------------------------------------------------------------------------------- --}}

  {{-- <div>
    <header class="flex z-50 sticky top-0 flex-wrap md:justify-start md:flex-nowrap w-full bg-white text-sm py-3 md:py-0 dark:bg-gray-800 shadow-md">
        <nav class="max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8" aria-label="Main navigation">
            <div class="relative md:flex md:items-center md:justify-between">
                <div class="flex items-center justify-between">
                    <a class="flex-none text-xl font-semibold dark:text-white focus:outline-none focus:ring-1 focus:ring-gray-600" href="/" aria-label="TemApp - Home">
                        TemApp
                    </a>
                    <div class="md:hidden">
                        <button type="button" 
                                class="hs-collapse-toggle flex justify-center items-center w-9 h-9 text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 focus:outline-none focus:ring-1 focus:ring-gray-600" 
                                data-hs-collapse="#navbar-collapse-with-animation" 
                                aria-controls="navbar-collapse-with-animation" 
                                aria-label="Toggle navigation">
                            <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="3" x2="21" y1="6" y2="6" />
                                <line x1="3" x2="21" y1="12" y2="12" />
                                <line x1="3" x2="21" y1="18" y2="18" />
                            </svg>
                            <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
  
                <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
                    <div class="overflow-hidden overflow-y-auto max-h-[75vh] scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-slate-500 dark:scrollbar-track-slate-700">
                        <div class="flex flex-col gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:ps-7 md:divide-y-0 md:divide-solid dark:divide-gray-700">
                            <a wire:navigate class="{{ request()->is('/') ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} font-medium py-3 md:py-6 hover:text-gray-400 dark:hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600" href="/" aria-current="page">
                                Home
                            </a>
  
                            <a wire:navigate class="{{ request()->is('/products') ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} font-medium hover:text-gray-400 py-3 md:py-6 dark:hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600" href="/products">
                                Products
                            </a>
  
                            <a wire:navigate class="font-medium flex items-center {{ request()->is('/cart') ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} hover:text-gray-400 py-3 md:py-6 dark:hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600" href="/cart" aria-label="Shopping cart">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-1" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                                <span class="mr-1">Cart</span>
                                <span class="py-0.5 px-1.5 rounded-full text-xs font-medium bg-blue-50 border border-blue-200 text-blue-600">{{ $total_count ?? 0 }}</span>
                            </a>
  
                            <!-- Dropdown menu -->
                            <div class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] py-3 md:py-6" 
                                 x-data="{ open: false }" 
                                 @click.away="open = false" 
                                 @keydown.escape="open = false">
                                <button type="button" 
                                        class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600" 
                                        @click="open = !open">
                                    <span class="mr-1">User Name</span>
                                    <svg class="hs-dropdown-open:rotate-180 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </button>
  
                                <div x-show="open" 
                                     x-transition:enter="transition ease-out duration-200" 
                                     x-transition:enter-start="opacity-0 scale-95" 
                                     x-transition:enter-end="opacity-100 scale-100" 
                                     x-transition:leave="transition ease-in duration-75" 
                                     x-transition:leave-start="opacity-100 scale-100" 
                                     x-transition:leave-end="opacity-0 scale-95" 
                                     class="hs-dropdown-menu md:w-48 w-full z-10 bg-white md:shadow-md rounded-lg p-2 dark:bg-gray-800 md:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full md:border-gray-200 before:-top-5 before:left-0 before:w-full before:h-5 hidden md:block"
                                     :class="{'block': open, 'hidden': !open}">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                        Profile
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                        Settings
                                    </a>
                                    <div class="border-t border-gray-200 my-2 dark:border-gray-700"></div>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-red-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-red-400 dark:hover:bg-gray-700" href="#">
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
  </div>
   --}}
  