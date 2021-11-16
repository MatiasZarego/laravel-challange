<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProspectsController;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/video', [VideoController::class, 'index']);

Route::get('/prospects', [ProspectsController::class, 'index']);

Route::post('/prospects', [ProspectsController::class, 'index']);
