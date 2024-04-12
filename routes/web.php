<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\AuthController;

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

Route::redirect('/', '/admin');

Auth::routes();

// Route::get('/{any}', [MainController::class, 'index'])->where('any', '^(?!admin|api).*$');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
	//auth
	Route::post('login', [AuthController::class,'postlogin'])->name('admin.postlogin');
    //inventory
    Route::get('/inventories/{id}/history', [InventoryController::class, 'historyByInventory'])
        ->name('inventories.history');
});


