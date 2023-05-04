<?php

namespace App\Enums\ReportesClinicos;

enum PronosticoEnum:string{
    case Favorable = 'favorable';
    case Grave = 'grave';
    case reservado = 'reservado';
}
