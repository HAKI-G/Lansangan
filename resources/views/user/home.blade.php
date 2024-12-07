<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feast Downtown</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Anton+SC&display=swap');
        body {
            font-family: "Anton SC", serif;
        }
    </style>
</head>

<body class="bg-[#FED801]  ">

<main class="h-screen overflow-y-scroll scroll-smooth snap-y snap-mandatory" >
<!-- section 1 -->
<section class="h-screen snap-start ">
    <div class="carousel">
    <nav class="flex justify-between items-center p-4 mx-20   ">
        <img class="w-32" src="/images/logo.png" alt="Feast Downtown">
        
        <nav-list class="flex items-center relative"> 
            <div>
            <a href="{{ route('cart') }}">
                <svg class="w-10 hidden sm:block" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M2.08416 2.7512C2.22155 2.36044 2.6497 2.15503 3.04047 2.29242L3.34187 2.39838C3.95839 2.61511 4.48203 2.79919 4.89411 3.00139C5.33474 3.21759 5.71259 3.48393 5.99677 3.89979C6.27875 4.31243 6.39517 4.76515 6.4489 5.26153C6.47295 5.48373 6.48564 5.72967 6.49233 6H17.1305C18.8155 6 20.3323 6 20.7762 6.57708C21.2202 7.15417 21.0466 8.02369 20.6995 9.76275L20.1997 12.1875C19.8846 13.7164 19.727 14.4808 19.1753 14.9304C18.6236 15.38 17.8431 15.38 16.2821 15.38H10.9792C8.19028 15.38 6.79583 15.38 5.92943 14.4662C5.06302 13.5523 4.99979 12.5816 4.99979 9.64L4.99979 7.03832C4.99979 6.29837 4.99877 5.80316 4.95761 5.42295C4.91828 5.0596 4.84858 4.87818 4.75832 4.74609C4.67026 4.61723 4.53659 4.4968 4.23336 4.34802C3.91052 4.18961 3.47177 4.03406 2.80416 3.79934L2.54295 3.7075C2.15218 3.57012 1.94678 3.14197 2.08416 2.7512Z" fill="#000"></path>
                        <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" fill="#000"></path>
                        <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" fill="#000"></path>
                    </g>
                </svg>
            </a>

</div>

            <div class="relative">
                <div class="hamburger-menu" onclick="toggleDropdown()">
                    <svg class="w-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H20" stroke="#000" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M5 17H20" stroke="#000" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M5 7H20" stroke="#000" stroke-width="2" stroke-linecap="round"></path>
                    </svg>
                </div>

                <!-- Dropdown Menu -->
                <div id="dropdown-menu" class="dropdown hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10">
                    <ul class="py-2 text-gray-700">
                    <!-- login and register -->

                    
                        <!-- Account Management -->
                        @if (Route::has('login'))
                                @auth
                                    <!-- Logout form -->
                                    <li>

                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                                        </x-dropdown-link>

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="block px-4 py-2 hover:bg-gray-200">
                                                Log out
                                            </button>
                                        </form>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-200">
                                            Log in
                                        </a>
                                    </li>

                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}" class="block px-4 py-2 hover:bg-gray-200">
                                                Register
                                            </a>
                                        </li>

                                        
                                    @endif
                                @endauth
                            @endif      



                    </ul>
                </div>
            </div>
        </nav-list>
    </nav>
    <div class="img-box">
        <div class="img-list">
        <div class="img-slider">
            <div class="img-item putahi active" style="--i:0;">
                <img src="/images/potatobg.png" alt="burgerbg.png">
            </div>
            <div class="img-item putahi " style="--i:1;">
                <img  src="/images/potatobg.png" alt="pizza">
            </div>
            <div class="img-item putahi" style="--i:2;">
                <img  src="/images/potatobg.png" alt="friedchicken.png">
            </div>
            <div class="img-item putahi" style="--i:3;">
                <img   src="/images/potatobg.png" alt="lasagna.png">
            </div> 

            <div class="img-item" style="--i:0;">
                <img class="w-[500px]" src="/images/burger.png" alt="burger.png">
            </div>
            <div class="img-item" style="--i:1;">
                <img class="w-[500px]" src="/images/tomato2.png" alt="tomato2">
            </div>
            <div class="img-item" style="--i:2;">
                <img class="w-[500px]" src="/images/chickenwings.png" alt="chickenwings">
            </div>
            <div class="img-item" style="--i:3;">
                <img class="w-[500px]" src="/images/friedchicken.png" alt="burger.png">
            </div>
        </div>
        </div>
    </div>

    <div class="info-box">
        <div class="info-slider">
            <div class="info-item">
                <h2 class="text-[#C7253E]">burger</h2>
                <p>"Experience bliss with our ultimate burger! Juicy beef patty, fresh veggies, melted cheese, in a sesame seed bun!.</p>
            </div>
            <div class="info-item">
                <h2 class="text-[#C7253E]">pizza</h2>
                <p>Enjoy our delicious pizza! Crispy crust, tangy sauce, gooey cheese, and your favorite toppings. Perfect for a pizza party</p>
            </div>
            <div class="info-item">
                <h2 class="text-[#C7253E]">chickenwings</h2>
                <p>Get ready for a flavor explosion with our crispy, saucy chicken wings! Perfectly seasoned and cooked to perfection. Dive into wing heaven today</p>
            </div>
            <div class="info-item">
                <h2 class="text-[#C7253E]">friedchicken</h2>
                <p>Crispy, golden perfection! Our fried chicken is packed with flavor and crunch. Indulge in the ultimate comfort food today!</p>
            </div>
        </div>
    </div>


        <div class="navigation">
            <span class="prev-btn"><i class='bx bx-chevron-left'></i></span>
            <span class="next-btn"><i class='bx bx-chevron-right' ></i></span>
        </div>
    </div>
