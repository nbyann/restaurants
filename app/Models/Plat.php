<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Plat extends Model{
    use HasFactory;
    protected $fillable = ['restaurants_id','name_P','description_P','prix_P','image'];
    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'restaurants_id');
    }
}