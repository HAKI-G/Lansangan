<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function product() {
        return view('admin.product');
    }

    public function uploadproduct(Request $request) {
        $data = new Product;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('productimage', $imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->save();
        return redirect()->back()->with('message', 'Product uploaded successfully!');
    }

    public function showproduct() {
        $data = Product::all();
        return view('admin.showproduct', compact('data'));
    }

    public function deleteproduct($id) {
        $data = Product::find($id);

        // Check if the product exists before deleting
        if ($data) {
            $data->delete();
            return redirect()->back()->with('message', 'Product deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Product not found.');
        }
    }

    public function updateview($id) {
        $data = Product::find($id);
        
        // Check if the product exists
        if ($data) {
            return view('admin.updateview', compact('data'));
        } else {
            return redirect()->back()->with('error', 'Product not found.');
        }
    }

    public function updateproduct(Request $request, $id) {
        $data = Product::find($id);

        if ($data) {
            $image = $request->file;

            if ($image) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->file->move('productimage', $imagename);
                $data->image = $imagename;
            }

            $data->title = $request->title;
            $data->price = $request->price;
            $data->description = $request->description;
            $data->quantity = $request->quantity;
            $data->save();

            return redirect()->back()->with('message', 'Product updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Product not found.');
        }
    }
}
