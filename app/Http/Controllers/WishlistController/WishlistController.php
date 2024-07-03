<?php

namespace App\Http\Controllers\WishlistController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WishlistController extends Controller
{
    //
    public function wishlist(){


        $details = DB::select('SELECT * FROM products');
        return view('Rabeya.wishlist',compact('details'));
 }


}
