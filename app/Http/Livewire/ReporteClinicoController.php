<?php

namespace App\Http\Livewire;

use App\Models\ReporteClinico;
use Livewire\Component;

class ReporteClinicoController extends Component
{

    public $propietario, $procedencia, $telefono, $especie, $raza, $sexo = 0, $edad, $peso, $identificador, $color, $motivo, $animal_de = 0, $signos_y_sintomas, $farmacos_anterior, $aparato_afectado, $pronostico_paciente, $dx_presuntivo, $dx_diferencial, $agente_etiologico, $examenes_complementarios, $dx_definitivo, $tratamiento, $proxima_cita, $expediente, $ultima_desparasitacion, $farmacos, $ultima_vacuna, $tipo_vacuna, $vitaminas = 0, $paciente_cronico = 0,$selected_id, $pageTitle, $componentName;
    public $especie_is_otro;
    public $especie_otro;
    public function Store()
    {
        $this->validate([
            'propietario' => 'required|min:5|max:125',
            'procedencia' => 'required|min:1|max:125',
            'telefono' => 'required|min:1|max:125',
            'especie' => 'required|min:5|max:125|in:canino,felino,equino,exotico,otro',
            'raza' => 'required|min:5|max:125',
            'sexo' => 'required',
            'edad' => 'required|integer',
            'peso' => 'required|numeric',
            'identificador' => 'required|min:3|max:125',
            'color' => 'required|min:4|max:125',
            'motivo' => 'required|min:3|max:125',
            'animal_de' => 'required',
            'signos_y_sintomas' => 'required|min:3|max:125',
            'farmacos_anterior' => 'required|min:3|max:125',
            'aparato_afectado' => 'required|min:3|max:125|in:digestivo,respiratorio,cardiovascular,inmunologico,musculoesqueletico,sentidos',
            'pronostico_paciente' => 'required|min:3|max:125|in:favorable,grave,reservado',
            'dx_presuntivo' => 'required|min:1|max:125',
            'dx_diferencial' => 'required|min:1|max:125',
            'agente_etiologico' => 'required|min:1|max:125',
            'examenes_complementarios' => 'required|min:1|max:125',
            'dx_definitivo' => 'required|min:1|max:125',
            'tratamiento' => 'required|min:4|max:125',
            'proxima_cita' => 'required|date',
            'expediente' => 'required|min:1|max:125',
            'ultima_desparasitacion' => 'required|date',
            'farmacos' => 'required|min:1|max:125',
            'ultima_vacuna' => 'required|date',
            'tipo_vacuna' => 'required|min:1|max:125',
            'vitaminas' => 'required',
            'paciente_cronico' => 'required'
        ]);
        $nuevo = ReporteClinico::create([
            'propietario' => $this->propietario,
            'procedencia' => $this->procedencia,
            'telefono' => $this->telefono,
            'especie' => $this->especie_is_otro ? $this->especie_otro : $this->especie,
            'raza' => $this->raza,
            'sexo' => $this->sexo,
            'edad' => $this->edad,
            'peso' =>  $this->peso,
            'identificador' => $this->identificador,
            'color' => $this->color,
            'motivo' => $this->motivo,
            'animal_de' =>  $this->animal_de,
            'signos_y_sintomas' => $this->signos_y_sintomas,
            'farmacos_anterior' => $this->farmacos_anterior,
            'aparato_afectado' => $this->aparato_afectado,
            'pronostico_paciente' => $this->pronostico_paciente,
            'dx_presuntivo' => $this->dx_presuntivo,
            'dx_diferencial' => $this->dx_diferencial,
            'agente_etiologico' => $this->agente_etiologico,
            'examenes_complementarios' => $this->examenes_complementarios,
            'dx_definitivo' => $this->dx_definitivo,
            'tratamiento' => $this->tratamiento,
            'proxima_cita' => $this->proxima_cita,
            'expediente' => $this->expediente,
            'ultima_desparasitacion' => $this->ultima_desparasitacion,
            'farmacos' => $this->farmacos,
            'ultima_vacuna' => $this->ultima_vacuna,
            'tipo_vacuna' => $this->tipo_vacuna,
            'vitaminas' => $this->vitaminas,
            'paciente_cronico' => $this->paciente_cronico
        ]);
       $nuevo->save();
        $this->resetUI();
        $this->emit('reporte-added', 'Nuevo reporte clinico ha sido creado  ');

    }
    public function updatedEspecie()
    {
        if ($this->especie == 'otro') {
            $this->especie_is_otro = true;
            $this->reset('especie_otro');
        } else {
            $this->especie_is_otro = false;
            $this->reset('especie_otro');
        }
    }
    public function mount()
	{
		$this->pageTitle = 'Listado';
		$this->componentName = 'Reporte Clinico';
		
	}
    public function updatedSexo($value)
    {
        // dd($value);
        if ($value) {
            $this->sexo = 1;
        } else {
            $this->sexo = 0;
        }
    }
    
