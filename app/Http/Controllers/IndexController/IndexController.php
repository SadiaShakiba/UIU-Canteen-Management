<?php

namespace App\Http\Controllers\IndexController;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\offer;
use App\Models\notice;



class IndexController extends Controller
{
    //
    public function index(){
        $offer = DB::select('SELECT * FROM offers');
        $notice = DB::select('SELECT * FROM notices');
        return view('Rabeya.index',compact('offer','notice'));
    }


    public function SignUpFunc(Request $request){

        // Password Matching
            $SetPass = $request->input('password');  // $_POST['username'];
            $ConfirmPass = $request->input('confirmpassword');

            if($SetPass == $ConfirmPass){
                      // BCRYPTING PASSWORD
                    $ConfirmPassEncrypt = password_hash( $ConfirmPass,PASSWORD_DEFAULT);
                        // SQL QUERY

                    $query = DB::table('user')->insert([
                    'firstname'=>$request->input('firstname'),
                    'lastname'=>$request->input('lastname'),
                    'student_id'=>$request->input('student_id'),
                    'email'=>$request->input('email'),
                 'password'=>$ConfirmPassEncrypt,
                    ]);



                    if( $query){           // KEYS     // MESSAGE
                            return back()->with('success','SIGNED UP');
                            return view('Rabeya.home');

                            }

                }
            else{
                       return back()->with('failure','Not matched');
                }

}




// public function LogInFunc(Request $request){
//     $student_id = $request->input('student_id');
//     $password = $request->input('password');
//     // $request->session()->put('user', $student_id['student_id']);

//     // echo session('user');

//                                         // LOG IN

//     if(DB::table('user')->where('student_id',$student_id)->exists()){
//         $EncryptedPass = DB::table('user')->where('student_id',$student_id)->value('password');
//         $LoggedInUser  = DB::table('user')->where('student_id',$student_id)->get();
//         // $DecryptPass =decrypt($EncryptedPass);

//         // ROLE ADD
//          if(password_verify($password,$EncryptedPass)){
//                 // return view('frontend.index');
//                 $role = DB::table('user')->where('student_id',$student_id)->value('role');
//                 // echo $role;
//                 if($role == "admin"){
//                     return view('AdminPanel.dashboard');
//                 }
//                else if($role == "student"){
//                     return view('Rabeya.home');
//                }

//          }
//          else{
//             return back()->with('LogInFailed','Invalid email or password');
//         }
//     }
//     else{
//         return back()->with('LogInFailed','Invalid email or password');
//     }
// }

public function LogInFunc(Request $request){
    $data=$request->input();
    $student_id = $request->input('student_id');
    $password = $request->input('password');



    if(DB::table('user')->where('student_id',$student_id)->exists()){
                $EncryptedPass = DB::table('user')->where('student_id',$student_id)->value('password');
                $LoggedInUser  = DB::table('user')->where('student_id',$student_id)->get();
                // $DecryptPass =decrypt($EncryptedPass);

                // ROLE ADD
                 if(password_verify($password,$EncryptedPass)){
                        // return view('frontend.index');
                        $request->session()->put('LogInFunc', $data['student_id']);
                        $role = DB::table('user')->where('student_id',$student_id)->value('role');
                        // echo $role;
                        if($role == "admin"){
                            $contact = DB::select('SELECT * FROM contacts');
                            $user = DB::select('SELECT * FROM user');
                            $product = DB::select('SELECT * FROM products');
                            return view('AdminPanel.dashboard',compact('contact','user','product'));
                        }
                       else if($role == "student"){
                        $offer = DB::select('SELECT * FROM offers');
                        $notice = DB::select('SELECT * FROM notices');
                        return view('Rabeya.home',compact('offer','notice'));
                       }

                 }
                 else{
                    return back()->with('LogInFailed','Invalid student ID  or password');
                }
            }
            else{
                return back()->with('LogInFailed','Student ID no registered');
            }


}



public function logout(){
    if(session()->has('student_id')){
        session()->pull('student-id');
    }
    return redirect('/');

}






public function offers1(){
    $offer = offer::all();
    return view('Rabeya.index',['offer' => $offer]);
}



public function notices1(){

    $notice = notice::all();
    return view('Rabeya.index',['notice' => $notice]);;

}

}



