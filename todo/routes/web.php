<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

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
Route::get('/auth', [AuthorController::class,'check']);
Route::post('/auth', [AuthorController::class,'checkUser']);
Route::get('/index', [TodoController::class,'index']);

Route::get('/registers', [AuthorController::class,'register']); //多分authのメソッドで/registerにアクセスがあった時に専用の登録ページに遷移するようになっているのだと思うからとりあえず/registersにしている。//
Route::post('/register', [AuthorController::class,'checkUser']);









Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


