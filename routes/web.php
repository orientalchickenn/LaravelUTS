<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/portfolio', [PortfolioController::class,'index']);
Route::get('/portfolio/create', [PortfolioController::class,'create']);
Route::post('/portfolio/store', [PortfolioController::class,'store']);
Route::get('/portfolio/{id}/edit', [PortfolioController::class,'edit']);
Route::put('/portfolio/{id}', [PortfolioController::class,'update']);
Route::delete('/portfolio/{id}', [PortfolioController::class,'destroy']);

/*
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/


