<x-app-layout>

  

  
  
  <div class="flex justify-center">
  <div class="card servicio-card my-5 justify-center flex">
        <h1 class="my-3">{{$servicio->nombre_servicio}}</h1>
        <img src="{{asset('storage/servicios/'  . $servicio->imagen)}}" alt="{{'Imagen servicio '. $servicio->nombre_servicio }}">
        <div class="card-body">
        
          <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         
        </div>
      </div>
    </div>
 
</x-app-layout>