<?php

namespace App\Http\Controllers\CheckoutController;

use App\Models\order;
use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    //
    public function checkout(){
        $products = product::all();
        return view('Rabeya.checkout',['products' => $products]);
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

    public function insert_order(Request $req){
        $customer_name =  $req->input('customer_name');
        $sid = $req->input('sid');
        $details =  $req->input('details');
        $number = $req->input('number');
        $product_name = $req->get('product_name');
        $quantity =  $req->get('quantity');
        $price =  $req->get('price');

 
        $query = DB::table('orders')->insert([
            'customer_name'=> $customer_name,
            'sid'=> $sid,
            'details'=> $details,
            'number'=> $number,
            'product_name'=> $product_name,
            'quantity'=> $quantity,
            'price' => $price,
            ]);
        if($query){
            return back()->with('success','Order placed Successfully');
            return view('Rabeya.checkout');
    
        }
        else{
            return view('Rabeya.checkout');
        }
 
 
     }
}
