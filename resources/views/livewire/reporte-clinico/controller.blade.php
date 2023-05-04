<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{$componentName}} | {{$pageTitle}}</b>
                </h4>
                <ul class="tabs tab-pills">
                    <li>
                        <a href="javascript:void(0)" class="tabmenu bg-dark" data-toggle="modal"
                            data-target="#theModal">Agregar</a>
                    </li>
                </ul>
            </div>
            @can('Report_Search')
			@include('common.searchbox')
			@endcan
            <div class="widget-content">

                <div class="table-responsive">
                    <table class="table table-bordered table striped mt-1">
                        <thead class="text-white" style="background: #3B3F5C;">
                            <tr>
                                <th class="table-th text-white">N° Expediente</th>
                                <th class="table-th text-white text-center">Fecha de cita</th>
                                <th class="table-th text-white text-center">Propietario</th>
                                <th class="table-th text-white text-center">Nombre de la mascota</th>
                                <th class="table-th text-white text-center">Especie</th>
                                <th class="table-th text-white text-center">Raza</th>
                                <th class="table-th text-white text-center">Próxima cita</th>
                                <th class="table-th text-white text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reportes as $reporte)
                            <tr>
                                <td>
                                    <h6 class="text-left">{{ $reporte->expediente }}</h6>
                                </td>
                                <td>
                                    <h6 class="text-center">{{ $reporte->created_at }}</h6>
                                </td>
                                <td>
                                    <h6 class="text-center">{{ $reporte->propietario }}</h6>
                                </td>
                                <td>
                                    <h6 class="text-center">{{ $reporte->identificador }}</h6>
                                </td>
                                <td>
                                    <h6 class="text-center">{{ $reporte->especie }}</h6>
                                </td>
                                <td>
                                    <h6 class="text-center">{{ $reporte->raza }}</h6>
                                </td>
                                <td>
                                    <h6 class="text-center">{{ $reporte->proxima_cita }}</h6>
                                </td>

                                
                                <td class="text-center">
                                   <a href="javascript:void(0)" wire:click.prevent="Edit({{ $reporte->id }})"
                                        class="btn btn-dark mtmobile" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    
                                    <a href="javascript:void(0)" onclick="Confirm('{{ $reporte->id }}')"
                                        class="btn btn-dark" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                   
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $reportes->links('vendor.livewire.bootstrap') }}
                </div>

            </div>


        </div>


    </div>

    @include('livewire.reporte-clinico.form')
    <script>
    document.addEventListener('DOMContentLoaded', function() {

        window.livewire.on('reporte-added', msg => {
            $('#theModal').modal('hide');
            noty(msg);
        });
        window.livewire.on('reporte-updated', msg => {
			$('#theModal').modal('hide')
		});
		window.livewire.on('reporte-deleted', msg => {
			// noty
		});
        window.livewire.on('modal-show', msg => {
			$('#theModal').modal('show')
		});
		window.livewire.on('modal-hide', msg => {
			$('#theModal').modal('hide')
		});
		window.livewire.on('hidden.bs.modal', msg => {
			$('.er').css('display', 'none')			
		});
		$('#theModal').on('hidden.bs.modal', function(e) {
			$('.er').css('display', 'none')
		})
		$('#theModal').on('shown.bs.modal', function(e) {
			$('.product-name').focus()
		})



    });

    function Confirm(id) {

swal({
    title: 'CONFIRMAR',
    text: '¿CONFIRMAS ELIMINAR EL REGISTRO?',
    type: 'warning',
    showCancelButton: true,
    cancelButtonText: 'Cerrar',
    cancelButtonColor: '#fff',
    confirmButtonColor: '#3B3F5C',
    confirmButtonText: 'Aceptar'
}).then(function(result) {
    if (result.value) {
        window.livewire.emit('deleteRow', id)
        swal.close()
    }

})
}
    </script>
   

</div>