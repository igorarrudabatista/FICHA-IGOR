<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model


{
    use HasFactory;
    protected $table = 'Ficha';

    protected $fillable = [
        'FichaStatus',
        'FichaCategoriaID',
        'FichaEscolaID',
        'FichaAlunoID',
        
    ];

    public function Categoria() {
        return $this->belongsTo(Categoria::class);
        }
        
    public function Escola() {
            return $this->belongsTo(Escola::class);
        }
    public function Aluno() {
            return $this->belongsTo(Aluno::class);
        }
     

}
