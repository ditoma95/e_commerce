<div class="w-full">
    <!-- Hero Section -->
    <section class="w-full bg-gradient-to-r from-blue-600 to-teal-400 py-10 px-4 sm:px-6 lg:px-8">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grid -->
            <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
                <div>
                    <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">
                        Commence ton busines sur <span class="text-blue-600">TemApp</span>
                    </h1>
                    {{-- <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">
                        Commence par vendre et payer depuis notre boutique en ligne.
                        Devenez client fidèle profite des offres extraordinaires
                    </p> --}}

                    <!-- Buttons -->
                    <div class="mt-4 grid gap-3 w-full sm:inline-flex">
                        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="/register">
                            Commencer
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="/contact">
                            Contacter nous
                        </a>
                    </div>
                    <!-- End Buttons -->
                </div>
                <!-- End Col -->

                <div class="relative ms-4">
                  <div x-data="{
                    slides: [
                        {
                            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/aspect-slide-1.webp',
                            imgAlt: 'New collection - ride the wave of excitement.',
                        },
                        {
                            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/aspect-slide-2.webp',
                            imgAlt: 'Up to 30% discount, gear up for adventure.',
                        },
                        {
                            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/aspect-slide-3.webp',
                            imgAlt: '30% off all surfing essentials, ride like a pro.',
                        },
                    ],
                    currentSlideIndex: 1,
                    previous() {
                        if (this.currentSlideIndex > 1) {
                            this.currentSlideIndex = this.currentSlideIndex - 1
                        } else {
                            this.currentSlideIndex = this.slides.length
                        }
                    },
                    next() {
                        if (this.currentSlideIndex < this.slides.length) {
                            this.currentSlideIndex = this.currentSlideIndex + 1
                        } else {
                            this.currentSlideIndex = 1
                        }
                    },
                    autoSlide() {
                        setInterval(() => {
                            this.next();
                        }, 3000); // 1 seconde
                    },
                }" x-init="autoSlide()" class="relative w-full overflow-hidden">
                    <!-- previous button -->
                    <button type="button" class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-surface/40 p-2 text-on-surface transition hover:bg-surface/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:outline-offset-0 dark:bg-surface-dark/40 dark:text-on-surface-dark dark:hover:bg-surface-dark/60 dark:focus-visible:outline-primary-dark" aria-label="previous slide" x-on:click="previous()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                
                    <!-- next button -->
                    <button type="button" class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-surface/40 p-2 text-on-surface transition hover:bg-surface/60 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:outline-offset-0 dark:bg-surface-dark/40 dark:text-on-surface-dark dark:hover:bg-surface-dark/60 dark:focus-visible:outline-primary-dark" aria-label="next slide" x-on:click="next()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                   
                    <!-- slides -->
                    <div class="relative aspect-3/1 w-full">
                        <template x-for="(slide, index) in slides">
                            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.700ms>
                                <img class="absolute w-full h-full inset-0 object-cover text-on-surface dark:text-on-surface-dark" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                            </div>
                        </template>
                    </div>
                    
                    <!-- indicators -->
                    <div class="absolute rounded-radius bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 bg-surface/75 px-1.5 py-1 md:px-2 dark:bg-surface-dark/75" role="group" aria-label="slides" >
                        <template x-for="(slide, index) in slides">
                            <button class="size-2 rounded-full transition bg-on-surface dark:bg-on-surface-dark" x-on:click="currentSlideIndex = index + 1" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-on-surface dark:bg-on-surface-dark' : 'bg-on-surface/50 dark:bg-on-surface-dark/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
                        </template>
                    </div>
                </div>
                
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
    </section>

    {{-- ------------------------------------------------------------------------------------------- --}}

    <!-- Popular Brands Section -->
    <section class="py-20 bg-white dark:bg-gray-800">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-bold dark:text-gray-200">Browse Popular<span class="text-blue-500"> Brands</span></h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-blue-200"></div>
                        <div class="flex-1 h-2 bg-blue-400"></div>
                        <div class="flex-1 h-2 bg-blue-600"></div>
                    </div>
                </div>
                <p class="mb-12 text-base text-center text-gray-500 dark:text-gray-400">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
                    Pariatur numquam, odio quod nobis ipsum ex cupiditate?
                </p>
            </div>
        </div>
        <div class="max-w-6xl px-4 py-4 mx-auto">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">
              @foreach ($brands as $brand)
                <div class="bg-white rounded-lg shadow-md dark:bg-gray-700" wire:key=" {{ $brand->id }} ">
                  <a href="/products?selected_brands[0]={{ $brand->id }}" class="block">
                    <img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}" class="object-cover w-full h-64 rounded-t-lg">
                  </a>
                  <div class="p-5 text-center">
                    <a href="#" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">
                      {{ $brand->name }}
                    </a>
                  </div>
                </div>
              @endforeach
              
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-20 bg-orange-200 dark:bg-orange-900">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-bold dark:text-gray-200">Browse <span class="text-blue-500">Categories</span></h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-blue-200"></div>
                        <div class="flex-1 h-2 bg-blue-400"></div>
                        <div class="flex-1 h-2 bg-blue-600"></div>
                    </div>
                </div>
                <p class="mb-12 text-base text-center text-gray-500 dark:text-gray-300">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
                    Pariatur numquam, odio quod nobis ipsum ex cupiditate?
                </p>
            </div>
        </div>
      
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">
              @foreach ($categories as $cate)
                <a  wire:key=" {{ $cate->id }}" href="/products?selected_categories[0]={{ $cate->id }}" class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                  <div class="p-4 md:p-5">
                    
                    <div class="flex justify-between items-center">
                          <div class="flex items-center">
                              <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="{{ url('storage', $cate->image) }}" alt="Laptops">
                              <div class="ms-3">
                                  <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                      {{ $cate->name }}
                                  </h3>
                              </div>
                          </div>
                          <div class="ps-3">
                            <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="m9 18 6-6-6-6" />
                            </svg>
                          </div>
                        </div>
                        
                      </div>
                    </a>
                  @endforeach
                <!-- Add more category cards here -->
            </div>
        </div>
    </section>

    <section class="py-14 font-poppins dark:bg-gray-800">
        <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
          <div class="max-w-xl mx-auto">
            <div class="text-center ">
              <div class="relative flex flex-col items-center">
                <h1 class="text-5xl font-bold dark:text-gray-200"> Customer <span class="text-blue-500"> Reviews
                  </span> </h1>
                <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                  <div class="flex-1 h-2 bg-blue-200">
                  </div>
                  <div class="flex-1 h-2 bg-blue-400">
                  </div>
                  <div class="flex-1 h-2 bg-blue-600">
                  </div>
                </div>
              </div>
              <p class="mb-12 text-base text-center text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
                Pariatur
                numquam, odio quod nobis ipsum ex cupiditate?
              </p>
            </div>
          </div>
      
          <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 ">
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
              <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                  <div class="flex mr-2 rounded-full">
                    <img src="https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                  </div>
                  <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                      Adren Roy</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Web Designer</p>
                  </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
                </p>
              </div>
              <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                iure minus sed fugit obcaecati minima quam reiciendis dicta!
              </p>
              <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                  <ul class="flex items-center justify-start mr-4">
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                      3.0</span>
                  </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                  <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                          <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                          </path>
                        </svg>
                      </a>
                      <span>12</span>
                    </div>
                    <div class="flex text-sm text-gray-700 dark:text-gray-400">
                      <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                          </path>
                        </svg>Reply</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
              <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                  <div class="flex mr-2 rounded-full">
                    <img src="https://i.postimg.cc/q7pv50zT/pexels-edmond-dant-s-4342352.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                  </div>
                  <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                      Sonira Roy</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Manager</p>
                  </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
                </p>
              </div>
              <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                iure minus sed fugit obcaecati minima quam reiciendis dicta!
              </p>
              <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                  <ul class="flex items-center justify-start mr-4">
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                      3.0</span>
                  </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                  <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                          <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                          </path>
                        </svg></a>
                      <span>12</span>
                    </div>
                    <div class="flex text-sm text-gray-700 dark:text-gray-400">
                      <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                          </path>
                        </svg>Reply</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
              <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                  <div class="flex mr-2 rounded-full">
                    <img src="https://i.postimg.cc/JzmrHQmk/pexels-pixabay-220453.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                  </div>
                  <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                      William harry</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Marketing Officer</p>
                  </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
                </p>
              </div>
              <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                iure minus sed fugit obcaecati minima quam reiciendis dicta!
              </p>
              <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                  <ul class="flex items-center justify-start mr-4">
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                      3.0</span>
                  </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                  <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                          <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                          </path>
                        </svg></a>
                      <span>12</span>
                    </div>
                    <div class="flex text-sm text-gray-700 dark:text-gray-400">
                      <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                          </path>
                        </svg>Reply</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
              <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                  <div class="flex mr-2 rounded-full">
                    <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                  </div>
                  <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                      James jack</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Java Programmer</p>
                  </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
                </p>
              </div>
              <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                iure minus sed fugit obcaecati minima quam reiciendis dicta!
              </p>
              <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                  <ul class="flex items-center justify-start mr-4">
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                      3.0</span>
                  </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                  <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                          <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                          </path>
                        </svg></a>
                      <span>12</span>
                    </div>
                    <div class="flex text-sm text-gray-700 dark:text-gray-400">
                      <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                          </path>
                        </svg>Reply</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>