</section>


<!-- section 3 -->
<section class="h-screen  snap-start flex ">
    <div class="show-products-list m-auto">
        <div class="disply-list">
            <div class="show-food lg:mx-40 ">
                <div class="product-list grid grid-cols-2 sm:grid sm:grid-cols-3 lg:grid lg:grid-cols-4 grid-flow-row ">
                    <div class="bg-[#F09319]  flex items-center justify-center m-2 cursor-pointer border-2 border-black rounded-lg hover:scale-105 hover:border-[#FFD700] transition-transform duration-300" onclick="openPopup()">
                    <img class="w-full h-full object-contain" src="/images/burger.png" alt="burger">
            </div> 

<!-- Pop-up overlay -->
                    <div id="popupOverlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
                        <div class="bg-[#FED801] w-[70%] h-[70%] p-4 rounded-lg flex items-center justify-center relative">
                            <img class="w-full h-full object-contain" src="/images/burger.png" alt="burger">
                            <div class="description">  
                                <h1 class="text-6xl text-[#C7253E]">burger</h1>
                                <p>Bite into bliss with our ultimate burger! Juicy beef patty, fresh veggies, and melted cheese, all embraced by a sesame seed bun. Order now for a taste of deliciousness!</p>
                                <!-- button inside description -->
                                <a href="{{ route('cart') }}">
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
                                </a>
                            </div>
                            <button onclick="closePopup()" class="absolute top-2 right-2 text-black text-lg font-bold">X</button>
                        </div>
                    </div>


                    <div class="bg-[#F09319] flex items-center justify-center m-2 cursor-pointer border-2 border-black rounded-lg hover:scale-105 hover:border-[#FFD700] transition-transform duration-300" onclick="openTomatoPopup()">
                        <img class="w-full h-full object-contain" src="/images/tomato2.png" alt="pizza tomato">
                    </div>

<!-- Tomato pop-up overlay -->
                    <div id="tomatoPopupOverlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
                        <div class="bg-[#FED801] w-[70%] h-[70%] p-4 rounded-lg flex items-center justify-center relative ">
                            <img class="w-full h-full object-contain" src="/images/tomato2.png" alt="pizza tomato">
                            <div class="description">  
                                <h1 class="text-6xl text-[#C7253E]">Pizza</h1>
                                <p>Slice into happiness with our mouth-watering pizza! Crispy crust, tangy sauce, and a generous layer of gooey cheese topped with your favorite ingredients. Treat yourself to a pizza party today</p>
                                <a href="{{ route('cart') }}">
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
                                </a>
                            </div>
                            <button onclick="closeTomatoPopup()" class="absolute top-2 right-2 text-black text-lg font-bold">X</button>
                        </div>
                    </div>

                    <div class="bg-[#F09319] flex items-center justify-center m-2 cursor-pointer border-2 border-black rounded-lg hover:scale-105 hover:border-[#FFD700] transition-transform duration-300" onclick="openFriedChickenPopup()">
                        <img class="w-full h-full object-contain" src="/images/friedchicken.png" alt="friedchicken">
                    </div>

