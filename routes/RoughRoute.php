<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth','role']], function() {
    // your routes
    Route::controller(AuthController::class)
    // ->prefix('placements')
    // ->as('placements.')
    ->group(function () {
        Route::get('/admin', 'index')->name('index');
    //    Route::get('login','authenticate')->name('login');
       Route::get('register_view','register_view');
       Route::get('register_Edit_view/{id}','register_Edit_view');
       Route::get('gallery','gallery_view');
       Route::get('project-edit/{id}','projects_edit_view');
       Route::get('contact_view','contact_view');
       Route::get('projects','projects_view');
       Route::get('project-detail','project_detail_view');
       Route::get('projects-add','projects_add_view');
       Route::get('contact-us','contact_us_view');
       Route::get('calendar_view','calendar_view');
       Route::post('register_create','register_create');
       Route::get('register_update','register_update');
       Route::get('contact-us11','contact_us_store');
       Route::get('table_view','table_view');
       Route::get('destroy','destroy');
       Route::get('login_view','login_view');
       Route::get('logout','logout')->name('logout');
    });
    
});

Route::controller(AuthController::class)
// ->prefix('placements')
// ->as('placements.')
->group(function () {
   Route::get('login','authenticate')->name('login');
   
});

Route::controller(FrontendController::class)
// ->prefix('placements')
// ->as('placements.')
->group(function () {
    Route::get('/', 'index')->name('index')->name('home');
   Route::get('about','about_view');
   Route::get('register_Edit_view/{id}','register_Edit_view');
   Route::get('design','design_view');
   Route::get('e_commerce/{id}','e_commerce_view');
   Route::get('design_edit','design_edit');
   Route::get('shop_view','shop_view');
   Route::get('design_tea','design_tea');
   Route::get('design_cofe','design_cofe');
   Route::get('contact','contact_view');
   Route::post('/contact/send','contact_store');
   Route::get('design_jc','design_jc');

});

Route::controller(ProductController::class)
// ->prefix('placements')
// ->as('placements.')
->group(function () {
//     Route::get('/', 'index')->name('index')->name('home');
//    Route::get('about','about_view');
//    Route::get('register_Edit_view/{id}','register_Edit_view');
//    Route::get('design','design_view');
//    Route::get('e_commerce/{id}','e_commerce_view');
//    Route::get('design_edit','design_edit');
//    Route::get('shop_view','shop_view');
//    Route::get('design_tea','design_tea');
//    Route::get('design_cofe','design_cofe');
//    Route::get('contact','contact_view');
//    Route::post('/contact/send','contact_store');
//    Route::get('design_jc','design_jc');

});

// Route::get('/', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


// Route::get('','');  /admin     gallery    register_view     projects    projects-add   project-edit   project-detail  calendar  contact-us             


// layout/app.blade.php
// @vite(['resources/css/app.css', 'resources/js/app.js'])
