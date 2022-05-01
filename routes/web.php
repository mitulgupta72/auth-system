<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('registration', [AuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [AuthController::class, 'registeruser'])
->name('register-user');
Route::post('/login-user',[AuthController::class,'loginuser'])->name('login-user');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('IsLoggedIn');
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/addtolist', [DataController::class, 'AddToList']);
// Route::get('addItem','addItem');

Route::post('/adding-item', [DataController::class, 'addingitem'])
->name('adding-item');

Route::get('/list', [DataController::class, 'list'])->middleware('IsLoggedIn');

Route::get('/print/{order_id}',[DataController::class,'print']);



