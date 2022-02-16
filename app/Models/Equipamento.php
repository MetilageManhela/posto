<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portagem;
use App\Models\Funcionario;
class Equipamento extends Model
{
    use HasFactory;
     protected $fillable = [
        '', '','', '' 
            
    ];
     
     public function portagem()
    {
    return $this->belongsTo(Portagem::class);
    
    }
    
    //maitos para muitos
     public function registros()
    {
        return $this->belongsToMany(Funcionario::class , 'registros');
    }
}
