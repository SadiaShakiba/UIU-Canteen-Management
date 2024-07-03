<?php

namespace App\Http\Controllers\AdminDashboardController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\notice;

use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    //

    public function dashboard()
    {

        // $data = array();
        // if(session->has())
        $contact = DB::select('SELECT * FROM contacts');
        $user = DB::select('SELECT * FROM user');
        $product = DB::select('SELECT * FROM products');

        return view('AdminPanel.dashboard',compact('contact','user','product'));

        // return view('AdminPanel.dashboard');
    }

    public function productlist()
    {
        $products = DB::table('products')->get();
        return view('AdminPanel.product_list')->with('products', $products);
    }


    public function addproduct()
    {
        $products = DB::select('SELECT * FROM products');
        return view('AdminPanel.addproduct', ['products' => $products]);
    }

    public function Add_Product(Request $request)
    {
        $option  = $request->input('option');
        $product_name  = $request->input('product_name');
        $product_price = $request->input('product_price');
        $productimage = $request->file('product_image')->getClientOriginalName();
        // MOVE IMAGE
        $request->product_image->move(public_path('images'), $productimage);
        $product_category = $request->input('product_category') ;
        $product_description = $request->input('product_description') ;


        $query = DB::table('products')->insert([
            'canteen_name'=> $option,
            'product_name'=> $product_name,
            'product_image'=> $productimage,
            'product_price'=> $product_price,
            'category'=> $product_category,
            'product_description' => $product_description,
            ]);
        if($query) {
            return back()->with('success', 'Product Added Successfully');
            return view('AdminPanel.addproduct');

        }
    }





    public function Edit_product()
    {
        $products = DB::select('SELECT * FROM products');
        return view('AdminPanel.editproduct', ['products' => $products]);
    }

    public function editproduct(Request $req, $product_id)
    {
        $products = DB::table('products')->find($product_id);
        return view('AdminPanel.editproduct')->with('products', $products);


    }


    public function product_update(Request $req, $product_id)
    {

        if(DB::table('products')
        ->where('product_id', $product_id)
        ->update([
            'product_id'     => $req->input('product_id'),
            'status'         => $req->input('status')
        ])) {

            return redirect('/productlist')->with('failure', 'Invalid Entry');

        }
    }
    public function delete_product(Request $request, $id)
    {
        if(DB::table('products')
        ->delete($id)) {
            return  back()->with('delete_success', 'Data deleted successfully');
        }
    }

    public function notification()
    {
        $contact = DB::select('SELECT * FROM contacts');
        return view('AdminPanel.notification',compact('contact'));

    }


    public function editrole()
    {
        return view('AdminPanel.editrole');
    }

    public function edited_roles(Request $req, $id)
    {
        $users = DB::table('user')->find($id);
        return view('AdminPanel.editrole')->with('users', $users);

    }

    public function registered()
    {
        $user = DB::table('user')->get();
        return view('AdminPanel.registered')->with('user', $user);
    }



    public function update_user(Request $req, $id)
    {

        if(DB::table('user')
        ->where('id', $id)
        ->update([
            'student_id'     => $req->input('student_id'),
            'role'         => $req->input('usertype')
        ])) {

            return redirect('/registered')->with('failure', 'Invalid Entry');

        }
    }

    public function delete_user(Request $request, $id)
    {
        if(DB::table('user')
        ->delete($id)) {
            return  back()->with('delete_success', 'Data deleted successfully');
        }
    }







    public function notice(){

        $notice = DB::table('notices')->get();
        return view('AdminPanel.notice')->with('notice', $notice);
        // return view('AdminPanel.notice');
    }
    public function postnotice()
    {
        $notice= DB::select('SELECT * FROM notices');
        return view('AdminPanel.notice', ['notice' => $notice]);

    }


    public function post_notice(Request $request){
        $option  = $request->input('option');
        $notice_head = $request->input('notice_head');
        $notice  = $request->input('notice');



        $query = DB::table('notices')->insert([
            'canteen_name'=> $option,
            'notice'=> $notice,
            'notice_head' =>$notice_head,
         ]);
        if($query) {
              return back()->with('success', 'Notice posted');
               return view('AdminPanel.notice');

         }

    }













    public function offer(){
        $offer = DB::table('offers')->get();
        return view('AdminPanel.offer')->with('offer', $offer);

    }
    public function postoffer(){
        $offer= DB::select('SELECT * FROM offers');
        return view('AdminPanel.offer', ['offer' => $offer]);

    }
    public function post_offer(Request $request){
        $option  = $request->input('option');
        $offer_head = $request->input('offer_head');
        $offer= $request->input('offer');



        $query = DB::table('offers')->insert([
            'canteen_name'=> $option,
            'offer'=> $offer,
            'offer_head' =>$offer_head,
         ]);
        if($query) {
              return back()->with('success', 'Offer posted');
               return view('AdminPanel.offer');

         }


    }



    public function update_contact(Request $req, $contact_id)
    {

        if(DB::table('contacts')
        ->where('contact_id', $contact_id)
        ->update([
            'student_id'     => $req->input('student_id'),
            'role'         => $req->input('usertype')
        ])) {

            return redirect('/registered')->with('failure', 'Invalid Entry');

        }
    }


    }













