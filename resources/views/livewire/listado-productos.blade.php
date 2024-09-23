<div class="pt-2 pb-3 px-5 md:px-0">
    <h1 class="color-titulo h1 pb-3">Nuestros Productos</h1>

    <div class="row gap-3 justify-center ">
        @forelse ($productos as $producto)
            <div class="card card-producto pt-3 col-md-3 shadow-sm" style="">
                <img src="{{ asset('storage/productos/' . $producto->imagen) }}" class="card-img-top image-size-producto img-fluid"
                    alt="{{ 'Imagen producto ' . $producto->nombre_producto }}">
                <div class="card-body">
                    <h5 class="card-title color-titulo h4">{{ $producto->nombre_producto }}</h5>
                    <h class="card-text color-precio h5 ">${{number_format($producto->costo,2,'.',',') }}</h>
                    <p class="card-text card-texto-producto my-3">{{ $producto->descripcion}}</p>
                    <div class="d-flex flex-column gap-1">
                        <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-yilsau">Ver más</a>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar</a>
                        <button wire:click = "$dispatch('mostrarAlerta',{{ $producto->id }})"
                            class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </div>

        @empty
            <p class="p-3 text-center text-sm text-gray-400">No hay productos aún</p>
        @endforelse
    </div>

    <div class="flex justify-center mt-10 ">
        {{ $productos->links(data: ['scrollTo' => false]) }}
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            Livewire.on('mostrarAlerta', productoID => {
                
                Swal.fire({
                    title: '¿Eliminar producto?',
                    text: "Un producto eliminado no se puede recuperar",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar producto',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        //eliminar vacante del servidor
                        // Livewire.dispatch('eliminarVacante', {vacante: vacanteId}); ->  antes era asi
                        @this.call('eliminarProducto', productoID);
                        Swal.fire(
                            'Eliminado correctamente',
                            'Se elimino el producto',
                            'success'
                        )
                    }
                })

            })
        </script>
    @endpush

</div>
