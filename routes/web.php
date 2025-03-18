<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Models\Product;



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

Route::get('/', [HomeController::class,'home']);

Route::get('/dashboard', function () {
    $product = Product::all();
    return view('home.index',compact('product'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class, 'index'])->middleware(['auth','admin'])->name('admin.dashboard');

Route::get('view_category',[AdminController::class, 'view_category'])->middleware(['auth','admin']);

Route::post('add_category',[AdminController::class, 'add_category'])->middleware(['auth','admin']);

Route::get('delete_category/{id}',[AdminController::class, 'delete_category'])->middleware(['auth','admin']);

Route::get('edit_category/{id}',[AdminController::class, 'edit_category'])->middleware(['auth','admin']);

Route::post('update_category/{id}',[AdminController::class, 'update_category'])->middleware(['auth','admin']);

Route::get('add_product',[AdminController::class, 'add_product'])->middleware(['auth','admin']);

Route::post('upload_product',[AdminController::class, 'upload_product'])->middleware(['auth','admin']);

Route::get('view_products',[AdminController::class, 'view_products'])->middleware(['auth','admin']);

Route::get('delete_product/{id}',[AdminController::class, 'delete_product'])->middleware(['auth','admin']);

Route::get('edit_product/{id}',[AdminController::class, 'edit_product'])->middleware(['auth','admin']);

Route::post('update_product/{id}',[AdminController::class, 'update_product'])->middleware(['auth','admin']);

Route::get('search_product',[AdminController::class, 'search_product'])->middleware(['auth','admin']);