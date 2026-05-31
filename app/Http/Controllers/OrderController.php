<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panier;
use App\Models\Commande;
use App\Models\CommandeItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // 1. Ajouter un plat au panier
    public function addToCart(Request $request)
    {
        $request->validate([
            'plats_id' => 'required|exists:plats,id',
            'quantite' => 'required|integer|min:1'
        ]);

        $user = Auth::user();

        // Vérifier si le plat est déjà dans le panier
        $cartItem = Panier::where('user_id', $user->id)
                          ->where('plats_id', $request->plats_id)
                          ->first();

        if ($cartItem) {
            $cartItem->increment('quantite', $request->quantite);
        } else {
            Panier::create([
                // 'user_id' => $user->id,
                'user_id'=>Auth::id(),
                'plats_id' => $request->plats_id,
                'quantite' => $request->quantite
            ]);
        }

        return redirect()->back()->with('success', 'Plat ajouté au panier !');
    }

    // 2. Afficher le panier
    public function showCart()
    {
        $cartItems = Panier::with('plat.restaurant')->where('user_id', Auth::id())->get();
        return view('panier', compact('cartItems'));
    }
     public function removeFromCart($id)
    {
        Panier::where('id',$id)->where('user_id', Auth::id())->delete();
        return redirect()->back();
    }


    // 3. Valider le panier et éclater par restaurant
    public function checkout(Request $request)
    {
        $request->validate([
            'adresseLivraison_C' => 'required|string|max:255'
        ]);

        $user = Auth::user();
        $cartItems = Panier::with('plat')->where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Votre panier est vide.');
        }

        // Étape clé : Grouper les éléments du panier par l'ID du restaurant du plat
        $groupedByRestaurant = $cartItems->groupBy(function($item) {
            return $item->plat->restaurant_id;
        });

        // Pour chaque restaurant, on crée une commande distincte
        foreach ($groupedByRestaurant as $restaurantId => $items) {
            $montantCommande = 0;

            // Calcul du montant total pour ce restaurant
            foreach ($items as $item) {
                $montantCommande += $item->plat->prix_P * $item->quantite;
            }

            // Création de la commande pour ce restaurant précis
            $commande = Commande::create([
                // 'user_id' => $user->id,
                 'user_id'=>Auth::id(),
                'restaurant_id' => $restaurantId,
                'montant_C' => $montantCommande,
                'adresseLivraison_C' => $request->adresseLivraison_C,
                'status' => 'en_attente'
            ]);

            // Ajout des plats associés à cette commande
            foreach ($items as $item) {
                CommandeItem::create([
                    'commande_id' => $commande->id,
                    'plats_id' => $item->plats_id,
                    'quantite' => $item->quantite,
                    'prix_unitaire' => $item->plat->prix_P
                ]);
            }
        }

        // Vider le panier de l'utilisateur après commande
        Panier::where('user_id', $user->id)->delete();

        return redirect()->route('profile')->with('success', 'Commandes envoyées aux restaurants avec succès !');
    }

    // 4. Afficher le Dashboard du Restaurant (pour le moment général)
    public function restaurantDashboard()
    {
        // Pour le moment on prend toutes les commandes. Plus tard on filtrera par le restaurant du gérant connecté.
        $commandes = Commande::with(['user', 'items.plat'])->orderBy('created_at', 'desc')->get();
        return view('restaurants', compact('commandes'));
    }

    // 5. Accepter ou Refuser une commande (Côté Dashboard Restaurant)
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:validee,refusee'
        ]);

        $commande = Commande::findOrFail($id);
        $commande->status = $request->status;
        $commande->save();

        return response()->json(['success' => true, 'status' => $commande->status]);
    }
}