@include('common.modalHead')

<div class="row">
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Nombre del propetario</label>
            <input type="text" wire:model.lazy="propietario" class="form-control">
            @error('propietario')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-3">
        <div class="form-group">
            <label>Procedencia</label>
            <input type="text" wire:model.lazy="procedencia" class="form-control">
            @error('procedencia')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-3">
        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" wire:model.lazy="telefono" class="form-control">
            @error('telefono')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label>Especie</label>
            <select wire:model='especie' class="form-control">
                <option selected value="elegir"><-- Elegir --></option>
                <option value="canino">Canino</option>
                <option value="felino">Felino</option>
                <option value="equino">Equino</option>
                <option value="exotico">Exotico</option>
                <option value="otro">Otro</option>
            </select>
            @if ($especie_is_otro)
            <input type="text" wire:model="especie_otro" class="form-control mt-3">
            {{ $especie_otro }}
            @endif
            @error('especie')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
            {{ $especie }}
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label>Raza</label>
            <input type="text" wire:model.lazy="raza" class="form-control">
            @error('raza')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}

<style >
    :root {
    --color-green: #00e1ff;
    --color-red: #1900ff;
    --color-button: #fdffff;
    --color-black: #000;
}
.switch-button {
    display: inline-block;
}
.switch-button .switch-button__checkbox {
    display: none;
}
.switch-button .switch-button__label {
    margin-top: 5px;
    background-color: var(--color-red);
    width: 2rem;
    height: 1rem;
    border-radius: 3rem;
    display: inline-block;
    position: relative;
    margin:10px 10px -3px;
}
.switch-button .switch-button__label:before {
    transition: .2s;
    display: block;
    position: absolute;
    width: 1rem;
    height: 1rem;
    background-color: var(--color-button);
    content: '';
    border-radius: 50%;
    box-shadow: inset 0px 0px 0px 1px var(--color-black);
}
.switch-button .switch-button__checkbox:checked + .switch-button__label {
    background-color: var(--color-green);
}
.switch-button .switch-button__checkbox:checked + .switch-button__label:before {
    transform: translateX(1rem);
}

