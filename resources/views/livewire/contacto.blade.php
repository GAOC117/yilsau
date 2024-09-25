<div class="container mt-5 pt-5 flex flex-column">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h2 class="text-center mb-4 fs-4 titulo-color">¿Quieres más información? Contáctanos</h2>

    <form wire:submit.prevent="enviar" class="container w-50 p-4 rounded">
        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-10">
                <input type="text" id="nombre" wire:model="nombre" class="form-control">
                @error('nombre')   <livewire:mostrar-alerta :message="$message" /> @enderror
            </div>
        </div>
    
        <div class="mb-3 row">
            <label for="correo" class="col-sm-2 col-form-label">Correo:</label>
            <div class="col-sm-10">
                <input type="email" id="correo" wire:model="correo" class="form-control">
                @error('correo')   <livewire:mostrar-alerta :message="$message" />@enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
            <div class="col-sm-10">
                <input type="tel" id="telefono" wire:model="telefono" class="form-control">
                @error('telefono')   <livewire:mostrar-alerta :message="$message" />@enderror
            </div>
        </div>
    
        <div class="mb-3 row">
            <label for="mensaje" class="col-sm-2 col-form-label">Mensaje:</label>
            <div class="col-sm-10">
                <textarea id="mensaje" wire:model="mensaje" class="form-control"></textarea>
                @error('mensaje')  <livewire:mostrar-alerta :message="$message" /> @enderror
            </div>
        </div>
    
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-yilsau">Enviar Correo</button>
        </div>
    </form>
    
    {{-- <form wire:submit.prevent="enviar">
        <div>
        <div class="flex flex-column">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" wire:model="nombre">
            @error('nombre') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" wire:model="correo">
            @error('correo') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" wire:model="mensaje"></textarea>
            @error('mensaje') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

        <button type="submit">Enviar Correo</button>
    </form> --}}
</div>
