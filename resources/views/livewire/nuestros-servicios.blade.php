<div class="pt-2 pb-3 px-5 md:px-0">
    <h1 class="color-titulo h1 pb-3">Nuestros Servicios</h1>


    <div class="row gap-4 justify-center ">
        @forelse ($servicios as $servicio)
            <div class="card pt-3 col-md-3 shadow-sm" style="">
                <img src="{{ asset('storage/servicios/' . $servicio->imagen) }}" class="card-img-top image-size img-fluid"
                    alt="{{ 'Imagen servicio ' . $servicio->nombre_servicio }}">
                <div class="card-body">
                    <h5 class="card-title color-titulo h4">{{ $servicio->nombre_servicio }}</h5>
                    <h class="card-text color-precio h5 ">${{ $servicio->costo }}</h>
                    <p class="card-text card-texto my-3">{{ $servicio->descripcion_breve }}</p>
                    <div class="d-flex flex-column gap-1">
                        <a href="{{ route('servicios.show', $servicio->id) }}" class="btn btn-yilsau">Ver más</a>
                        <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-primary">Editar</a>
                        <button wire:click = "$dispatch('mostrarAlerta',{{ $servicio->id }})"
                            class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </div>

        @empty
            <p class="p-3 text-center text-sm text-gray-400">No hay servicios aún</p>
        @endforelse
    </div>

    <div class="flex justify-center mt-10 ">
        {{ $servicios->links(data: ['scrollTo' => false]) }}
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            Livewire.on('mostrarAlerta', servicioID => {
                
                Swal.fire({
                    title: '¿Eliminar servicio?',
                    text: "Un servicio eliminado no se puede recuperar",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar servicio',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        //eliminar vacante del servidor
                        // Livewire.dispatch('eliminarVacante', {vacante: vacanteId}); ->  antes era asi
                        @this.call('eliminarServicio', servicioID);
                        Swal.fire(
                            'Eliminado correctamente',
                            'Se elimino el servicio',
                            'success'
                        )
                    }
                })

            })
        </script>
    @endpush

</div>
