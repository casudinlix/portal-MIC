<?php



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

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TesController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::post('login/user', [LoginController::class, 'index'])->name('login.auth');
Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['web', 'auth', 'status'])->name('dashboard');
Route::get('logout', [LoginController::class, 'logout'])->name('logout.dashboard');
Route::get("tes", [TesController::class, 'index']);