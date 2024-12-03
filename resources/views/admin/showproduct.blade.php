<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    @include('admin.css')
</head>
<body class="bg-[#2A3335] text-white">

    <!-- partial -->
    @include('admin.sidebar')
    @include('admin.navbar')
    <!-- partial -->    

    <div class="container-fluid page-body-wrapper">
        <div class="container mx-auto max-w-6xl py-10">
        @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session()->get('message') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
            <table class="min-w-full bg-[#2A3335] border border-gray-200 rounded-lg">
                <thead>
                    <tr class="bg-[#2A3335]">
                        <th class="py-3 px-4 text-left text-sm font-semibold text-white">Title</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-white">Description</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-white">Quantity</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-white">Price</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-white">Image</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-white">Update</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-white">Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $product)
                        <tr class="border-t hover:bg-gray-700">
                            <td class="py-3 px-4 text-sm text-white">{{$product->title}}</td>
                            <td class="py-3 px-4 text-sm text-white">{{$product->description}}</td>
                            <td class="py-3 px-4 text-sm text-white">{{$product->quantity}}</td>
                            <td class="py-3 px-4 text-sm text-white">${{$product->price}}</td>
                            <td class="py-3 px-4 text-sm text-white">
                                <img src="/productimage/{{$product->image}}" alt="Product Image" class="w-24 h-24 object-contain rounded-lg">
                            </td>
                            <td class="py-3 px-4 text-sm text-blue-400 hover:text-blue-600">
                                <a href="{{url('updateview',$product->id)}}">Update</a>
                            </td>
                            <td class="py-3 px-4 text-sm text-red-400 hover:text-red-600">
                                <a href="{{url('deleteproduct',$product->id)}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- partial -->
    @include('admin.script')
</body>
</html>
