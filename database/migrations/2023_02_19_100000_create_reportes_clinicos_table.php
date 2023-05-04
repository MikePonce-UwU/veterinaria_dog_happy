<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesClinicosTable extends Migration
{
    public function up()
    {
        Schema::create('reportes_clinicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('propietario', 125);
            $table->string('procedencia', 125);
            $table->string('telefono', 125);
            $table->string('especie', 125);
            $table->string('raza', 125);
            $table->boolean('sexo')->default(true); //0 macho, 1 hembra
            $table->integer('edad');
            $table->double('peso', 8, 2);
            $table->string('identificador', 125); //nombre del animal
            $table->string('color', 125);
            $table->string('motivo', 125);
            $table->boolean('animal_de')->default(true); //compañia, trabajo
            $table->text('signos_y_sintomas');
            $table->text('farmacos_anterior');
            $table->string('aparato_afectado', 125);
            $table->string('pronostico_paciente', 125);
            $table->text('dx_presuntivo');
            $table->text('dx_diferencial');
            $table->text('agente_etiologico');
            $table->text('examenes_complementarios');
            $table->text('dx_definitivo');
            $table->text('tratamiento');
            $table->dateTime('proxima_cita');
            $table->text('expediente');
            $table->dateTime('ultima_desparasitacion');
            $table->text('farmacos');
            $table->dateTime('ultima_vacuna');
            $table->text('tipo_vacuna');
            $table->boolean('vitaminas')->default(true); //si, no
            $table->boolean('paciente_cronico')->default(true); //si, no
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('reportes_clinicos');
    }
}