<!-- Fried chicken pop-up overlay -->
                    <div id="friedChickenPopupOverlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
                        <div class="bg-[#FED801] w-[70%] h-[70%] p-4 rounded-lg flex items-center justify-center relative">
                            <img class="w-full h-full object-contain" src="/images/friedchicken.png" alt="friedchicken">
                            <div class="description">  
                                <h1 class="text-6xl text-[#C7253E]">fried chicken</h1>
                                <p>Crispy, golden perfection! Our fried chicken is packed with flavor and crunch. Indulge in the ultimate comfort food today!</p>
                                <a href="{{ route('cart') }}">
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
                                </a>
                            </div>
                            <button onclick="closeFriedChickenPopup()" class="absolute top-2 right-2 text-black text-lg font-bold">X</button>
                        </div>
                    </div>

                    <div class="bg-[#F09319] flex items-center justify-center m-2 cursor-pointer border-2 border-black rounded-lg hover:scale-105 hover:border-[#FFD700] transition-transform duration-300" onclick="openLasagnaPopup()">
                        <img class="w-full h-full object-contain" src="/images/lasagna.png" alt="lasagna">
                    </div>

<!-- Lasagna pop-up overlay -->
                    <div id="lasagnaPopupOverlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
                        <div class="bg-[#FED801] w-[70%] h-[70%] p-4 rounded-lg flex items-center justify-center relative">
                            <img class="w-full h-full object-contain" src="/images/lasagna.png" alt="lasagna">
                            <div class="description">  
                                <h1 class="text-6xl text-[#C7253E]">lasagna</h1>
                                <p>Layers of love in every bite! Dive into our cheesy, saucy, and perfectly baked lasagna. It's comfort food at its finest</p>
                                <a href="{{ route('cart') }}">
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
                                </a>
                            </div>
                            <button onclick="closeLasagnaPopup()" class="absolute top-2 right-2 text-black text-lg font-bold">X</button>
                        </div>
                    </div>

                    <div class="bg-[#F09319] flex items-center justify-center m-2 cursor-pointer border-2 border-black rounded-lg hover:scale-105 hover:border-[#FFD700] transition-transform duration-300" onclick="openChickenWingsPopup()">
                        <img class="w-full h-full object-contain" src="/images/chickenwings.png" alt="chickenwings">
                    </div>

<!-- Chicken wings pop-up overlay -->
                    <div id="chickenWingsPopupOverlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
                        <div class="bg-[#FED801] w-[70%] h-[70%] p-4 rounded-lg flex items-center justify-center relative">
                            <img class="w-full h-full object-contain" src="/images/chickenwings.png" alt="chickenwings">
                            <div class="description">  
                                <h1 class="text-6xl text-[#C7253E]">chicken wings</h1>
                                <p>Get ready for a flavor explosion with our crispy, saucy chicken wings! Perfectly seasoned and cooked to perfection. Dive into wing heaven today</p>
                                <a href="{{ route('cart') }}">
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
                                </a>
                            </div>
                            <button onclick="closeChickenWingsPopup()" class="absolute top-2 right-2 text-black text-lg font-bold">X</button>
                        </div>
                    </div>

                    <div class="bg-[#F09319] flex items-center justify-center m-2 cursor-pointer border-2 border-black rounded-lg hover:scale-105 hover:border-[#FFD700] transition-transform duration-300" onclick="openSpagPopup()">
                        <img class="w-full h-full object-contain" src="/images/spag.png" alt="spag">
                    </div>

<!-- Spaghetti pop-up overlay -->
                    <div id="spagPopupOverlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
                        <div class="bg-[#FED801]  w-[70%] h-[70%] p-4 rounded-lg flex items-center justify-center relative">
                            <img class="w-full h-full object-contain" src="/images/spag.png" alt="spag">
                            <div class="description">  
                                <h1 class="text-6xl text-[#C7253E]">Spaghetti</h1>
                                <p>Twirl into taste with our delicious spaghetti! Perfectly cooked pasta topped with rich, savory sauce and a sprinkle of parmesan. Dive into a plate of pure comfort</p>
                                <a href="{{ route('cart') }}">
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
                                </a>
                            </div>
                            <button onclick="closeSpagPopup()" class="absolute top-2 right-2 text-black text-lg font-bold">X</button>
                        </div>
                    </div>

                    <div class="bg-[#F09319] flex items-center justify-center m-2 cursor-pointer border-2 border-black rounded-lg hover:scale-105 hover:border-[#FFD700] transition-transform duration-300" onclick="openHaloHaloPopup()">
                        <img class="w-full h-full object-contain" src="/images/halohalo.png" alt="halohalo">
                    </div>