    public function updatedAnimalDe($value)
    {
        // dd($value);
        if ($value) {
            $this->animal_de = 1;
        } else {
            $this->animal_de = 0;
        }
    }
    public function render()
    {
        return view('livewire.reporte-clinico.controller', ['reportes' => ReporteClinico::paginate(5)])->extends('layouts.theme.app')->section('content');
    }
    public function resetUI()
    {
        $this->reset(
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
        );
        $this->resetValidation();
    }
    public function Edit(ReporteClinico $reporteclinico)
	{
		$this->selected_id = $reporteclinico->id;
		$this->propietario= $reporteclinico->propietario;
		$this->procedencia= $reporteclinico->procedencia;
		$this->telefono= $reporteclinico->telefono;
		$this->especie= $reporteclinico->especie;
		$this->raza= $reporteclinico->raza;
		$this->sexo= $reporteclinico->sexo;
		$this->edad= $reporteclinico->edad;
		$this->peso= $reporteclinico->peso;
		$this->identificador= $reporteclinico->identificador;
		$this->color= $reporteclinico->color;
		$this->motivo= $reporteclinico->motivo;
		$this->animal_de= $reporteclinico->animal_de;
		$this->signos_y_sintomas= $reporteclinico->signos_y_sintomas;
		$this->farmacos_anterior= $reporteclinico->farmacos_anterior;
		$this->aparato_afectado= $reporteclinico->aparato_afectado;
		$this->pronostico_paciente= $reporteclinico->pronostico_paciente;
		$this->dx_presuntivo= $reporteclinico->dx_presuntivo;
		$this->dx_diferencial= $reporteclinico->dx_diferencial;
		$this->agente_etiologico= $reporteclinico->agente_etiologico;
		$this->examenes_complementarios= $reporteclinico->examenes_complementarios;
		$this->dx_definitivo= $reporteclinico->dx_definitivo;
		$this->tratamiento= $reporteclinico->tratamiento;
		$this->proxima_cita= $reporteclinico->proxima_cita;
		$this->expediente= $reporteclinico->expediente;
		$this->ultima_desparasitacion= $reporteclinico->ultima_desparasitacion;
		$this->farmacos= $reporteclinico->farmacos;
		$this->ultima_vacuna= $reporteclinico->ultima_vacuna;
		$this->tipo_vacuna= $reporteclinico->tipo_vacuna;
		$this->vitaminas= $reporteclinico->vitaminas;
		$this->paciente_cronico= $reporteclinico->paciente_cronico;
        

		$this->emit('modal-show', 'Show modal');
	}
    public function Destroy(ReporteClinico $reporteClinico)
	{
		
		$reporteClinico->delete();		
		$this->resetUI();
		$this->emit('reporteClinico-deleted', 'Reporte Eliminado');
	}
    protected $listeners = [
		'deleteRow' => 'Destroy'
	];
    public function Update()
	{
		
		$reporteClinico = ReporteClinico::find($this->selected_id);

		$reporteClinico->update([
			'propietario' => $this->propietario,
            'procedencia' => $this->procedencia,
            'telefono' => $this->telefono,
            'especie' => $this->especie_is_otro ? $this->especie_otro : $this->especie,
            'raza' => $this->raza,
            'sexo' => $this->sexo,
            'edad' => $this->edad,
            'peso' =>  $this->peso,
            'identificador' => $this->identificador,
            'color' => $this->color,
            'motivo' => $this->motivo,
            'animal_de' =>  $this->animal_de,
            'signos_y_sintomas' => $this->signos_y_sintomas,
            'farmacos_anterior' => $this->farmacos_anterior,
            'aparato_afectado' => $this->aparato_afectado,
            'pronostico_paciente' => $this->pronostico_paciente,
            'dx_presuntivo' => $this->dx_presuntivo,
            'dx_diferencial' => $this->dx_diferencial,
            'agente_etiologico' => $this->agente_etiologico,
            'examenes_complementarios' => $this->examenes_complementarios,
            'dx_definitivo' => $this->dx_definitivo,
            'tratamiento' => $this->tratamiento,
            'proxima_cita' => $this->proxima_cita,
            'expediente' => $this->expediente,
            'ultima_desparasitacion' => $this->ultima_desparasitacion,
            'farmacos' => $this->farmacos,
            'ultima_vacuna' => $this->ultima_vacuna,
            'tipo_vacuna' => $this->tipo_vacuna,
            'vitaminas' => $this->vitaminas,
            'paciente_cronico' => $this->paciente_cronico
		]);

		

		$this->resetUI();
		$this->emit('product-updated', 'Producto Actualizado');
	}

}
