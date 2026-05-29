<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validation stricte (le rôle doit être soit client, soit restaurant)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|string|in:client,restaurant'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        Auth::login($user);

        // Redirection conditionnelle après inscription
        if ($user->role === 'restaurant') {
            return redirect()->intended('/restaurants');
        }
        return redirect()->intended('/pw-connected');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Sécurisation de la session (Bonne pratique Laravel)
            $request->session()->regenerate();

            // Redirection selon le rôle
            if (Auth::user()->role === 'restaurant') {
                return redirect()->intended('/restaurants');
            }
            return redirect()->intended('/pw-connected');
        }

        // Retour en arrière si les identifiants sont faux
        return back()->withErrors([
            'email' => 'Informations incorrectes.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        // Nettoyage complet de la session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/connexion');
    }
}
