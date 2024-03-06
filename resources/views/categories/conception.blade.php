@extends('frontLayout')

<main>

    <div id="myCarousel" class="carousel slide h-50" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

            <div class="container">
              <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>



<!--
  Welcome to Tailwind Play, the official Tailwind CSS playground!

  Everything here works just like it does when you're running Tailwind locally
  with a real build pipeline. You can customize your config file, use features
  like `@apply`, or even add third-party plugins.

  Feel free to play with this example if you're just learning, or trash it and
  start from scratch if you know enough to be dangerous. Have fun!
-->
<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
    <div class="w-full items-center mx-auto max-w-screen-lg">
      <div class="group grid w-full grid-cols-2">
         <div>
          <div class="pr-12">
            <p class="peer mb-6 text-gray-400">
              Simply Air Conditioning London are fixed system heating and air conditioning installation specialists. Because we’ve tested all heating and air conditioning unit manufacturers before using them there are no hidden surprises for our customers. We only supply air conditioning units from the leading manufacturers so any system we fit will be of the highest quality. We also thoroughly test every type of unit before supplying..
            </p>
            <p class="mb-6 text-gray-400">
            We also provide tailored Air Conditioning installation packages. The Air Conditioning systems we install are all inverter driven therefor are energy efficient, stylish & silent both providing cooling and heating. At Zero Degree AC Limited we only use the best brands.
            </p>
            <h3 class="mb-4 font-semibold text-xl text-gray-400">Conditioning installation packages</h3>
            <ul role="list" class="marker:text-sky-400 list-disc pl-5 space-y-3 text-slate-500">
              <li>5 cups chopped Porcini mushrooms</li>
              <li>1/2 cup of olive oil</li>
              <li>3lb of celery</li>
            </ul>
          </div>
        </div>
        <div class="pr-16 relative flex flex-col before:block before:absolute before:h-1/6 before:w-4 before:bg-blue-500 before:bottom-0 before:right-0 before:rounded-lg  before:transition-all group-hover:before:bg-orange-300 overflow-hidden">
          <div class="absolute top-0 right-0 bg-blue-500 w-4/6 px-12 py-14 flex flex-col justify-center rounded-xl group-hover:bg-sky-600 transition-all ">
            <span class="block mb-10 font-bold group-hover:text-orange-300">HERE WE ARE</span>
            <h2 class="text-white font-bold text-3xl">
            What started as a tiny team mostly dedicated to Air Quality has grown.
            </h2>
          </div>
          <a class="font-bold text-sm flex mt-2 mb-8 items-center gap-2" href="">
            <span>MORE ABOUT US</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </a>
          <div class="rounded-xl overflow-hidden">
            <img src="https://picsum.photos/800/800" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

<!--
  Welcome to Tailwind Play, the official Tailwind CSS playground!

  Everything here works just like it does when you're running Tailwind locally
  with a real build pipeline. You can customize your config file, use features
  like `@apply`, or even add third-party plugins.

  Feel free to play with this example if you're just learning, or trash it and
  start from scratch if you know enough to be dangerous. Have fun!
-->
<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
    <div class="w-full items-center mx-auto max-w-screen-lg">
      <div class="group grid w-full grid-cols-2">
         <div>
          <div class="pr-12">
            <p class="peer mb-6 text-gray-400">
              Simply Air Conditioning London are fixed system heating and air conditioning installation specialists. Because we’ve tested all heating and air conditioning unit manufacturers before using them there are no hidden surprises for our customers. We only supply air conditioning units from the leading manufacturers so any system we fit will be of the highest quality. We also thoroughly test every type of unit before supplying..
            </p>
            <p class="mb-6 text-gray-400">
            We also provide tailored Air Conditioning installation packages. The Air Conditioning systems we install are all inverter driven therefor are energy efficient, stylish & silent both providing cooling and heating. At Zero Degree AC Limited we only use the best brands.
            </p>
            <h3 class="mb-4 font-semibold text-xl text-gray-400">Conditioning installation packages</h3>
            <ul role="list" class="marker:text-sky-400 list-disc pl-5 space-y-3 text-slate-500">
              <li>5 cups chopped Porcini mushrooms</li>
              <li>1/2 cup of olive oil</li>
              <li>3lb of celery</li>
            </ul>
          </div>
        </div>
        <div class="pl-16 relative flex items-end flex-col before:block before:absolute before:h-1/6 before:w-4 before:bg-blue-500 before:bottom-0 before:left-0 before:rounded-lg  before:transition-all group-hover:before:bg-orange-300 overflow-hidden">
          <div class="absolute top-0 left-0 bg-blue-500 w-4/6 px-12 py-14 flex flex-col justify-center rounded-xl group-hover:bg-sky-600 transition-all ">
            <span class="block mb-10 font-bold group-hover:text-orange-300">HERE WE ARE</span>
            <h2 class="text-white font-bold text-3xl">
            What started as a tiny team mostly dedicated to Air Quality has grown.
            </h2>
          </div>
          <a class="font-bold text-sm flex mt-2 mb-8 items-center gap-2" href="">
            <span>MORE ABOUT US</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </a>
          <div class="rounded-xl overflow-hidden">
            <img src="https://picsum.photos/800/800" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--
  Welcome to Tailwind Play, the official Tailwind CSS playground!

  Everything here works just like it does when you're running Tailwind locally
  with a real build pipeline. You can customize your config file, use features
  like `@apply`, or even add third-party plugins.

  Feel free to play with this example if you're just learning, or trash it and
  start from scratch if you know enough to be dangerous. Have fun!
