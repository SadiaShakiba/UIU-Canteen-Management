<?php

namespace App\Http\Controllers\OlympiaController;


use App\Models\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OlympiaController extends Controller
{
    //

    public function olympia(){
        $products = product::all();
        return view('Rabeya.olympia',['products' => $products]);
    }

    public function olympiabrk(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.olympiabrk',['products' => $products]);
    }

    public function olympialunch(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.olympialunch',['products' => $products]);
    }

    public function olympiadrinks(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.olympiadrinks',['products' => $products]);
    }

    public function olympiasnacks(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.olympiasnacks',['products' => $products]);
    }



    public function olympia1(){
        $products = product::all();
        return view('Rabeya.olympia1',['products' => $products]);
    }


    public function olympiabrk1(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.olympiabrk1',['products' => $products]);
    }

    public function olympialunch1(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.olympialunch1',['products' => $products]);
    }

    public function olympiadrinks1(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.olympiadrinks1',['products' => $products]);
    }

    public function olympiasnacks1(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.olympiasnacks1',['products' => $products]);
    }


    public function addToCart($id)
    {
        $products = DB::table('products')->where('product_id',$id)->first();

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "product_name" => $products->product_name,
                "category" => $products->category,
                "product_price" => $products->product_price,
                "product_image" => $products->product_image,
                "quantity" => 1

            ];
        }



        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    public function cart()
    {
        return view('Rabeya.cart');
    }

    public function remove(Request $request)
    {
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product Successfully removed! ');
        }
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated! ');
        }
    }



    public function addToWishlist($id)
    {
        $products = DB::table('products')->where('product_id',$id)->first();

        $wishlist = session()->get('wishlist', []);

        if(isset($wishlist[$id])) {
            $wishlist[$id]['quantity']++;
        } else {
            $wishlist[$id] = [
                "product_name" => $products->product_name,
                "product_price" => $products->product_price,
                "product_image" => $products->product_image,
                "status" => $products->status,
                "quantity" => 1

            ];
        }



        session()->put('wishlist', $wishlist);
        return redirect()->back()->with('success', 'Product added to wishlist successfully!');

    }

}
