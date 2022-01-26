<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Menu</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
   </head>
   <body>
   <!-- Navigation -->
   <nav class="fixed flex justify-between py-6 w-full lg:px-48 md:px-12 px-4 content-center bg-secondary z-10 bg-white">
       <div class="flex items-center">
           <a href="/" class="h-4">Stonks Pizza</a>
       </div>
       <ul class="font-montserrat items-center hidden md:flex">
           <li class="mx-3 ">
               <a class="growing-underline" href="/menu">
                   Menu
               </a>
           </li>
           <li class="growing-underline mx-3">
               <a href="/contact">Contact</a>
           </li>
           <li class="growing-underline mx-3">
               <a href="/about">About</a>
           </li>
       </ul>
       <div class="font-montserrat hidden md:block">
           @if (Route::has('login'))
               <div>
                   @auth
                       <a href="{{ url('/dashboard') }}" class="mr-6">Dashboard</a>
                   @else
                       <a href="{{ route('login') }}" class="mr-6">Log in</a>

                       @if (Route::has('register'))
                           <a href="{{ route('register') }}" class="py-2 px-4 text-white bg-black rounded-3xl">Register</a>
                       @endif
                   @endauth
               </div>
           @endif
       </div>
       <div id="showMenu" class="md:hidden">
           <img src="{{URL::asset('/img/Menu.svg')}}" alt="Menu icon" />
       </div>
   </nav>
   <div id='mobileNav' class="hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-white z-20 animate-fade-in-down">
       <div id="hideMenu" class="flex justify-end">
           <img src="{{URL::asset('/img/Cross.svg')}}" alt="" class="h-16 w-16" />
       </div>
       <ul class="font-montserrat flex flex-col mx-8 my-24 items-center text-3xl">
           <li class="my-6">
               <a href="/menu">Menu</a>
           </li>
           <li class="my-6">
               <a href="/contact">Contact</a>
           </li>
           <li class="my-6">
               <a href="/about">About</a>
           </li>
       </ul>
   </div>
   <section
       class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
       <div class="md:flex-1 md:mr-10">
           <h1 class="font-pt-serif text-5xl font-bold mb-7">
               Hieronder vind u ons menu.
           </h1>
           <p class="font-pt-serif font-normal mb-7">
               Wij maken alleen maar VERSE pizza's!
           </p>
       </div>
   </section>
   <!-- Menu -->
   <section class="sectionSize bg-secondary justify-center md:justify-between md:items-center flex flex-col">
       <div class="md:grid md:grid-cols-5 md:grid-rows-3">
           @foreach ($pizza as $pizza)
           <div class="flex items-start font-montserrat my-6 mr-10">
               <div>
                   <h3 class="font-semibold text-2xl">{{   $pizza->naam }}</h3>
                   <p>
                       {{ $pizza->beschrijving }} <br> {{ $pizza->ingredienten }}
                   </p>
               </div>
           </div>
   @endforeach
       </div>
   </section>
   <!-- Footer -->
   <section class="bg-black sectionSize">
       <div class="mb-4">
           <p class="h-4">Stonks Pizza</p>
       </div>
       <div class="flex mb-8">
           <a href="#">
               <img src="{{URL::asset('/img/Facebook.svg')}}" alt="Facebook logo" class="mx-4" />
           </a>
           <a href="#">
               <img src="{{URL::asset('/img/Youtube.svg')}}" alt="Youtube logo" class="mx-4" />
           </a>
           <a href="#">
               <img src="{{URL::asset('/img/Instagram.svg')}}" alt="Instagram logo" class="mx-4" />
           </a>
           <a href="#">
               <img src="{{URL::asset('/img/Twitter.svg')}}" alt="Twitter logo" class="mx-4" />
           </a>
       </div>
       <div class="text-white font-montserrat text-sm">
           © 2021 STONKS PIZZA
       </div>
   </section>
   <script>
       window.addEventListener("load", function () {
           console.log(document.querySelector("#showMenu"));
           document
               .querySelector("#showMenu")
               .addEventListener("click", function (event) {
                   document.querySelector("#mobileNav").classList.remove("hidden");
               });

           document
               .querySelector("#hideMenu")
               .addEventListener("click", function (event) {
                   document.querySelector("#mobileNav").classList.add("hidden");
               });

           document.querySelectorAll("[toggleElement]").forEach((toggle) => {
               toggle.addEventListener("click", function (event) {
                   console.log(toggle);
                   const answerElement = toggle.querySelector("[answer]");
                   const caretElement = toggle.querySelector("img");
                   console.log(answerElement);
                   if (answerElement.classList.contains("hidden")) {
                       answerElement.classList.remove("hidden");
                       caretElement.classList.add("rotate-90");
                   } else {
                       answerElement.classList.add("hidden");
                       caretElement.classList.remove("rotate-90");
                   }
               });
           });
       });

   </script>
   </body>
</html>
