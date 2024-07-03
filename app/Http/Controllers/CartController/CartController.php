<?php

namespace App\Http\Controllers\CartController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cart(){
        return view('Rabeya.cart');
    }
}
