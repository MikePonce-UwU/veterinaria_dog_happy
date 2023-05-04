<?php

namespace App\Enums\ReportesClinicos;

enum AparatoEnum:string{
    case Digestivo = 'digestivo';
    case Cardiovascular = 'cardiovascular';
    case Inmunologico = 'inmunologico';
    case Respiratorio = 'respiratorio';
    case  Musculoesqueletico = 'musculoesqueletico';
    case  Sentidos = 'sentidos';
}
