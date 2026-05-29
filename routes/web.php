<?php
use App\Http\Controllers\AuthController;
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

Route::get('/', fn()=>view('pw'));
Route::get('/restaurants', fn()=>view('restaurants'));
Route::get('/inscription', fn()=>view('inscription'));
Route::get('/connexion', fn()=>view('connexion'));
Route::get('/panier', fn()=>view('panier'));
Route::get('/pw2', fn()=>view('pw2'));
Route::get('/profile', fn()=>view('profile'))->middleware('auth');
Route::get('/cap deli', fn()=>view('cap deli'));
Route::get('/brasa country', fn()=>view('brasa country'));
Route::get('/fogo', fn()=>view('fogo'));
Route::get('/TAGIDOR', fn()=>view('TAGIDOR'));

Route::view('/pw-connected','pw-connected')->middleware('auth');
Route::view('/restaurants','restaurants')->middleware('auth');
// Route::post('/inscription','AuthController@register')->name('register');
Route::post('/inscription',[AuthController::class,'register'])->name('register');
Route::post('/connexion',[AuthController::class,'login'])->name('login');
Route::post('/',[AuthController::class,'logout'])->name('logout');
