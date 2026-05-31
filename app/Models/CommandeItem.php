<?php 
namespace App\Models;
// use Illuminate\Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CommandeItem extends Model{
    protected $fillable = ['commande_id','plat_id','quantite','prix_unitaire'];
    public function plat(){
        return $this->belongsTo(Plat::class);
    }
}