<x-app-layout>

 
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset('storage/servicios/' . $servicio->imagen)}}" alt="{{'Imagen servicio '. $servicio->nombre_servicio }}" class="img-fluid image-size-show rounded-start">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$servicio->nombre_servicio}}</h5>
              <p class="card-text">{{$servicio->descripcion_completa}}</p>
              <p class="card-text">${{$servicio->costo}}</p>
            </div>
          </div>
        </div>
      </div>

 
</x-app-layout>