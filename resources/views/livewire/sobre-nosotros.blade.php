<div class="row px-5  min-h-screen ">
   
    <div class="flex justify-center mt-5 col-md-12">
        <div class="card boder border-white border-8 shadow-md" style="width: 40rem;">
            <img src="{{ asset('storage/imagenes/ceraNosotros.jpg') }}" class="card-img" alt="imagen depilando">
            <div class="card-body">
                <h5 class="card-title fs-1 font-bold">Sobre Nosotros</h5>
                <p class="card-text">{{ $nosotros->sobre_nosotros }} </p>

            </div>
        </div>
    </div>
    <div class="flex justify-center flex-column flex-md-row my-5 gap-4 gap-md-0">
        <div class="flex justify-center col-md-4 ">
            <div class="card boder border-white border-8 shadow-md" style="width: 18rem;">
                <img src="{{ asset('storage/imagenes/mision.png') }}" class="card-img" alt="imagen mision">
                <div class="card-body">
                    <h5 class="card-title fs-1 font-bold">Misión</h5>
                    <p class="card-text">{{ $nosotros->mision }} </p>

                </div>
            </div>
        </div>
        <div class="col-md-4 flex justify-center ">
            <div class="card boder border-white border-8 shadow-md" style="width: 18rem;">
                <img src="{{ asset('storage/imagenes/vision.png') }}" class="card-img" alt="imagen vision">
                <div class="card-body">
                    <h5 class="card-title fs-1 font-bold">Visión</h5>
                    <p class="card-text">{{ $nosotros->vision }} </p>

                </div>
            </div>
        </div>
    </div>

</div>
