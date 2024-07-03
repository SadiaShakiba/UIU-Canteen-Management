<?php
use App\Models\notice;
use App\Models\offer;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController\IndexController;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\CartController\CartController;
use App\Http\Controllers\WishlistController\WishlistController;
use App\Http\Controllers\OlympiaController\OlympiaController;
use App\Http\Controllers\KhansController\KhansController;
use App\Http\Controllers\CheckoutController\CheckoutController;
use App\Http\Controllers\ContactController\ContactController;
use App\Http\Controllers\ProductDetailController\ProductDetailController;




// ADMIN
use App\Http\Controllers\AdminDashboardController\AdminDashboardController;
use App\Http\Controllers\AdminDashboardController\AddProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [IndexController::class,'index']);
Route::post('SignUpFunc',[IndexController::class,'SignUpFunc'])->name('SignUpFunc');
Route::post('LogInFunc',[IndexController::class,'LogInFunc'])->name('LogInFunc');
Route::get('/logout',[IndexController::class,'logout']);
Route::get('/offers1',[IndexController::class,'offers1']);
Route::get('/notices1',[IndexController::class,'notices1']);



Route::get('/home', [HomeController::class,'home']);
Route::get('/offers', [HomeController::class,'offers']);
Route::get('/notices', [HomeController::class,'notices']);


Route::get('/cart', [CartController::class,'cart']);
Route::get('/wishlist', [WishlistController::class,'wishlist']);
Route::get('/olympia', [OlympiaController::class,'olympia']);
Route::get('/khanskitchen', [KhansController::class,'khans']);

Route::get('/khansbrk', [KhansController::class,'khansbrk']);
Route::get('/khanslunch', [KhansController::class,'khanslunch']);
Route::get('/khansdrinks', [KhansController::class,'khansdrinks']);
Route::get('/khanssnacks', [KhansController::class,'khanssnacks']);

Route::get('/khansbrk1', [KhansController::class,'khansbrk1']);
Route::get('/khanslunch1', [KhansController::class,'khanslunch1']);
Route::get('/khansdrinks1', [KhansController::class,'khansdrinks1']);
Route::get('/khanssnacks1', [KhansController::class,'khanssnacks1']);

Route::get('/olympiabrk', [OlympiaController::class,'olympiabrk']);
Route::get('/olympialunch', [OlympiaController::class,'olympialunch']);
Route::get('/olympiadrinks', [OlympiaController::class,'olympiadrinks']);
Route::get('/olympiasnacks', [OlympiaController::class,'olympiasnacks']);

Route::get('/olympiabrk1', [OlympiaController::class,'olympiabrk1']);
Route::get('/olympialunch1', [OlympiaController::class,'olympialunch1']);
Route::get('/olympiadrinks1', [OlympiaController::class,'olympiadrinks1']);
Route::get('/olympiasnacks1', [OlympiaController::class,'olympiasnacks1']);

Route::get('/olympia1', [OlympiaController::class,'olympia1']);
Route::get('/khanskitchen1', [KhansController::class,'khans1']);
Route::get('/checkout', [CheckoutController::class,'checkout']);
Route::get('/contact', [ContactController::class,'contact']);
Route::get('/product_detail', [ProductDetailController::class,'product_detail']);

Route::get('/cart', [OlympiaController::class, 'cart'])->name('cart');
Route::get('add_to_cart/{product_id}',[OlympiaController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update_cart',[OlympiaController::class, 'update'])->name('update_cart');
Route::delete('remove_from_cart',[OlympiaController::class, 'remove'])->name('remove_from_cart');
Route::get('add_to_wishlist/{product_id}',[OlympiaController::class, 'addToWishlist'])->name('add_to_wishlist');

// Route::get('/product_details/{product_id}', [ProductDetailController::class, 'product_details']);
// Route::get('/product_details/{product_id}', [ProductDetailController::class, 'product_details'])->name('product_details');

Route::get('/product_details/{product_id}', [ProductDetailController::class, 'product_details'])->name('product_details');



Route::get('/cart', [KhansController::class, 'cart'])->name('cart');
Route::get('add_to_cart/{product_id}',[KhansController::class, 'add_To_Cart'])->name('add_to_cart');
Route::patch('update_cart',[KhansController::class, 'update'])->name('update_cart');
Route::delete('remove_from_cart',[KhansController::class, 'remove'])->name('remove_from_cart');
Route::get('add_to_wishlist/{product_id}',[KhansController::class, 'addToWishlist'])->name('add_to_wishlist');



Route::get('add_to_cart/{product_id}',[CheckoutController::class, 'addToCart'])->name('add_to_cart');
Route::post('/insertorder',[CheckoutController::class,'insert_order']);




Route::post('profile',[IndexController::class,'LogInFunc']);


Route::post('/post_opinion', [ContactController::class,'post_opinion']);




// ADMIN



Route::get('/admin', [AdminDashboardController::class,'dashboard']);
Route::get('/productlist', [AdminDashboardController::class,'productlist']);
Route::get('/addproduct', [AdminDashboardController::class,'addproduct']);
Route::post('/addproduct', [AdminDashboardController::class,'Add_Product']);

Route::get('/Editproduct', [AdminDashboardController::class,'Edit_product']);
Route::get('/editproduct/{product_id}', [AdminDashboardController::class,'editproduct']);
Route::post('/product-update/{id}',[AdminDashboardController::class,'product_update']);
Route::delete('/product-delete/{product_id}',[AdminDashboardController::class,'delete_product']);



Route::get('/notification', [AdminDashboardController::class,'notification']);


Route::get('/editrole', [AdminDashboardController::class,'editrole']);
Route::get('/role-edit/{id}',[AdminDashboardController::class,'edited_roles']);
Route::get('/registered', [AdminDashboardController::class,'registered']);
Route::post('/user-update/{id}',[AdminDashboardController::class,'update_user']);
Route::delete('/user-delete/{id}',[AdminDashboardController::class,'delete_user']);


Route::get('/notice', [AdminDashboardController::class,'notice']);
Route::get('/postnotice', [AdminDashboardController::class,'postnotice']);
Route::post('/post_notice', [AdminDashboardController::class,'post_notice']);

Route::get('/offer', [AdminDashboardController::class,'offer']);
Route::get('/postoffer', [AdminDashboardController::class,'postoffer']);
Route::post('/post_offer', [AdminDashboardController::class,'post_offer']);


Route::post('/contact-update/{contact_id}', [AdminDashboardController::class,'post_offer']);















// Route::get('/shop', function () {
//     return view('Rabeya.shop');
// });






