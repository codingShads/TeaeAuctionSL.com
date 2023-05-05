<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com/3.2.4"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>

    <title>Document</title>
</head>

<body>
    


<nav class="container flex justify-around py-8 mx-auto bg-white">
    <div class="flex items-center">
      <h3 class="text-2xl font-medium text-blue-500">Welcome, {{ Auth::user()->name }}</h3>
    </div>
    <!-- left header section -->
    <div class="items-center hidden space-x-8 lg:flex">
      <a href="/users/dashboard">Home</a>
      <a href="/users/auctionProduct">Live Auction</a>
      <a href="/users/auctionitems">Product List</a>
      <a href="">Our Team</a>
      <a href="">Contact Us</a>
    </div>
    <!-- right header section -->
    <div class="flex items-center space-x-2">
      <button class="px-4 py-2 text-blue-100 bg-blue-800 rounded-md">
        Create New User
      </button>
      <button class="px-4 py-2 text-gray-200 bg-gray-400 rounded-md">
        <a href="/logout">Logout</a> 
      </button>
    </div>
  </nav>

@yield('UserUI')

<footer class=" border-t border-gray-200 bg-blue-100">
    <div class="container flex flex-col flex-wrap px-4 py-16 mx-auto md:items-center lg:items-start md:flex-row md:flex-nowrap">
        <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
            <a class="flexitems-center justify-center text-4xl font-bold text-blue-700 md:justify-start">
                Logo
            </a>
            <p class="mt-2 text-sm text-gray-500">
                Footer dummay data Lorem.....
            </p>
        </div>
        <div class="justify-between w-full mt-4 text-center lg:flex">
            <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                <h2 class="mb-2 font-bold tracking-widest text-gray-900">
                    Useful Links
                </h2>
                <ul class="mb-8 space-y-2 text-sm list-none">
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Home</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">About Us</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Blogs</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                <h2 class="mb-2 font-bold tracking-widest text-gray-900">
                    Useful Links
                </h2>
                <ul class="mb-8 space-y-2 text-sm list-none">
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Home</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">About Us</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Blogs</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                <h2 class="mb-2 font-bold tracking-widest text-gray-900">
                    Useful Links
                </h2>
                <ul class="mb-8 space-y-2 text-sm list-none">
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Home</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">About Us</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Blogs</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="flex justify-center p-10 bg-black">
        <p class="text-base text-gray-400">
            All rights reserved to Thileeban S
        </p>
    </div>
</footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
