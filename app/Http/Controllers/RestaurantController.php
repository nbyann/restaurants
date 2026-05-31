<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Plat;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function show($id)
    {
        // On récupère le restaurant ou on renvoie une erreur 404 s'il n'existe pas
        $restaurant = Restaurant::findOrFail($id);

        // On récupère tous les plats qui appartiennent à ce restaurant_id
        $plats = Plat::where('restaurants_id', $id)->get();

        // On envoie le restaurant et ses plats à une vue générique unique
        return view('restaurant-page', compact('restaurant', 'plats'));
    }
}