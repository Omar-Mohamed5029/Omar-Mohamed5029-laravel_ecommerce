<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\admin\ControlController;
use App\Http\Controllers\admin\OrderController as adminOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserMessageController;
use App\Http\Controllers\admin\CategoryController as adminCategoryController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\OfferController as adminOfferController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\admin\ProductController as adminProductController;
use App\Models\Message;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/welcome', function () {
//     return view('welcome');
// });  

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/showproduct/{id}', [HomeController::class, 'show']);
Route::get('/search', [SearchController::class, 'search']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/search', [SearchController::class, 'search']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/category/{category_name}', [CategoryController::class, 'index']);


// Route::Post('/sendmessage',[MessageController::class,'store']);


// Route::post('/store_product',[adminProductController::class,'store'])->name('front.store_product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::post('/store_product',[adminProductController::class,'store'])->name('front.store_product');

Route::middleware(['auth:sanctum', 'verified', 'checkadmin'])->group(function () {
    Route::get('/control', [ControlController::class, 'index']);
    Route::resource('admin/allproducts', adminProductController::class);
    Route::resource('admin/allcategories', adminCategoryController::class);
    Route::resource('/admin/allmessages', MessageController::class);
    Route::resource('/admin/alloffers', adminOfferController::class);
    Route::resource('/admin/allorders', adminOrderController::class);
    // Route::post('/store',[adminCategoryController::class,'store'])->name('front.store_category');
    // Route::get('/admin/create_category',[adminCategoryController::class,'create']);

});

Route::middleware(['auth:sanctum', 'verified', 'CheckSuperAdmin'])->group(function () {

    Route::resource('/control/user', UserController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/contacts', ContactController::class);
    Route::resource('order', OrderController::class);
    Route::resource('cart', CartController::class);
    Route::resource('mymessage', UserMessageController::class);
});

require __DIR__ . '/auth.php';
