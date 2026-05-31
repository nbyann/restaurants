<?php 
namespace App\Models;
// use Illuminate\Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Commande extends Model{
    protected $fillable = ['user_id','restaurant_id','montant_C','adresseLivraison_C','status'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
    public function items(){
        return $this->hasMany(CommandeItem::class);
    }
}