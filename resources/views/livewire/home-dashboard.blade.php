<div>
<header class="imagenHero d-flex align-items-end">
 
        <div class=" text-white container">
            <h1 class="font-bold display-5 pb-5">¿Quienes somos?</h1>
            <p class="h5">En Yilsau, te ofrecemos una experiencia única de depilación con cera española. Usamos cera natural de alta calidad, cuidando tu piel mientras eliminamos el vello de manera efectiva. Nuestro enfoque personalizado y ambiente acogedor te harán sentir segura y radiante. ¡Descubre la diferencia!</p>
            <section class="container text-center">
                <h2 class="py-5 h2 text-white">¡Reserva tu cita hoy!</h2>
                <a href="{{ route('home') }}" class="btn btn-yilsau font-bold px-5">¡Contáctanos!</a>
            </section>
        </div>
  
</header>





<section class="container">

    <div>
        <h2 class="pt-5  h2 titulo-color">Nuestros Servicios</h2>
        <p class="pb-3 titulo-color ">Contamos con una amplia variedad de servicios</p>
    </div>

  
  
<div class="">
    <div id="carouselServicios" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($servicios as $index => $servicio)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/servicios/' . $servicio->imagen) }}" class="d-block image-carousel"
                        alt="...">
                    <div class="carousel-caption d-noe d-md-block">
                        <h1 class="h1">{{ $servicio->nombre_servicio }}</h1>
                        <p class="font-bold">{{ $servicio->descripcion_breve }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselServicios"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselServicios"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="py-5 flex justify-start">
        <a class="btn btn-yilsau font-bold px-5" href="{{route('servicios')}}">Ver más</a>
    </div>

</div>

</section>



<section class="container">

    <div class="flex justify-end">
        <h2 class="py-5 h2 titulo-color">Nuestros Productos</h2>
    </div>

  
  
<div class="">
    <div id="carouselProductos" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($productos as $index => $producto)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/productos/' . $producto->imagen) }}" class="d-block image-carousel"
                        alt="...">
                    <div class="carousel-caption d-noe d-md-block">
                        <h1 class="h1">{{ $producto->nombre_producto }}</h1>
                        <p class="font-bold">{{ $producto->descripcion }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProductos"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselProductos"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="py-5 flex justify-end">
        <a class="btn btn-yilsau font-bold px-5" href="{{route('productos')}}">Ver más</a>
    </div>

</div>

</section>

<footer class="bg-dark text-white text-center py-4">
    <div>
        <p>Síguenos en nuestras redes sociales</p>
        <div class="flex justify-center gap-2">
            <a href="https://www.instagram.com/yilsau_/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
            
        </div>
    </div>
    <div>
        <p>&copy; {{ date('Y') }} Yilsau. Todos los derechos reservados.</p>
    </div>
</footer>

</div>