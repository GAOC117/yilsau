<x-app-layout>


<div class="px-5 flex flex-col items-center py-4 mt-4">
 
  <div class="card-superior shadow-2xl bg-white  flex flex-col ">
    <div class="card-titulo ">
      <h1 class="my-3 text-center display-6 titulo-color ">{{ $servicio->nombre_servicio }}</h1>
    </div>
    <div class="card-imagen ">
       <img class="img-fluid" src="{{ asset('storage/servicios/' . $servicio->imagen) }}">
    </div>
  </div>
  
  <div class="card-inferior shadow-2xl flex flex-col bg-white">
    <div class="card-precio">
      <p class=" mb-2 fs-4 color-precio">${{ $servicio->costo }}</p>
    </div>
    <div class="card-descripcion">
      <p class="">{{ $servicio->descripcion_completa }}</p>
    </div>
  </div>

</div>

    {{-- <div class="flex justify-center items-center  h-screen ">

        <div class="flex  justify-center flex-column px-3 md:px-0 w-imagen-servicio ">
            <div class="card-superior w-100 md:rounded-2xl card  justify-center flex md:shadow-2xl">
                <h1 class="my-3 text-center display-6 titulo-color ">{{ $servicio->nombre_servicio }}</h1>
                <img class="img-fluid rounded-b-2xl " src="{{ asset('storage/servicios/' . $servicio->imagen) }}"
                    alt="{{ 'Imagen servicio ' . $servicio->nombre_servicio }}">

            </div>
            <div class="card-body  bg-white  z-10  w-servicio md:shadow-2xl">

                <h6 class="card-subtitle mb-2 fs-4 color-precio">${{ $servicio->costo }}</h6>
                <p class="">{{ $servicio->descripcion_completa }}</p>

            </div>
        </div>
    </div> --}}

</x-app-layout>