</style>

    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Sexo</label><br>
            <div class="switch-button">
                Macho <input type="checkbox" name="switch-button" id="switch-label" wire:model="sexo" class="switch-button__checkbox">
                <label for="switch-label" class="switch-button__label"></label> Hembra
            </div>
            @error('sexo')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
        
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Edad</label>
            <input type="text" wire:model.lazy="edad" class="form-control">
            @error('edad')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Peso</label>
            <input type="text" wire:model.lazy="peso" class="form-control">
            @error('peso')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Nonbre de la Mascota</label>
            <input type="text" wire:model.lazy="identificador" class="form-control">
            @error('identificador')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Color de pelaje</label>
            <input type="text" wire:model.lazy="color" class="form-control">
            @error('color')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    
    {{-- campo --}}

    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Animal de:</label><br>

            <div class="switch-button">
                Compañía <input type="checkbox" name="switch-button" id="switch-label1" wire:model="animal_de" class="switch-button__checkbox">
                <label for="switch-label1" class="switch-button__label"></label> Trabajo
            </div>
            @error('animal_de')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>      
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label>Motivo de consulta</label>
            <input type="text" wire:model.lazy="motivo" class="form-control">
            @error('motivo')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-12">
        <div class="form-group">
            <label>signos o sintomas</label>
            <input type="text" wire:model.lazy="signos_y_sintomas" class="form-control">
            @error('signos_y_sintomas')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Farmacos anteriores</label>
            <input type="text" wire:model.lazy="farmacos_anterior" class="form-control">
            @error('farmacos_anterior')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Aparato afectado</label>
            <select wire:model='aparato_afectado' class="form-control">
                <option selected value="elegir"><-- Elegir --></option>
                <option value="digestivo">Digestivo</option>
                <option value="respiratorio">Respiratorio</option>
                <option value="cardiovascular">Cardiovascular</option>
                <option value="inmunologico">Inmunológico</option>
                <option value="musculoesqueletico">Musculo Esquelético</option>
                <option value="sentidos">Órgano de los Sentidos</option>
            </select>
            @error('aparato_afectado')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Pronostico de paciente</label>
            <select wire:model='pronostico_paciente' class="form-control">
                <option selected value="elegir"><-- Elegir --></option>
                <option value="favorable">Favorable</option>
                <option value="grave">Grave</option>
                <option value="reservado">Reservado</option>
            </select>
            @error('pronostico_paciente')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>DX Presuntivo</label>
            <input type="text" wire:model.lazy="dx_presuntivo" class="form-control">
            @error('dx_presuntivo')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>DX Diferencial</label>
            <input type="text" wire:model.lazy="dx_diferencial" class="form-control">
            @error('dx_diferencial')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Agente etiológico</label>
            <input type="text" wire:model.lazy="agente_etiologico" class="form-control">
            @error('agente_etiologico')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Exámenes complementarios</label>
            <input type="text" wire:model.lazy="examenes_complementarios" class="form-control">
            @error('examenes_complementarios')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Dx Definitivo</label>
            <input type="text" wire:model.lazy="dx_definitivo" class="form-control">
            @error('dx_definitivo')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label>Tratamiento</label>
            <input type="text" wire:model.lazy="tratamiento" class="form-control">
            @error('tratamiento')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Próxima cita</label>
            <div class="form-group">
                <input type="text" wire:model="proxima_cita" class="form-control flatpickr" placeholder="Click para elegir">
            </div>
            {{-- <input type="datetime" wire:model.lazy="proxima_cita" class="form-control"> --}}
            @error('proxima_cita')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Expediente Nº</label>
            <input type="text" wire:model.lazy="expediente" class="form-control">
            @error('expediente')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Ultima desparasitación(Fecha)</label>
            <div class="form-group">
                <input type="text" wire:model="ultima_desparasitacion" class="form-control flatpickr" placeholder="Click para elegir">
            </div>
            {{-- <input type="datetime" wire:model.lazy="ultima_desparasitacion" class="form-control"> --}}
            @error('ultima_desparasitacion')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label>Fármaco</label>
            <input type="text" wire:model.lazy="farmacos" class="form-control">
            @error('farmacos')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Última vacunación (Fecha)</label>
            <div class="form-group">
                <input type="text" wire:model="ultima_vacuna" class="form-control flatpickr" placeholder="Click para elegir">
            </div>
            {{-- <input type="datetime" wire:model.lazy="ultima_vacuna" class="form-control"> --}}
            @error('ultima_vacuna')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Tipo de vacuna</label>
            <input type="text" wire:model.lazy="tipo_vacuna" class="form-control">
            @error('tipo_vacuna')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Vitaminas</label><br>
            <div class="switch-button">
                No <input type="checkbox" name="switch-button" id="switch-label2" wire:model="vitaminas" class="switch-button__checkbox">
                <label for="switch-label2" class="switch-button__label"></label> Sí
            </div>
            @error('vitaminas')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
       
    </div>
    {{-- campo --}}
    {{-- campo --}}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Paciente crónicos</label><br>
            <div class="switch-button">
                No <input type="checkbox" name="switch-button" id="switch-label3" wire:model="paciente_cronico"  class="switch-button__checkbox">
                <label for="switch-label3" class="switch-button__label"></label> Sí
            </div>
            @error('paciente_cronico')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
       
    </div>
    {{-- campo --}}
</div>
@include('common.modalFooter')
<script>
    document.addEventListener('DOMContentLoaded', function(){
        flatpickr(document.getElementsByClassName('flatpickr'),{
            enableTime: false,
            dateFormat: 'Y-m-d',
            locale: {
                firstDayofWeek: 1,
                weekdays: {
                    shorthand: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
                    longhand: [
                    "Domingo",
                    "Lunes",
                    "Martes",
                    "Miércoles",
                    "Jueves",
                    "Viernes",
                    "Sábado",
                    ],
                },
                months: {
                    shorthand: [
                    "Ene",
                    "Feb",
                    "Mar",
                    "Abr",
                    "May",
                    "Jun",
                    "Jul",
                    "Ago",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dic",
                    ],
                    longhand: [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Septiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre",
                    ],
                },

            }

        })


        //eventos
        window.livewire.on('show-modal', Msg =>{
            $('#modalDetails').modal('show')
        })
    })

    function rePrint(saleId)
    {
        window.open("print://" + saleId,  '_self').close()
    }
</script>
