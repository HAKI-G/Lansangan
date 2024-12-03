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

<body class="bg-[#FED801]">

<main>
<section>

    <div>
        <nav class="flex justify-between items-center p-4 mx-20">
            <img class="w-32" src="/images/logo.png" alt="Feast Downtown" />
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
                            <!-- Account Management -->
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 hover:bg-gray-200">
                                        Log out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav-list>
        </nav>
    </div>
</section>

<section class="py-8 antialiased md:py-12">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
            @foreach($data as $product) 
            <div class="rounded-lg border p-6 bg-[#F09319]">
                <div class="h-56 w-full">
                    <a href="#">
                        <img src="/productimage/{{ $product->image }}" alt="{{ $product->title }}" />
                    </a>
                </div>
                <div class="pt-6">
                    <a href="#" class="text-lg font-semibold leading-tight text-black hover:underline">{{ $product->title }}</a>
                    <p class="mt-2 text-sm text-gray-700">{{ $product->description }}</p> 
                    <div class="mt-2 flex items-center gap-2">
                        <span class="ml-1 text-xs font-medium text-black">({{ $product->title }})</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-lg font-semibold text-gray-900 dark:text-white">${{ $product->price }}</span>

                        <form action="{{ url('cart', $product->id) }}" method="POST">
                            @csrf
                            <input type="number" value="1" min="1" class="form-control" name="quantity">
                            <br>
                            <input 
                                type="submit" 
                                value="Add to Cart" 
                                class="w-full py-2 px-4 bg-[#C7253E] text-white text-sm font-medium rounded-md hover:bg-[#A41E34] focus:outline-none focus:ring-2 focus:ring-[#A41E34] focus:ring-offset-2 cursor-pointer"
                            />
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-8">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Show message after adding/removing products -->
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="min-w-full table-auto border-collapse border border-gray-200">
            <thead>
                <tr class="bg-[#F09319]">
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">Product Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">Quantity</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">Price</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart', []) as $id => $product)
                    <tr class="border-b">
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $product['title'] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $product['quantity'] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">${{ $product['price'] }}</td>
                        <td class="px-6 py-4">
                            <form action="{{ route('removeFromCart', $id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-semibold">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if(count(session('cart', [])) === 0)
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-sm text-center text-gray-900">Your cart is empty.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</section>



</main>

<script>
    function toggleDropdown() {
        document.getElementById("dropdown-menu").classList.toggle("hidden");
    }
</script>
</body>
</html>
