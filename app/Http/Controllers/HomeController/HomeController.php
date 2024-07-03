<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\offer;
use App\Models\notice;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    //
    public function home(){
        $offer = DB::select('SELECT * FROM offers');
        $notice = DB::select('SELECT * FROM notices');
        return view('Rabeya.home',compact('offer','notice'));
    }

    public function offers(){
        $offer = offer::all();
        return view('Rabeya.home',['offer' => $offer]);
    }



    public function notices(){

        $notice = notice::all();
        return view('Rabeya.home',['notice' => $notice]);

    }
}

