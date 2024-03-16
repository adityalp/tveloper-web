<?php

use App\Http\Controllers\WebAdmin\CategoryController;
use App\Http\Controllers\WebAdmin\CompanyController;
use App\Http\Controllers\WebAdmin\DashboardController;
use App\Http\Controllers\WebAdmin\PortfolioController;
use App\Http\Controllers\WebAdmin\ContactController;
use App\Http\Controllers\WebAdmin\FreelancerController;
use App\Http\Controllers\WebAdmin\ServiceController;
use App\Http\Controllers\WebAdmin\SocialMediaController;
use App\Http\Controllers\WebAdmin\TeamController;
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
        Route::resource('contact', ContactController::class);
        Route::resource('freelancer', FreelancerController::class);
        Route::resource('category', CategoryController::class);

        Route::resource('service', ServiceController::class);
        Route::prefix('service')->group(function () {
            Route::post('update/icon/{id}', [ServiceController::class, 'update_icon'])->name('update-icon');
        });

        Route::resource('socialmedia', SocialMediaController::class);
        Route::prefix('socialmedia')->group(function () {
            Route::post('update/icon/{id}', [SocialMediaController::class, 'update_icon'])->name('update-social-icon');
        });


        Route::resource('team', TeamController::class);
        Route::prefix('team')->group(function () {
            Route::post('update/photo/{id}', [TeamController::class, 'update_photo'])->name('update-photo');
        });

        Route::resource('portfolio', PortfolioController::class);


        

    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
