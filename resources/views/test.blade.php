<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!-- Scripts -->
          @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="text-gray-600 font-nunito">

  <div class="md:grid md:grid-cols-6"> <!-- Page Content -->
    <div class="md:col-span-1 md:flex md:justify-end">
      <nav class="text-right">
        <div class="flex justify-between items-center ">
          <h1 class="font-bold uppercase p-4 border-b border-gray-100  ">
            <a   href="/" class="text-violet-500 sm:text-green-600 md:text-red-600">Food Ninja</a>
          </h1>
          <div class="px-4 md:hidden hover:cursor-pointer" id="burger" onclick="toggle()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>

          </div>
        </div>
        <ul class="text-sm mt-6 hidden md:block" id="menu">
          <li class="text-gray-700 font-bold p-1 border-red-500 border-r-4">
            <a href="#" class=" px-4 flex justify-end">
              <span >Home</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
              </svg>


            </a>
          </li>
          <li class="p-1 border-white border-r-4">
            <a href="#" class=" px-4 flex justify-end">
              <span>About</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
              </svg>

            </a>
          </li>
          <li class="p-1 border-white border-r-4">
            <a href="#" class=" px-4 flex justify-end">
              <span>Contact</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
              </svg>

            </a>
          </li>
        </ul>
      </nav>
    </div>

    <main class="px-16 py-6 bg-gray-100 md:col-span-5">
      <div class="flex justify-center md:justify-end  space-x-4">
        <a href="#" class="text-primary btn border-primary md:border-2 hover:bg-red-500 hover:text-white hover:shadow-lg transition ease-in duration-200">Log in</a>
        <a href="#" class="text-primary btn border-primary md:border-2 hover:bg-red-500 hover:text-white hover:shadow-lg transition ease-in duration-200" >Sign up</a>
      </div>

      <header>
        <h2 class="text-6xl text-gray-700 font-semibold mt-10">Recipes</h2>
        <h3 class="text-2xl font-semibold   ">For Ninjas</h3>
      </header>

      <div>
        <h4 class="font-bold mt-12 pb-2 border-b-2 border-gray-200">Latest Recipes</h4>

        <div class="mt-8 grid md:grid-cols-3 gap-10">
          <!-- cards go here -->
          <div class="card hover:shadow-lg">
            <img src="{{asset('img/stew.jpg')}}" alt="stew" class="w-full h-32 sm:h-48 object-cover">
            <div class="m-4">
              <span>5 Bean Chili Stew</span>
              <span class="block text-gray-500 text-sm">Recipe by Mario</span>
            </div>
            <div class="badge  flex justify-center gap-1">
                <span><svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  </span>
                <span>25 mins</span>
            </div>
          </div>
          <div class="card hover:shadow-lg">
            <img src="{{asset('img/noodles.jpg')}}" alt="noodles" class="w-full h-32 sm:h-48 object-cover">
            <div class="m-4">
              <span>Veg Noodles</span>
              <span class="block text-gray-500 text-sm">Recipe by Mario</span>
            </div>
            <div class="badge flex justify-center gap-1">
                <span><svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  </span>
                <span>25 mins</span>
            </div>
          </div>
          <div class="card hover:shadow-lg">
            <img src="{{asset('img/curry.jpg')}}" alt="curry" class="w-full h-32 sm:h-48 object-cover">
            <div class="m-4">
              <span>Tofu Curry</span>
              <span class="block text-gray-500 text-sm">Recipe by Mario</span>
            </div>
            <div class="badge flex justify-center gap-1">
                <span><svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  </span>
                <span>25 mins</span>
            </div>
          </div>
        </div>

        <h4 class="font-bold mt-12 pb-2 border-b-2 border-gray-200">Most Popular</h4>

        <div class="mt-8">
          <!-- cards go here -->
        </div>
      </div>

      <div class="flex justify-center">
        <div class="bg-secondary-100 text-secondary-200 btn">Load more</div>
      </div>
    </main>
  </div>
    <script type="text/javascript">
        const menu = document.querySelector('#menu');
        function toggle() {
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
