<?php

use App\Http\Controllers\ThingsController;
use App\Models\ContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Thing;
use App\Http\Controllers\ActionsController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $things = Thing::all()->get('name');
        return view('dashboard')->with($things);
    })->name('dashboard');
});

Route::get('/contact', ContactController::class)->name('contact');
Route::controller(ThingsController::class)->group(function () {
    Route::get('/days', 'index')->name('day');
    Route::get('/days/{id}', 'show')->name('SolidThinking');
});
Route::controller(ActionsController::class)->group(function () {
    Route::post('storeReading', 'storeReading')->name('storeReading');
});
Route::resource('actions', ActionsController::class);
