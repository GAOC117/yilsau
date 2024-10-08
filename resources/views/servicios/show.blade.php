<x-app-layout>


    <div class="px-5 flex flex-col items-center py-4 mt-4">

        <div class="card-superior shadow-2xl bg-white">
            <div class="card-titulo ">
                <h1 class="my-3 text-center display-6 titulo-color ">{{ $servicio->nombre_servicio }}</h1>
            </div>
            <div class="card-imagen ">
                <img class="img-fluid" src="{{ asset('storage/servicios/' . $servicio->imagen) }}">
            </div>
        </div>

        <div class="card-inferior shadow-2xl  bg-white">
            <div class="card-precio">
                <p class=" mb-2 fs-4 color-precio">${{ $servicio->costo }}</p>
            </div>
            <div class="card-descripcion">
                <p class="">{{ $servicio->descripcion_completa }}</p>
            </div>
        </div>

    </div>

</x-app-layout>
