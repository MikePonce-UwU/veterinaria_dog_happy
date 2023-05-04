<?php

namespace App\Enums\ReportesClinicos;

enum EspecieEnum:string{
    case Canino = 'canino';
    case Felino = 'felino';
    case Equino = 'equino';
    case Exotico = 'exotico';
}
