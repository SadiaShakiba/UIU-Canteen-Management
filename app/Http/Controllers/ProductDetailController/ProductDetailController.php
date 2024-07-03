<?php

namespace App\Http\Controllers\ProductDetailController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;


class ProductDetailController extends Controller
{
    //

    public function product_detail(){
        return view('Rabeya.product_detail');
    }


    public function product_details(Request $req,$product_id){
        $products = DB::table('products')->where('product_id', '=', $product_id)->get();
        return view('Rabeya.product_detail')->with('products', $products);

    }


}
