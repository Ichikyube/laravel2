<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style2.css') }}">
    <script src={{ asset('flowbite.js') }}"></script>
</head>
<body class="overflow-x-hidden">
    <header>
        <nav class="border-gray-200 container mx-auto px-4 lg:px-6 py-2.5">
            <div class="flex flex-wrap relative items-center mx-auto max-w-screen-xl">
                <div class="w-full -z-20"><a href="#" class="font-playfair font-bold text-xl tracking-wide absolute top-2 left-1/2 text-center">Dream Agency</a>
                </div>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex justify-end items-center p-2 ml-1 text-sm text-gray-500
                rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-20" aria-controls="navbar-default"
                    aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg') }}">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg') }}">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full lg:flex justify-between items-center" id="navbar-default">
                    <ul class="flex flex-col lg:flex-row gap-11">
                        <li>
                            <a href="/" class="font-hind" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="">Services</a>
                        </li>
                        <li>
                            <a href="#" class="">Contact Us</a>
                        </li>
                    </ul>
                    <div class="flex items-center lg:order-2">
                        <a href="#" class="text-gray-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300
                        font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none"><img src="{{ asset('img/facebook.svg') }}" alt=""></a>
                        <a href="#" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium
                        rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 first-line:focus:outline-none"><img src="{{ asset('img/in.svg') }}" alt=""></a>
                        <a href="#" class="text-gray-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300
                        font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none
                        "><img src="{{ asset('img/insta.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
