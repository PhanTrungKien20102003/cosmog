<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelGunsController;
use App\Http\Controllers\RarityController;
use App\Http\Controllers\SkinSetsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestsController;
use App\Http\Controllers\SkinsController;
use App\Http\Controllers\Admin_PageController;
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
Route::get('add-Rarity',[RarityController::class,'addRarity']);
Route::post('save-rarity',[RarityController::class,'saveRarity']);
Route::get('edit-Rarity/{rarityid}',[RarityController::class,'editRarity']);
Route::post('update-rarity',[RarityController::class,'updateRarity']);
Route::get('delete-Rarity/{rarityid}',[RarityController::class,'deleteRarity']);

Route::get('skins-List',[SkinsController::class,'SkinsIndex']);
Route::get('add-Skins',[SkinsController::class,'addSkins']);
Route::post('save-skins',[SkinsController::class,'saveSkins']);
Route::get('edit-Skins/{skinid}',[SkinsController::class,'editSkins']);
Route::post('update-skins',[SkinsController::class,'updateSkins']);
Route::get('delete-Skins/{skinid}',[SkinsController::class,'deleteSkins']);

Route::get('skin_sets-List',[SkinSetsController::class,'skin_setsIndex']);

Route::get('admin-List',[AdminController::class,'AdminIndex']);

Route::get('guests-List',[GuestsController::class,'GuestsIndex']);

Route::get('admin_Page',[Admin_PageController::class,'AdminPageIndex']);