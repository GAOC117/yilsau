<div class="flex justify-center p-5 ">

    <form action="#" class="w-full md:w-1/3 space-y-5" wire:submit.prevent="crearProducto">

        <div>
            <x-input-label for="nombre_producto" :value="__('Nombre del producto')" />
            <x-text-input id="nombre_producto" class="block mt-1 w-full" type="text" wire:model="nombre_producto"
                {{-- es vez de name = 'titulo' en livewire es wire:model = 'titulo' --}} :value="old('nombre_producto')" placeholder="Nombre del producto" />
            {{-- <x-input-error :messages="$errors->get('titulo')" class="mt-2" /> --}}
            
                @error('nombre_producto')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

       

          <div class="" x-data="{ count: 0 }" x-init="count = $refs.countme.value.length">
            <x-input-label for="descripcion" :value="__('Descripción breve del servicio')" />
            <textarea  id="descripcion" class="block mt-1 w-full" type="text" wire:model="descripcion"
                 placeholder="Descripción" x-ref="countme" x-on:keyup="count = $refs.countme.value.length" maxlength="50"></textarea>
                 <span x-html="count"></span> / <span x-html="$refs.countme.maxLength"></span>
                 
            @error('descripcion')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
       

        <div>
            <x-input-label for="costo" :value="__('Costo del producto')" />
            <x-text-input id="costo" class="block mt-1 w-full" type="number" step="0.01" wire:model="costo"
                :value="old('costo')" placeholder="Costo" />
            @error('costo')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>





        <div>
            <x-input-label for="imagen" :value="__('Imagen')" />
            <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen"
                accept="image/*" />

            <div class="my-5 w-80">
                @if ($imagen)
                    Imagen:
                    <img src="{{ $imagen->temporaryUrl() }}" alt="">
                @endif
            </div>

            @error('imagen')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

        <div class="flex justify-end">
            <x-primary-button>
                Agregar Producto
            </x-primary-button>
        </div>


    </form>
</div>
