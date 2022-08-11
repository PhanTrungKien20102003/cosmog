<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelGunsController;
use App\Http\Controllers\RarityController;
use App\Http\Controllers\SkinSetsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestsController;
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
Route::get('guns-List',[ModelGunsController::class,'index']);
Route::get('add-Guns',[ModelGunsController::class,'addGuns']);
Route::post('save-gun',[ModelGunsController::class,'saveGun']);
Route::get('edit-Guns/{id}',[ModelGunsController::class,'editGuns']);
Route::post('update-gun',[ModelGunsController::class,'updateGuns']);
Route::get('delete-Guns/{id}',[ModelGunsController::class,'deleteGuns']);

Route::get('rarity-List',[RarityController::class,'RarityIndex']);

Route::get('skin_sets-List',[SkinSetsController::class,'skin_setsIndex']);

Route::get('admin-List',[AdminController::class,'AdminIndex']);

Route::get('guests-List',[GuestsController::class,'GuestsIndex']);