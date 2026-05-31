<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les attributs qui peuvent être assignés en masse.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * Les attributs qui doivent être masqués pour la sérialisation.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Les attributs qui doivent être castés.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Gère automatiquement le hachage si nécessaire selon ta version
    ];
    public function paniers(){
        return $this->hasMany(Panier::class);
    }
    public function commandes(){
        return $this->hasMany(Commande::class);
    }
}