<!-- Halo-halo pop-up overlay -->
                    <div id="haloHaloPopupOverlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
                        <div class="bg-[#FED801] w-[70%] h-[70%] p-4 rounded-lg flex items-center justify-center relative">
                            <img class="w-full h-full object-contain" src="/images/halohalo.png" alt="halohalo">
                            <div class="description">  
                                <h1 class="text-6xl text-[#C7253E]">halo-halo</h1>
                                <p>Cool down with our colorful and refreshing halo-halo! A delightful mix of sweetened fruits, jellies, beans, shaved ice, and creamy leche flan. It's a fiesta in every spoonful!</p>
                                <a href="{{ route('cart') }}">
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
                                </a>
                            </div>
                            <button onclick="closeHaloHaloPopup()" class="absolute top-2 right-2 text-black text-lg font-bold">X</button>
                        </div>
                    </div>

                    <div class="bg-[#F09319] flex items-center justify-center m-2 cursor-pointer border-2 border-black rounded-lg hover:scale-105 hover:border-[#FFD700] transition-transform duration-300" onclick="openPizzaPopup()">
                        <img class="w-full h-full object-contain" src="/images/pizza 2.png" alt="pizza">
                    </div>

<!-- Pizza pop-up overlay -->
                    <div id="pizzaPopupOverlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
                        <div class="bg-[#FED801] w-[70%] h-[70%] p-4 rounded-lg flex items-center justify-center relative">
                            <img class="w-full h-full object-contain" src="/images/pizza 2.png" alt="pizza">
                            <div class="description">  
                                <h1 class="text-6xl text-[#C7253E]">pizza tomato</h1>
                                <p>Savor the simplicity of our tomato pizza! Fresh, juicy tomatoes, fragrant basil, and a crispy crust, all topped with melted mozzarella. Pure, delicious perfection</p>
                                <a href="{{ route('cart') }}">
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
                                </a>
                            </div>
                            <button onclick="closePizzaPopup()" class="absolute top-2 right-2 text-black text-lg font-bold">X</button>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<section class="bg-[#FED801] snap-start px-4 py-8 antialiased md:py-16 h-screen flex items-center justify-between">
    <!-- Left Column for iFrame with increased width -->
    <div class="flex justify-center items-center flex-1">
        <iframe class="w-full max-w-[100%] h-[70vh] " src="https://my.spline.design/hammyveggieburgercopy-481cc0eba24437f3a299dccede2e0415/" frameborder="0"></iframe>
    </div>

    <!-- Right Column for Text and Button -->
    <div class="max-w-lg p-8 flex-1">
        <h1 class="mb-3 text-2xl font-bold text-[#C7253E] md:text-4xl">
            special offer<br />
            <span>50%</span> off!
        </h1>
        <p class="mb-6">
        Enjoy a delicious burger at half the price! Get 50% off all burgers now. Don’t miss out on this tasty deal!
        </p>
        <a>
            <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                pre-order now
            </button>
        </a>
    </div>
</section>


