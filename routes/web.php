<?php

use App\Http\Controllers\WebAdmin\CompanyController;
use App\Http\Controllers\WebAdmin\DashboardController;
use App\Http\Controllers\WebFront\ClientController;
use App\Http\Controllers\WebFront\MainController;
use App\Http\Controllers\WebFront\MemberController;
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

Route::get('/', [MainController::class, 'index'])->name('main');
Route::post('/client', [ClientController::class, 'store']);
Route::post('/member', [MemberController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    //
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::resource('company', CompanyController::class);
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
