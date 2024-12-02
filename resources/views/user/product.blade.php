
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
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
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
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
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
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
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
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
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
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
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
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
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
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
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
                                <button class="mt-4 px-4 py-2 bg-[#C7253E] text-white rounded-lg hover:bg-[#A01C2D] transition duration-200">
                                    order now
                                </button>
                            </div>
                            <button onclick="closePizzaPopup()" class="absolute top-2 right-2 text-black text-lg font-bold">X</button>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</section>