<section class="bg-[#FED801] snap-start overflow-hidden h-screen flex items-start justify-center">
    <div class="first-show-why-us w-full px-4 py-8 mx-auto max-w-screen-xl">
        <h2 class="text-center text-6xl">Why Us?</h2>
        <div class="gap-16 items-center mt-8 lg:mt-16 lg:grid lg:grid-cols-2 group">
            
            <!-- Text Section with Slide Left Animation for Large Screens -->
            <div class="font-light sm:text-lg lg:transform lg:-translate-x-full lg:opacity-0 lg:transition-transform lg:duration-500 lg:ease-in-out lg:group-hover:translate-x-0 lg:group-hover:opacity-100">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-[#C7253E]">10 Years of Experience</h2>
                <p class="mb-4">Why choose us? With a decade of experience under our belt, we’ve perfected the art of delivering top-notch quality and service. Our expertise ensures that every customer receives the best, every time. Trust in our journey of excellence and dedication. Your satisfaction is our utmost priority.</p>
                <p>Experience the best with us! Our 10 years in the industry have taught us how to meet and exceed customer expectations. From start to finish, our experienced team is here to provide unmatched service and quality. Join the countless satisfied customers who have made us their trusted choice for a decade.</p>
            </div>
            
            <!-- Image Section with Slide Right Animation for Large Screens -->
            <div class="grid grid-cols-2 gap-4 mt-8 lg:transform lg:translate-x-full lg:opacity-0 lg:transition-transform lg:duration-500 lg:ease-in-out lg:group-hover:translate-x-0 lg:group-hover:opacity-100">
                <img class="w-full rounded-lg" src="/images/10 years exp.jpg" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="/images/10 years of exp 2.png" alt="office content 2">
            </div>
                
        </div>
    </div>
</section>



<section class="bg-[#FED801] snap-start overflow-hidden h-screen flex">
    <div class="gap-16 items-center justify-center m-auto py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 group">
        
        <!-- Image Section with Slide Right Animation for Large Screens -->
        <div class="grid grid-cols-2 gap-4 mt-8 lg:transform lg:-translate-x-full lg:opacity-0 lg:transition-transform lg:duration-500 lg:ease-in-out lg:group-hover:translate-x-0 lg:group-hover:opacity-100">
            <img class="w-full rounded-lg" src="/images/chefs1.jpg" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="/images/chefs2.jpg" alt="office content 2">
        </div>

        <!-- Text Section with Slide Left Animation for Large Screens -->
        <div class="font-light sm:text-lg lg:transform lg:translate-x-full lg:opacity-0 lg:transition-transform lg:duration-500 lg:ease-in-out lg:group-hover:translate-x-0 lg:group-hover:opacity-100">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-[#C7253E]">200+ Professional Chefs</h2>
            <p class="mb-4">Why choose us? With over 200 professional chefs on our team, we bring a wealth of culinary expertise and passion to every dish. Our chefs' diverse skills and experiences ensure that each meal is crafted to perfection, delivering an exceptional dining experience every time. Trust in our culinary excellence</p>
            <p>Experience the best with us! Our team of 200+ professional chefs is dedicated to creating unforgettable culinary delights. From innovative recipes to classic favorites, our chefs' dedication and skill are unmatched. Join the countless satisfied customers who have savored the creations of our talented chefs. Your satisfaction is our priority</p>
        </div>
        
    </div>
</section>

<section class="bg-[#FED801] snap-start overflow-hidden h-screen flex">
    <div class="gap-16 items-center justify-center m-auto  py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 group">
        
        <!-- Text Section with Slide Left Animation for Large Screens -->
        <div class="font-light sm:text-lg lg:transform lg:-translate-x-full lg:opacity-0 lg:transition-transform lg:duration-500 lg:ease-in-out lg:group-hover:translate-x-0 lg:group-hover:opacity-100">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-[#C7253E]">5000+ Happy Customers</h2>
            <p class="mb-4">Why choose us? Join our community of over 5000 happy customers who have experienced our commitment to quality and service. Each satisfied customer is a testament to our dedication and hard work. Trust in our proven track record of delivering excellence and making every customer a priority</p>
            <button onclick="fetchJoke()" class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
            Get Joke
        </button>

        <!-- Display the fetched joke here -->
        <p id="jokeDisplay" class="mt-4 text-lg text-center text-gray-700">Click the button to get a joke!</p>
        </div>
        
        <!-- Image Section with Slide Right Animation for Large Screens -->
        <div class="grid grid-cols-2 gap-4 mt-8 lg:transform lg:translate-x-full lg:opacity-0 lg:transition-transform lg:duration-500 lg:ease-in-out lg:group-hover:translate-x-0 lg:group-hover:opacity-100">
            <img class="w-full rounded-lg" src="/images/50001.jpg" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="/images/50002.jpg" alt="office content 2">
        </div>
        
    </div>
</section>


<section class="bg-[#FED801] snap-start overflow-hidden h-screen flex">
    <div class="gap-16 items-center justify-center m-auto  py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 group">
        
        <!-- Image Section with Slide Right Animation for Large Screens -->
        <div class="grid grid-cols-2 gap-4 mt-8 lg:transform lg:-translate-x-full lg:opacity-0 lg:transition-transform lg:duration-500 lg:ease-in-out lg:group-hover:translate-x-0 lg:group-hover:opacity-100">
            <img class="w-full rounded-lg" src="/images/tropy1.png" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="/images/tropy3.jpg" alt="office content 2">
        </div>

        <!-- Text Section with Slide Left Animation for Large Screens -->
        <div class="font-light sm:text-lg lg:transform lg:translate-x-full lg:opacity-0 lg:transition-transform lg:duration-500 lg:ease-in-out lg:group-hover:translate-x-0 lg:group-hover:opacity-100">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-[#C7253E]">20+ Awards Won</h2>
            <p class="mb-4">Why choose us? With over 20 prestigious awards, our dedication to excellence is recognized and celebrated. Each award reflects our commitment to providing outstanding quality and service. Trust in our award-winning team to deliver the best in every aspect, ensuring an exceptional experience every time.</p>
            <p>Experience the best with us! Our 20+ awards are a testament to our relentless pursuit of perfection. From innovative solutions to customer satisfaction, our accolades highlight our achievements. Join the countless clients who have experienced our award-winning service and quality. Your satisfaction is our crowning achievement</p>
        </div>
        
    </div>
</section>


<section class="snap-start overflow-hidden h-screen">
<div class="mt-6 h-screen ">
    <div class="max-w-4xl mx-auto relative">
        <div class="text-center">
            <h2 class="text-gray-800 text-3xl font-extrabold">customers reviews</h2>
            <p class="text-sm text-gray-800 mt-6 leading-relaxed">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem corrupti ipsa quo debitis asperiores deleniti obcaecati adipisci fugiat dolore nisi.
            </p>
        </div>

        <div class="max-w-xl mt-16 mx-auto">
            <div class="carousel relative overflow-hidden">
                <!-- Testimonial 1 -->
                <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100">
                    <div class="flex flex-col items-center text-center">
                        <img src="https://readymadeui.com/team-1.webp" class="w-28 h-28 rounded-full shadow-[0_2px_22px_-4px_rgba(93,96,127,0.6)] border-2 border-white" />
                        <div class="mt-4">
                            <h4 class="text-gray-800 text-base font-extrabold">John Doe</h4>
                            <p class="text-xs text-gray-500 mt-1">CEO, Company</p>
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quia eius magnam nemo officiis eveniet officia at, rem sapiente ab!  
                            </p>
                        </div>
                        <div class="flex justify-center space-x-1.5 mt-4">
                            <svg class="w-[18px] fill-[#C7253E]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#C7253E]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#C7253E]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <div class="flex flex-col items-center text-center">
                        <img src="https://readymadeui.com/team-2.webp" class="w-28 h-28 rounded-full shadow-[0_2px_22px_-4px_rgba(93,96,127,0.6)] border-2 border-white" />
                        <div class="mt-4">
                            <h4 class="text-gray-800 text-base font-extrabold">Jane Smith</h4>
                            <p class="text-xs text-gray-500 mt-1">Manager, Business</p>
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-sm leading-relaxed">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione, distinctio?
                            </p>
                        </div>
                        <div class="flex justify-center space-x-1.5 mt-4">
                            <svg class="w-[18px] fill-[#C7253E]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#C7253E]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#C7253E]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <div class="flex flex-col items-center text-center">
                        <img src="https://readymadeui.com/team-3.webp" class="w-28 h-28 rounded-full shadow-[0_2px_22px_-4px_rgba(93,96,127,0.6)] border-2 border-white" />
                        <div class="mt-4">
                            <h4 class="text-gray-800 text-base font-extrabold">Alice Johnson</h4>
                            <p class="text-xs text-gray-500 mt-1">Founder, Startup</p>
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, voluptates.
                            </p>
                        </div>
                        <div class="flex justify-center space-x-1.5 mt-4">
                            <svg class="w-[18px] fill-[#C7253E]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#C7253E]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#C7253E]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-[18px] fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Navigation Controls -->
                <div class="bg-gray-300 w-10 h-10 grid items-center justify-center rounded-full rotate-90 shrink-0 cursor-pointer absolute left-0 top-0 bottom-0 my-auto" onclick="prevSlide()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-800 inline" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="bg-gray-800 w-10 h-10 grid items-center justify-center rounded-full -rotate-90 shrink-0 cursor-pointer absolute right-0 top-0 bottom-0 my-auto" onclick="nextSlide()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-[#fff] inline" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</main>



<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl">
        <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="#" class=" hover:underline">About</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Careers</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Brand Center</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Blog</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="#" class="hover:underline">Discord Server</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Twitter</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Facebook</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Contact Us</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="#" class="hover:underline">Privacy Policy</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Licensing</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="#" class="hover:underline">iOS</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Android</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Windows</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">MacOS</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2024 <a href="https://flowbite.com/">FeastDowntown™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                <span class="sr-only">Discord community</span>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">GitHub account</span>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">Feast account</span>
            </a>
        </div>
    </div>
    </div>
</footer>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>