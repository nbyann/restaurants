<?php 
namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory as FactoriesHasFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model{
    use HasFactory;
    protected $fillable = ['name_R','description_R','adresse_R','ville_R','logo_R'];
    public function commandes(){
        return $this->hasMany(Commande::class);
    }
}