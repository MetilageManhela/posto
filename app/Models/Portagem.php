<?php

namespace App\Models;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipamento;
class Portagem extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'nome', 'localizacao','latitude', 'longitude' 
            
    ];
    
     public function equipamentos()
    {
        return $this->hasMany(Equipamento::class);
    }
}
