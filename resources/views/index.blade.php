<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sam Building</title>
    <meta name="description" content="My Application Description">
    <meta name="author" content="Sammy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body class="font-body">

    <section class="mb-20 bg-white md:mb-52 xl:mb-72">

            <div class="container max-w-screen-xl px-4 mx-auto">

                <nav class="z-10 flex-wrap items-center lg:flex py-14 xl:relative" x-data="{navbarOpen:false}">

                    <div class="flex items-center justify-between mb-10 lg:mb-0">
                        <img src="img/navbar-logo.png" alt="Logo img" class="w-52 md:w-80 lg:w-full">

                        <button class="flex items-center justify-center w-10 h-10 ml-auto text-green-700 border border-green-700 rounded-md lg:hidden" @click="navbarOpen = !navbarOpen">
                            <i data-feather="menu"></i>
                        </button>
                    </div>

                    <ul class="flex-col lg:flex lg:flex-row lg:items-center lg:mx-auto lg:space-x-8 xl:space-x-16" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">

                        <li class="mb-5 text-lg font-semibold text-gray-900 transition duration-300 ease-in-out hover:text-gray-400 lg:mb-0">
                            <a href="#">Landing</a>
                        </li>
        
                        <li class="mb-5 text-lg font-semibold text-gray-900 transition duration-300 ease-in-out hover:text-gray-400 lg:mb-0">
                            <a href="#">Pages</a>
                        </li>
        
                        <li class="mb-5 text-lg font-semibold text-gray-900 transition duration-300 ease-in-out hover:text-gray-400 lg:mb-0">
                            <a href="#">Contact</a>
                        </li>
        
                        <li class="mb-5 text-lg font-semibold text-gray-900 transition duration-300 ease-in-out hover:text-gray-400 lg:mb-0">
                            <a href="#">About</a>
                        </li>

                    </ul>

                    <button class="px-5 py-3 text-lg font-semibold text-green-700 transition duration-500 ease-linear border-2 border-green-700 rounded-lg lg:block hover:bg-green-700 hover:text-white" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                        Request quote
                    </button>

                </nav>

                <div class="flex items-center justify-center xl:justify-start">

                    <div class="text-center mt-28 xl:text-left">
                        <h1 class="mb-6 text-4xl font-semibold leading-normal text-gray-900 md:text-6xl lg:text-7xl">Get your dream <br> house now</h1>

                        <p class="mb-12 text-xl font-normal leading-relaxed text-gray-400">Having a sweet home is everyone's dream. Have you <br> owned your dream house?</p>

                        <button class="px-6 py-4 text-lg font-semibold text-white transition duration-500 ease-in-out bg-green-700 rounded-xl hover:bg-green-900">Contact us</button>
                    </div>

                    <div class="top-0 right-0 z-0 hidden xl:block xl:absolute">
                        <img src="img/home-img.png" alt="Home img">
                    </div>

                </div>


                

            </div> <!-- container.// -->


    </section>

    <!-- Features section -->
    <section class="mb-20 bg-white ">
        <div class="container max-w-screen-xl px-4 mx-auto xl:flex xl:flex-row-reverse">
            <div class="flex flex-col items-center justify-center xl:pt-16">
                <div class="mb-16 text-center">
                    <h1 class="mb-6 text-2xl font-medium text-black md:text-4xl md:font-semibold">Choice of various types of <br> house</h1>
                    <p class="text-base text-gray-400 md:text-xl">We provide a wide of selection of home types for you and your <br> family and are free to choose a home model</p>
                </div>
                <div class="flex flex-col space-y-20 md:space-y-16">
                    <div class="flex flex-col items-center justify-center space-y-5 text-center md:flex-row md:space-x-4 md:pl-6 md:text-left">
                        <span class="p-8 bg-gray-200 rounded-lg">
                            <img src="svg/check-circle.svg" alt="check-circle-svg">
                        </span>
                        <div class="">
                            <h1 class="mb-3 text-2xl font-semibold text-black ">Best Home Guarantee</h1>
                            <p class="text-xl text-gray-400">We guarantees the quality of your home you bought <br> from D’house</p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center justify-center space-y-5 text-center justify md:flex-row md:space-x-4 md:text-left">
                        <span class="p-8 bg-gray-200 rounded-lg">
                            <img src="svg/lock.svg" alt="lock-svg">
                        </span>
                        <div class="">
                            <h1 class="mb-3 text-2xl font-semibold text-black ">Safe Transaction</h1>
                            <p class="text-xl text-gray-400">Your transactions will always be kept confidential <br> and will get discounted</p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center justify-center space-y-5 text-center md:flex-row md:space-x-4 md:text-left">
                        <span class="p-8 bg-gray-200 rounded-lg">
                            <img src="svg/block.svg" alt="block-svg">
                        </span>
                        <div class="">
                            <h1 class="mb-3 text-2xl font-semibold text-black ">Low and Cost Home Taxes</h1>
                            <p class="text-xl text-gray-400">By buying a house from D’house, you will get a tax <br>discount</p>
                        </div>
                    </div>
                </div>
            </div>

            <img class="absolute left-0 hidden xl:block xl:mt-8" src="img/feature-img.png" alt="feature-img">
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="container max-w-screen-xl px-4 mx-auto mb-28">
        <div class="flex flex-col items-center space-y-12">
            <h1 class="text-3xl font-semibold">Our Gallery</h1>
            <div class="justify-center hidden space-x-14 lg:space-x-24 md:flex">
                <a class="px-6 py-2 text-xl font-semibold text-white bg-green-900 rounded-lg" href="#" >All</a>
                <a class="px-5 py-2 text-xl text-black transition duration-700 ease-in-out rounded-lg hover:px-6 hover:py-2 hover:bg-gray-200 hover:text-gray-400" href="#" >Exterior</a>
                <a class="px-5 py-2 text-xl text-black transition duration-700 ease-in-out rounded-lg hover:px-6 hover:py-2 hover:bg-gray-200 hover:text-gray-400" href="#" >Interior</a>
                <a class="px-5 py-2 text-xl text-black transition duration-700 ease-in-out rounded-lg hover:px-6 hover:py-2 hover:bg-gray-200 hover:text-gray-400" href="#" >Building</a>
            </div>
            <div class="grid grid-cols-3 gap-8">
                <div class="">
                    <img class="mb-8" src="img/gallery-1.png" alt="gallery-1">
                    <img class="mt-" src="img/gallery-4.png" alt="gallery-4">
                </div>
                <div class="">
                    <img class="mb-8" src="img/gallery-2.png" alt="gallery-2">
                    <img class="mb-8" src="img/gallery-5.png" alt="gallery-5">
                    <img class="mt-" src="img/gallery-6.png" alt="gallery-6">
                </div>
                <div class="">
                    <img class="mb-8" src="img/gallery-3.png" alt="gallery-1">
                    <img class="mt-" src="img/gallery-7.png" alt="gallery-1">
                </div>
            </div>
        </div>
        
    </section>

    <!-- Testimonial Section -->
    <section class="container max-w-screen-xl px-4 mx-auto mb-52">

        <div class="relative mb-16 text-center">

            <h1 class="mb-6 text-2xl text-gray-400 uppercase">TESTIMONIAL</h1>
            <h2 class="text-4xl font-semibold text-black">What People Say <br> About D’house</h2>
            <div class="absolute top-0 left-0 hidden lg:block">
                <img class="mb-8" src="img/testimoni-1.png" alt="testimoni-1">
                <img class="" src="img/testimoni-2.png" alt="testimoni-2">
            </div>
                
        </div>

        <div class="flex flex-col justify-center space-y-10 md:flex-row lg:space-x-12 md:space-x-8 md:space-y-0">

            <div class="flex flex-col px-8 py-10 space-y-8 bg-gray-100 rounded-lg">
                <img class="w-16 h-16" src="img/testimoni-3.png" alt="testimoni-3">
                <span class="flex space-x-6">
                    <img src="svg/star.svg" alt="star">
                    <img src="svg/star.svg" alt="star">
                    <img src="svg/star.svg" alt="star">
                    <img src="svg/star.svg" alt="star">
                    <img src="svg/star.svg" alt="star">
                </span>
                <p class="text-sm text-gray-400">I recommend anyone to buy house on <br> D’house. I received great customer service <br> from the specialists who helped me.</p>
                <h1 class="text-xl font-semibold text-black">Brooklyn Simmons</h1>
            </div>

            <div class="flex flex-col px-8 py-10 space-y-8 bg-gray-100 rounded-lg">
                <img class="w-16 h-16" src="img/testimoni-4.png" alt="testimoni-4">
                <span class="flex space-x-6">
                    <img src="svg/star.svg" alt="star">
                    <img src="svg/star.svg" alt="star">
                    <img src="svg/star.svg" alt="star">
                    <img src="svg/star.svg" alt="star">
                    <img src="svg/star.svg" alt="star">
                </span>
                <p class="text-sm text-gray-400">D’house is the best property agent in the <br> world. I received great customer service <br> from the D’house agent</p>
                <h1 class="text-xl font-semibold text-black">Ralph Edwards</h1>
            </div>
                
        </div>
        
    </section>

    <section class="container max-w-screen-xl px-4 mx-auto mb-28">
        <div class="px-8 pt-10 pb-24 bg-green-800 mb-28 rounded-3xl">
            <div class="text-base text-center text-white">
                <h1 class="mb-4 text-4xl font-semibold leading-normal">Talk to us <br> to discuss</h1>
                <p>Need more time to discuss? Won’t worry, we are <br> ready to help you. You can fill in the column on the <br> right to book a meeting with us. Totally free.</p>
            </div>
            
            <form class="hidden bg-white rounded-3xl md:block" action="" method="post">
                <h1>Book a meeting</h1>
                
            </form>
        </div>
    </section>
</body>
</html>
