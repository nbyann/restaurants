<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pw'));
Route::get('/inscription', fn() => view('inscription'));
Route::get('/connexion', fn() => view('connexion'));
// Route::get('/restaurant-page', fn() => view('restaurant-page'));
Route::get('/cap deli', fn() => view('cap deli'));
Route::get('/brasa country', fn() => view('brasa country'));
Route::get('/fogo', fn() => view('fogo'));
Route::get('/TAGIDOR', fn() => view('TAGIDOR'));

// Routes nécessitant une authentification
Route::middleware('auth')->group(function () {
    Route::view('/pw-connected', 'pw-connected');
    //afficher un restaurants
     Route::get('/restaurants/{id}', [RestaurantController::class, 'updateStatus'])->name('restaurant.show');
});
    // Panier
    Route::get('/panier', [OrderController::class, 'showCart'])->name('cart.show');
    Route::post('/panier/ajouter', [OrderController::class, 'addToCart'])->name('cart.add');
    Route::post('/panier/valider', [OrderController::class, 'checkout'])->name('cart.checkout');
    
    // Client Profile (Notification des statuts des commandes)
    Route::get('/profile', function() {
        $commandes = Auth::user()->commandes()->with('restaurant')->orderBy('created_at', 'desc')->get();
        return view('profile', compact('commandes'));
    })->name('profile');

    // Dashboard Restaurant
    Route::get('/restaurants', [OrderController::class, 'restaurantDashboard'])->name('restaurant.dashboard');
    Route::post('/commande/{id}/status', [OrderController::class, 'updateStatus'])->name('commande.status');
    Route::get('/restaurant-page/{id}', [RestaurantController::class, 'show']);


// Authentification
Route::post('/inscription', [AuthController::class, 'register'])->name('register');
Route::post('/connexion', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::delete('/panier/supprimer/{id}',[OrderController::class,'removeFromCart'])->name('cart.remove');