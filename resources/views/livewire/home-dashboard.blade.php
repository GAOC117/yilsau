<div>
<header class="imagenHero d-flex align-items-end">
 
        <div class=" text-white container">
            <h1 class="font-bold display-5 pb-5 animate-fadeIn">¿Quienes somos?</h1>

            <p class="h5">En Yilsau, te ofrecemos una experiencia única de depilación con cera española. Usamos cera natural de alta calidad, cuidando tu piel mientras eliminamos el vello de manera efectiva. Nuestro enfoque personalizado y ambiente acogedor te harán sentir segura y radiante. ¡Descubre la diferencia!</p>
            <section class="container text-center">
                <h2 class="py-5 h2 text-white">¡Reserva tu cita hoy!</h2>
                <a href="{{ route('contacto') }}" class="btn btn-yilsau font-bold px-5 hover:scale-105 transition-transform duration-300">¡Contáctanos!</a>

            </section>
        </div>
  
</header>

<section class="container py-5">
    <h2 class="h2 titulo-color text-center mb-5">Testimonios de Nuestros Clientes</h2>
    
    <div id="carouselTestimonios" class="carousel slide mx-auto shadow-lg" data-bs-ride="carousel" style="max-width: 700px;">
        <div class="carousel-inner p-4 bg-light rounded">
            <div class="carousel-item active">
                <p class="fst-italic h5 text-center">"Excelente servicio, me encantó la atención y el resultado."</p>
                <p class="text-end fw-bold">- Ana M.</p>
            </div>
            <div class="carousel-item">
                <p class="fst-italic h5 text-center">"Un lugar acogedor y con resultados perfectos."</p>
                <p class="text-end fw-bold">- Juan P.</p>
            </div>
            <div class="carousel-item">
                <p class="fst-italic h5 text-center">"Definitivamente volveré, me sentí muy cómoda."</p>
                <p class="text-end fw-bold">- Carla R.</p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonios" data-bs-slide="prev" style="margin-top: -50px;">
            <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonios" data-bs-slide="next" style="margin-top: -50px;">
            <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>



<section class="container py-5">
    <h2 class="h2 titulo-color text-center mb-4">Preguntas Frecuentes</h2>
    <div class="accordion" id="faqAccordion">
        <div class="accordion-item shadow-md mb-3">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    ¿Cómo agendo una cita?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Puedes agendar una cita fácilmente a través de nuestra página de 
                    <a href="{{ route('contacto') }}" class="font-bold fs-6 text-blue-800 underline hover:text-blue-600 transition duration-200">contacto</a>.
                </div>
            </div>
        </div>
        <div class="accordion-item shadow-md mb-3">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Cuáles son los métodos de pago?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Aceptamos pagos con efectivo así como transferencias bancarias.
                </div>
            </div>
        </div>
        <div class="accordion-item shadow-md mb-3">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Puedo cancelar o reprogramar mi cita?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Sí, puedes cancelar o reprogramar tu cita hasta 24 horas antes sin costo adicional. Solo necesitas contactarnos.
                </div>
            </div>
        </div>
        <div class="accordion-item shadow-md mb-3">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    ¿Ofrecen promociones o descuentos?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Sí, ofrecemos promociones especiales durante ciertos períodos del año. Te recomendamos seguirnos en redes sociales para estar al tanto de las últimas ofertas.
                </div>
            </div>
        </div>
    </div>
</section>



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



</div>