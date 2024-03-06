<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Redacteur') }}
        </h2>
    </x-slot>

    <div class="py-12 flex">
         <div class="heading text-center font-bold text-2xl m-5 text-gray-100">Full Responsive Video Cards</div>

        <div class="holder mx-auto w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">



        <div class="container flex flex-col mx-auto bg-white">
            <aside class="group/sidebar flex flex-col shrink-0 lg:w-[300px] w-[250px] transition-all duration-300 ease-in-out m-0 fixed z-40 inset-y-0 left-0 bg-white border-r border-r-dashed border-r-neutral-200 sidenav fixed-start loopple-fixed-start" id="sidenav-main"><div class="flex shrink-0 px-8 items-center justify-between h-[96px]">
            <a class="transition-colors duration-200 ease-in-out" href="https://www.loopple.com">
                <span>Le Digital Master</span>
            </a>
        </div>


<div class="relative pl-3 my-5 overflow-y-scroll">
    <div class="flex flex-col w-full font-medium">

    <!-- menu item -->
    <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
        <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Sales</a>
        </span>
    </div>


    <!-- menu item -->
    <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
        <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Profile</a>
        </span>
    </div>

    <!-- menu item -->
    <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
        <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Settings</a>
        </span>
    </div>

    <!-- menu item -->
    <div class="block pt-5 pb-[.15rem]">
        <div class="px-4 py-[.65rem]">
        <span class="font-semibold text-[0.95rem] uppercase dark:text-neutral-500/80 text-secondary-dark">Applications</span>
        </div>
    </div>

    <!-- menu item -->
    <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
        <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Users</a>
        </span>
    </div>


    <!-- menu item -->
    <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
        <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Orders</a>
        </span>
    </div>

    <!-- menu item -->
    <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
        <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Track Order</a>
        </span>
    </div>

    <!-- menu item -->
    <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
        <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Products</a>
        </span>
    </div>

    </div>
    </div>
</aside>
</div>


<div class="flex justify-center items-center min-h-screen">
  <div x-data="{ open: true }">
    <!-- Sidebar Overlay -->
    <div x-show="open" class="fixed inset-0 z-50 overflow-hidden">
      <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      <!-- Sidebar Content -->
      <section class="absolute inset-y-0 right-0 pl-10 max-w-full flex">
        <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform translate-x-0" x-transition:leave-end="transform translate-x-full" class="w-screen max-w-md">
          <div class="h-full flex flex-col py-6 bg-white shadow-xl">
            <!-- Sidebar Header -->
            <div class="flex items-center justify-between px-4">
              <h2 class="text-xl font-semibold text-black">Search</h2>
              <button x-on:click="open = false" class="text-gray-500 hover:text-gray-700">
                <span class="sr-only">Close</span>
                <svg class="h-6 w-6" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
            <!-- Search Input -->
            <div class="mt-4 px-4">
              <input type="text" placeholder="Search post here" class="w-full p-2 border border-gray-300 rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
            </div>
            <div class="mt-4 px-4">
              <p class="ml-2 text-gray-400">Results</p>
            </div>
            <!-- Sidebar Content -->
            <div class="mt-4 px-4 h-full overflow-auto">
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Card 1 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 1</h3>
                  <p class="text-gray-600">Content for card 1.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 2</h3>
                  <p class="text-gray-600">Content for card 2.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 3</h3>
                  <p class="text-gray-600">Content for card 3.</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 4</h3>
                  <p class="text-gray-600">Content for card 4.</p>
                </div>
                <!-- Card 5 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 5</h3>
                  <p class="text-gray-600">Content for card 5.</p>
                </div>
                <!-- Card 6 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 6</h3>
                  <p class="text-gray-600">Content for card 6.</p>
                </div>
                <!-- Card 7 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 7</h3>
                  <p class="text-gray-600">Content for card 7.</p>
                </div>
                <!-- Card 8 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 8</h3>
                  <p class="text-gray-600">Content for card 8.</p>
                </div>
                <!-- Card 9 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 9</h3>
                  <p class="text-gray-600">Content for card 9.</p>
                </div>
                <!-- Card 10 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 10</h3>
                  <p class="text-gray-600">Content for card 10.</p>
                </div>
                <!-- Card 11 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 11</h3>
                  <p class="text-gray-600">Content for card 11.</p>
                </div>
                <!-- Card 12 -->
                <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                  <h3 class="text-lg font-semibold text-black mb-2">Card 12</h3>
                  <p class="text-gray-600">Content for card 12.</p>
                </div>
                <!-- Add more cards as needed -->
              </div>
            </div>
            <!-- Sidebar Footer -->
            <div class="mt-6 px-4">
              <button class="flex justify-center items-center bg-black text-white rounded-md text-sm p-2 gap-1">
                <svg width="1rem" height="1rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 7C3 6.44772 3.44772 6 4 6H20C20.5523 6 21 6.44772 21 7C21 7.55228 20.5523 8 20 8H4C3.44772 8 3 7.55228 3 7ZM6 12C6 11.4477 6.44772 11 7 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H7C6.44772 13 6 12.5523 6 12ZM9 17C9 16.4477 9.44772 16 10 16H14C14.5523 16 15 16.4477 15 17C15 17.5523 14.5523 18 14 18H10C9.44772 18 9 17.5523 9 17Z" fill="currentColor"></path>
                  </g>
                </svg> Filters </button>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Your main content goes here -->
    <!-- Open sidebar button -->
    <button x-on:click="open = true" class="px-4 py-2 bg-black text-white rounded-md"> Open Sidebar </button>
  </div>
</div>

        </div>
    </div>
</x-app-layout>
