<?php

namespace App\Http\Controllers\KhansController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhansController extends Controller
{
    //
    public function khans(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.khans',['products' => $products]);
    }

    public function khansbrk(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.khansbrk',['products' => $products]);
    }

    public function khanslunch(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.khanslunch',['products' => $products]);
    }

    public function khansdrinks(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.khansdrinks',['products' => $products]);
    }

    public function khanssnacks(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.khanssnacks',['products' => $products]);
    }

    public function khans1(){
 $products = DB::select('SELECT * FROM products');
        return view('Rabeya.khans1',['products' => $products]);
    }



    public function khansbrk1(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.khansbrk1',['products' => $products]);
    }

    public function khanslunch1(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.khanslunch1',['products' => $products]);
    }

    public function khansdrinks1(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.khansdrinks1',['products' => $products]);
    }

    public function khanssnacks1(){
        $products = DB::select('SELECT * FROM products');
        return view('Rabeya.khanssnacks1',['products' => $products]);
    }



    public function add_To_Cart($id)
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
                "status" =>  1, //$products->status
                "quantity" => 1

            ];
        }



        session()->put('wishlist', $wishlist);
        return redirect()->back()->with('success', 'Product added to wishlist successfully!');

    }






    }

