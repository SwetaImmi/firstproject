<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoughController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Mail;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
// Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';

Route::fallback(function () {
    return redirect()->route('home');
});

// Route::get('products', [ProductController::class, 'productList'])->name('products.list');
// Route::post('favorite-add/{id}', [WishlistController::class, 'favoriteAdd'])->name('favorite.add');
// Route::delete('favorite-remove/{id}', [WishlistController::class, 'favoriteRemove'])->name('favorite.remove');
// Route::get('wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Route::resource('/wishlist', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);
Route::get('wishlist',[WishlistController::class,'index']);
Route::post('wishlist',[WishlistController::class,'store'])->name('wishlist.store');

Route::group(['middleware' => ['auth', 'role']], function () {
    // your routes
    Route::controller(AuthController::class)
        ->group(function () {
            Route::get('/admin', 'index')->name('index');
            Route::get('register_view', 'register_view');
            Route::get('register_Edit_view/{id}', 'register_Edit_view');
            Route::get('gallery', 'gallery_view');
            Route::get('project-edit/{id}', 'projects_edit_view');
            Route::get('contact_view', 'contact_view');
            Route::get('projects', 'projects_view');
            Route::get('project-detail', 'project_detail_view');
            Route::get('projects-add', 'projects_add_view');
            Route::get('contact-us', 'contact_us_view');
            Route::get('calendar', 'calendar_view');
            Route::post('register/post', 'register_create');
            Route::get('register_update', 'register_update');
            Route::get('contact-us11', 'contact_us_store');
            Route::get('table_view', 'table_view');
            Route::get('projects/destroy/{id}', 'destroy');
            Route::get('login_view', 'login_view');
            Route::get('logout', 'logout')->name('logout');
            Route::post('register/update/{id}  ', 'register_update');
            Route::get('posts', 'post_ajax')->name('posts.index');
        });
});

Route::controller(AuthController::class)
    ->group(function () {
        Route::get('login', 'login_view')->name('login')->middleware('guest');
        Route::post('login/post', 'authenticate');
    });

Route::controller(ProductController::class)
    ->group(function () {
        Route::post('projects_add_create', 'projects_add_create');
        Route::post('product_update/{id}', 'product_update');
        Route::get('delete', 'destroy');
        Route::get('about_show', 'about_show');
        Route::post('about_upload', 'about_upload');
    });

Route::controller(FrontendController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('about', 'about_view');
        Route::get('register_Edit_viewxx/{id}', 'register_Edit_view');
        Route::get('product', 'design_view')->name('xx');
        Route::get('e_commerce/{id}', 'e_commerce_view');
        Route::get('design_edit', 'design_edit');
        Route::get('shop_view', 'shop_view');
        Route::get('design_cofe', 'design_cofe');
        Route::get('contact', 'contact_view');
        Route::post('/contact/send', 'contact_store');
        Route::get('design_jc', 'design_jc');
        Route::get('search', 'search')->name('search');
        Route::get('product_cake', 'product_cake');
        Route::get('product_choco', 'product_choco');
        Route::get('product_cookie', 'product_cookie');
        Route::get('product_donut', 'product_donut');
    });
Route::controller(LoginController::class)
    ->group(function () {
        Route::get('signUp', 'signUp_view')->name('reset.password.get');
        Route::post('signUp_create', 'signUp_create');
        Route::get('cust_login', 'customer_login_viwe');
        Route::post('cust_login/post', 'customer_login');
    });

Route::controller(BannerController::class)
->group(function () {
        Route::get('banner_upload', 'banner_upload');

        Route::post('banner_upload', 'banner_upload_store');

        Route::get('banner_list', 'banner_list');
        Route::get('banner_delete/{id}', 'banner_delete');
        Route::get('changeStatus', 'changeStatus');

        Route::get('enquiry', 'enquiry_show');
        Route::post('enquiry_post', 'enquiry_post');
    });

Route::get('cart/delete/{id}', [CartController::class, 'cart_delete'])->name('products.list');
Route::get('cart', [CartController::class, 'cartListCount'])->name('cart.count');
Route::get('new', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('newsk', [CartController::class, 'cartLists'])->name('cart.list');
// Route::post('cust_login/post', [CartController::class,'customer_login']);

Route::controller(RoughController::class)
    ->group(function () {
        // Route::get('/loadmore', 'index');
        Route::post('/loadmore/load_data', 'load_data')->name('loadmore.load_data');
        Route::get('/load_data', 'loader');
        // Route::post('/loadmore/load_data', 'load_data_xxx')->name('loadmore.load_data');
        // Route::get('/rough', 'rough_view');
        Route::post('/ajax_upload/action', 'action')->name('ajaxupload.action');
        Route::get('/rough', 'loader_view');
        Route::post('/ajax_upload/action', 'action')->name('ajaxupload.action');
        Route::get('user', 'loadMore');
        Route::post('subscribe', 'subscribe');
    });

Route::get('forget-password', [RoughController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [RoughController::class, 'submitStore'])->name('forget.password.post');
// Route::get('reset-password', [RoughController::class, 'showResetPasswordForm'])->name('reset.password.get');
// Route::post('reset-password', [RoughController::class, 'submitResetPasswordForm'])->name('reset.password.post');


// Route::get('send_mail', function () {

//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];

//     \Mail::to('kumarisweta8601@gmail.com')->send(new \App\Mail\MyTestMail($details));

//     dd("Email is Sent.");
// });
