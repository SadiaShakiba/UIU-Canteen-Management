<?php

namespace App\Http\Controllers\ContactController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Defuse\Crypto\Crypto;
use Defuse\Crypto\key;



class ContactController extends Controller
{
    //
    public function contact(){
        return view('Rabeya.contact');
    }





    public function  post_opinion(Request $request){

        // $key = Key::createNewRandomKey();
        $student_name  = $request->input('student_name');
        $student_id  = $request->input('student_id');
        $subject = $request->input('subject');
        $message  = $request->input('message');

        // $encrypted = Crypto::encrypt($message, $key);

        // // Decrypt the message
        // $decrypted = Crypto::decrypt($encrypted, $key);




        $query = DB::table('contacts')->insert([
            'student_name'=> $student_name,
            'student_id'=> $student_id,
            'subject' =>$subject,
            'message' =>$message
         ]);
        if($query) {

              return back()->with('success', 'Notice posted');
               return view('Rabeya.contact');

         }
    }
}
