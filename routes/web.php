<?php
use App\Http\Controllers\book;
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


Route::get('/dashboard', [book::class, 'dashboard']
)->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('contact', function () {
    return view('contact');
});


//GIRL YOU FOUND THE WAY TO CALL DIFFERENT CLASSES

Route::get('/',[book::class, 'recent']);
Route::get('catalog',[book::class, 'index']);
Route::get('/catalog/{genre}', [book::class,'filter']);
Route::get('show/book_id={id}',[book::class,'show']);
Route::get('create', [book::class, 'create']
)->middleware(['auth'])->name('create');
//Route::post('/create',[book::class,'store']);
Route::post('/create',[book::class,'store']);

