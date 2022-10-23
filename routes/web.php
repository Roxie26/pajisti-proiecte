<?php
use App\Http\Controllers\FormularController;
use App\Http\Controllers\ServiciiController;
use App\Http\Controllers\ResurseController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MesajeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [FrontController::class, 'index']);

Route::post('/index', [FrontController::class, 'store']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource("servicii", ServiciiController::class);
Route::resource("resurse", ResurseController::class);


Route::resource('mesaje', MesajeController::class);