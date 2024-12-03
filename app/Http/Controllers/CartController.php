<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    // Show the cart for the user or admin
    public function index() {
        $data = Product::all();

        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == '0') {
                return view('user.cart', compact('data'));  // User cart view
            } else {
                return view('admin.cart', compact('data')); // Admin cart view
            }
        } else {
            $data = Product::paginate(4);
            return view('user.cart', compact('data')); // Cart view for unauthenticated users
        }
    }

    // Cart adding functionality (with session-based cart)
    public function addToCart(Request $request, $id)
    {
        // If the user is logged in, handle cart in the session
        $product = Product::find($id);

        // Get the cart from the session or initialize it as an empty array
        $cart = session()->get('cart', []);

        // If the product is already in the cart, increase the quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $request->quantity;
        } else {
            // Otherwise, add the product to the cart
            $cart[$id] = [
                'title' => $product->title,
                'quantity' => $request->quantity,
                'price' => $product->price,
                'image' => $product->image,
            ];
        }

        // Save the cart to the session
        session()->put('cart', $cart);

        // Redirect back to the cart page with a success message
        return redirect()->route('cart')->with('message', 'Product added to cart successfully!');
    }

    // Add to the cart using database (if the user is logged in)
    public function cart(Request $request, $id) {
        if (Auth::check()) {
            $user = auth()->user();
            $product = Product::find($id);

            // Check if product exists
            if ($product) {
                $cart = new Cart;
                $cart->name = $user->name;
                $cart->phone = $user->phone;
                $cart->address = $user->address;
                $cart->product_title = $product->title;
                $cart->price = $product->price;
                $cart->quantity = $request->quantity;

                $cart->save();

                // Add success message to session
                return redirect()->back()->with('message', 'Product added to cart successfully!');
            } else {
                return redirect()->back()->with('error', 'Product not found.');
            }
        } else {
            return redirect('login');
        }
    }

    // Remove product from the cart (session-based)
    public function removeFromCart($id)
    {
        // Get the cart from the session
        $cart = session()->get('cart', []);

        // Remove the product from the cart
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        // Save the updated cart to the session
        session()->put('cart', $cart);

        // Redirect back to the cart page with a success message
        return redirect()->route('cart')->with('message', 'Product removed from cart successfully!');
    }
}
