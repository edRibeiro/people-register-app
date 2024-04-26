<?php

namespace App\Enums;

enum EstadoCivil: string
{
    case SOLTEIRO = 'Solteiro(a)';
    case CASADO = 'Casado(a)';
    case DIVORCIADO = 'Divorciado(a)';
    case VIUVO = 'Viúvo(a)';
    case SEPARADO = 'Separado(a)';
}