-->
<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
    <div class="w-full items-center mx-auto max-w-screen-lg">
      <div class="group grid w-full grid-cols-2">
        <div class="relative flex before:block before:absolute before:h-1/6 before:w-2 before:bg-stone-200 before:top-0 before:right-0 before:rounded-lg  before:transition-all group-hover:before:bg-orange-300 overflow-hidden">
          <div class="absolute bottom-0 right-0 bg-blue-500 w-4/6 overflow-hidden flex flex-col justify-center rounded-xl group-hover:bg-sky-600 transition-all shadow-2xl">
            <img src="https://picsum.photos/800/800" alt="">
          </div>

          <div class="h-2/3 rounded-xl overflow-hidden">
            <img src="https://picsum.photos/800/800" class="h-full" alt="">
          </div>
          <a class="-rotate-90 font-bold mt-2 mb-8 r gap-2 h-16 text-2xl leading-7" href="">
            <span>25 ans <br> D'expérience</span>
          </a>
          <a class="absolute h-20 bg-blue-500 w-20 flex items-center justify-center rounded-full bottom-10 left-10 text-white before:block before:absolute before:h-20 before:w-20 before:bg-sky-100 before:rounded-full group-hover:before:animate-ping before:-z-10 hover:bg-sky-600" href="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
          </svg>
          </a>
        </div>
        <div>
          <div class="pl-12">
            <h2 class="text-5xl font-medium mb-6">Cost-Effective heating and Air conditioning</h2>
            <h3 class="text-2xl font-medium mb-6">Creating the perfect temperature all year round</h3>
            <p class="mb-6 text-gray-400">energy efficient, stylish & silent both providing cooling and heating. At Zero Degree AC Limited we only use the best brands.
            </p>
            <h3 class="mb-4 font-semibold text-xl text-gray-400">Conditioning installation packages</h3>
            <div class="grid grid-cols-2 gap-6 justify-between mb-3">
              <a href="" class="flex items-center gap-3 hover:text-blue-300">
                <span class="h-10 w-10 rounded-full bg-blue-300 flex items-center justify-center text-white shadow-lg shadow-blue-500/30">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                  </svg>
                </span>
                <span class="font-semibold">Service</span>
              </a>
              <a href="" class="flex items-center gap-3 hover:text-blue-300">
                <span class="h-10 w-10 rounded-full bg-blue-300 flex items-center justify-center text-white shadow-lg shadow-blue-500/30">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                  </svg>
                </span>
                <span class="font-semibold">installation</span>
              </a>
            </div>
            <div class="grid grid-cols-2 gap-6 justify-between mb-3">
              <a href="" class="flex items-center gap-3 hover:text-blue-300">
                <span class="h-10 w-10 rounded-full bg-blue-300 flex items-center justify-center text-white shadow-lg shadow-blue-500/30">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                  </svg>
                </span>
                <span class="font-semibold">Gold Membership</span>
              </a>
              <a href="" class="flex items-center gap-3 hover:text-blue-300">
                <span class="h-10 w-10 rounded-full bg-blue-300 flex items-center justify-center text-white shadow-lg shadow-blue-500/30">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                  </svg>
                </span>
                <span class="font-semibold">Maintenance</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!--
  Welcome to Tailwind Play, the official Tailwind CSS playground!

  Everything here works just like it does when you're running Tailwind locally
  with a real build pipeline. You can customize your config file, use features
  like `@apply`, or even add third-party plugins.

  Feel free to play with this example if you're just learning, or trash it and
  start from scratch if you know enough to be dangerous. Have fun!
-->
<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
    <div class="w-full items-center mx-auto max-w-screen-lg">
      <div class="group grid w-full grid-cols-2">
        <div class="pl-16 relative flex items-end flex-col before:block before:absolute before:h-1/6 before:w-4 before:bg-blue-500 before:bottom-0 before:left-0 before:rounded-lg  before:transition-all group-hover:before:bg-orange-300 overflow-hidden">
          <div class="absolute top-0 left-0 bg-blue-500 w-4/6 px-12 py-14 flex flex-col justify-center rounded-xl group-hover:bg-sky-600 transition-all ">
            <span class="block mb-10 font-bold group-hover:text-orange-300">HERE WE ARE</span>
            <h2 class="text-white font-bold text-3xl">
            What started as a tiny team mostly dedicated to Air Quality has grown.
            </h2>
          </div>
          <a class="font-bold text-sm flex mt-2 mb-8 items-center gap-2" href="">
            <span>MORE ABOUT US</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </a>
          <div class="rounded-xl overflow-hidden">
            <img src="https://picsum.photos/800/800" alt="">
          </div>
        </div>
        <div>
          <div class="pl-12">
            <p class="peer mb-6 text-gray-400">
              Simply Air Conditioning London are fixed system heating and air conditioning installation specialists. Because we’ve tested all heating and air conditioning unit manufacturers before using them there are no hidden surprises for our customers. We only supply air conditioning units from the leading manufacturers so any system we fit will be of the highest quality. We also thoroughly test every type of unit before supplying..
            </p>
            <p class="mb-6 text-gray-400">
            We also provide tailored Air Conditioning installation packages. The Air Conditioning systems we install are all inverter driven therefor are energy efficient, stylish & silent both providing cooling and heating. At Zero Degree AC Limited we only use the best brands.
            </p>
            <h3 class="mb-4 font-semibold text-xl text-gray-400">Conditioning installation packages</h3>
            <ul role="list" class="marker:text-sky-400 list-disc pl-5 space-y-3 text-slate-500">
              <li>5 cups chopped Porcini mushrooms</li>
              <li>1/2 cup of olive oil</li>
              <li>3lb of celery</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

