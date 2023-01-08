<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model


{
    use HasFactory;
    protected $table = 'Escola';

    // protected $fillable = [
    //     'FichaStatus',
    //     'FichaCategoriaID',
    //     'FichaEscolaID',
    //     'FichaAlunoID',
        
    // ];

    public function Ficha() {
        return $this->belongsTo(Ficha::class);
        }      
     
}
