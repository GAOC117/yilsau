<x-app-layout>


    <div class="px-5 flex flex-col items-center py-4 mt-4">

        <div class="card-superior shadow-2xl bg-white">
            <div class="card-titulo ">
                <h1 class="my-3 text-center display-6 titulo-color ">{{ $producto->nombre_producto }}</h1>
            </div>
            <div class="card-imagen ">
                <img class="img-fluid" src="{{ asset('storage/productos/' . $producto->imagen) }}">
            </div>
        </div>

        <div class="card-inferior shadow-2xl  bg-white">
            <div class="card-precio">
                <p class=" mb-2 fs-4 color-precio">${{ $producto->costo }}</p>
            </div>
            <div class="card-descripcion">
                <p class="">{{ $producto->descripcion }}</p>
            </div>
        </div>

    </div>

</x-app-layout>
