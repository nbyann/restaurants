<?php 
namespace App\Models;
// use Illuminate\Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Panier extends Model{
    protected $table='panier';
    protected $fillable=['user_id','plats_id','quantite'];
    public function plat(){
        return $this->belongsTo(Plat::class,'plats_id');
    }
}