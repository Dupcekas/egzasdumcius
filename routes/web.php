<?php

use App\Http\Controllers\Products;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [Products::class, 'index'])->middleware('auth');

Route::prefix('/products')->group(function(){
    
    Route::get('/add', [Products::class, 'add'])->middleware('auth');
    Route::get('/modify', [Products::class, 'modify'])->middleware('auth');
    
    Route::post('/create', [Products::class, 'create']);
    Route::post('/update', [Products::class, 'update']);
    Route::post('/delete/{id}', [Products::class, 'delete']);
    Route::get('/{id}', [Products::class, 'find'])->middleware('auth');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
