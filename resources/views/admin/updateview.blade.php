    <!DOCTYPE html>
        <html lang="en">
        <head>
        <script src="https://cdn.tailwindcss.com"></script>

            <base href="/public">
            @include('admin.css')
        </head>
        <body>
            
            <!-- partial -->
            @include('admin.sidebar')

            @include('admin.navbar')
            <!-- partial -->
            
    <!-- Main Content -->
    <div class="container-fluid page-body-wrapper">
        <div class="container mx-auto max-w-3xl py-10">
        <h1 class="text-white text-3xl font-bold text-center mb-6">Add Product</h1>
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form class="p-6 space-y-6" action="{{url('updateproduct', $data->id)}}" method="post" enctype="multipart/form-data">
        <!-- Product Title -->
            @csrf
            <div class="flex items-center space-x-4">
            <label class="w-1/4 text-white text-sm font-semibold text-right">Product</label>
            <input 
                type="text" 
                name="title" 
                value="{{$data->title}}"
                class="w-3/4 p-3 text-black bg-gray-100 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            </div>

            <!-- Price -->
            <div class="flex items-center space-x-4">
            <label class="w-1/4 text-white text-sm font-semibold text-right">Price</label>
            <input 
                type="number" 
                name="price" 
                value="{{$data->price}}"
                class="w-3/4 p-3 text-black bg-gray-100 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            </div>

            <!-- Description -->
            <div class="flex items-center space-x-4">
            <label class="w-1/4 text-white text-sm font-semibold text-right">Description</label>
            <input 
                type="text" 
                name="description" 
                value="{{$data->description}}"
                class="w-3/4 p-3 text-black bg-gray-100 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            </div>

            <!-- Quantity -->
            <div class="flex items-center space-x-4">
            <label class="w-1/4 text-white text-sm font-semibold text-right">Quantity</label>
            <input 
                type="text" 
                name="quantity" 
                value="{{$data->quantity}}"
                class="w-3/4 p-3 text-black bg-gray-100 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            </div>

            <div class="flex items-center space-x-4">
            <label class="w-1/4 text-white text-sm font-semibold text-right">Old Image</label>
            <img src="/productimage/{{$data->image}}" alt="">
            </div>

            <!-- File Upload -->
            <div class="flex items-center space-x-4">
            <label class="w-1/4 text-white text-sm font-semibold text-right">Change the Image</label>
            <input 
                type="file" 
                name="file" 
                class="w-3/4 text-white bg-gray-700 rounded border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            </div>

            

            <!-- Submit Button -->
            <div class="text-center">
            <input class = "btn  btn-success" 
                type="submit" 
                name="submit" 
                value="Submit" 
            >
            </div>
        </form>
        </div>
    </div>
            <!-- partial -->
            @include('admin.script')
        </body>
        </html>