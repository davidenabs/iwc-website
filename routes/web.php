<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', App\Http\Controllers\HomeController::class)->name('home');
Route::get('/blog', App\Http\Controllers\PostController::class)->name('blog.index');
Route::get('/category/{category:slug}', App\Http\Controllers\ShowPostByCategoryController::class)->name('category.posts');


// other pages
Route::get('/ljkhvgchg', App\Http\Controllers\Pages\IWCGuaranteesController::class)->name('iwc.guarantees');
Route::get('/kljk,jh;', App\Http\Controllers\Pages\OurMinistry::class)->name('ministry');

Route::get('/page/{page}', App\Http\Controllers\Page::class)->name('page');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/{post:slug}',  App\Http\Controllers\ShowPostController::class)->name('blog.show');
