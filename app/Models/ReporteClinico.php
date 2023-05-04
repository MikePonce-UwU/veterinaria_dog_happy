<?php

namespace App\Models;

use App\Enums\ReportesClinicos\AparatoEnum;
use App\Enums\ReportesClinicos\EspecieEnum;
use App\Enums\ReportesClinicos\PronosticoEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporteClinico extends Model
{
    use HasFactory;
    protected $fillable = [
        'propietario',
        'procedencia',
        'telefono',
        'especie',
        'raza',
        'sexo',
        'edad',
        'peso',
        'identificador',
        'color',
        'motivo',
        'animal_de',
        'signos_y_sintomas',
        'farmacos_anterior',
        'aparato_afectado',
        'pronostico_paciente',
        'dx_presuntivo',
        'dx_diferencial',
        'agente_etiologico',
        'examenes_complementarios',
        'dx_definitivo',
        'tratamiento',
        'proxima_cita',
        'expediente',
        'ultima_desparasitacion',
        'farmacos',
        'ultima_vacuna',
        'tipo_vacuna',
        'vitaminas',
        'paciente_cronico'
    ];
    protected $table = 'reportes_clinicos';
    // protected $casts = [
    //     'especie' => EspecieEnum::class ?? 'string',
    //     'aparato' => AparatoEnum::class ?? 'string',
    //     'pronostico_paciente' => PronosticoEnum::class ?? 'string',
    // ];
}
