<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipamento;
class Funcionario extends Model
{
    use HasFactory;
    
    
   protected $fillable = [
        '', '','', '' 
            
    ];
   //maitos para muitos
     public function equipamentos()
    {
        return $this->belongsToMany(Equipamentos::class,'registros');
    }
}
