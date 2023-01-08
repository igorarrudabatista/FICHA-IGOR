<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'Categoria';

    protected $fillable = [
        'FichaCatNome',
        'FichaCatSts',
    
        
    ];



    public function Ficha(){
         return $this->belongsTo(Ficha::class);
     }
}
