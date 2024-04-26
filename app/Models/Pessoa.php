<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Sexo;
use App\Enums\EstadoCivil;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'data_nascimento',
        'sexo',
        'estado_civil',
        'nome_pai',
        'nome_mae',
        'cpf',
    ];

    protected $casts = [
        'sexo' => Sexo::class,
        'estado_civil' => EstadoCivil::class,
    ];
}
