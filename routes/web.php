<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\Page\ClientController;
use App\Http\Controllers\Page\MemberController;

use Illuminate\Support\Facades\Route;

use App\Models\Client;
use App\Models\Freelancer;


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

//Page
Route::get('/', [MainController::class, 'index'])->name('main');
Route::post('/client', [ClientController::class, 'store']);
Route::post('/member', [MemberController::class, 'store']);