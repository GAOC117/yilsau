<div class="flex justify-center p-5 ">

    <form action="#" class="w-full md:w-1/3 space-y-5" wire:submit.prevent="editarProducto">

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
            <x-input-label for="descripcion" :value="__('Descripción breve del producto')" />
            <textarea  id="descripcion" class="block mt-1 w-full" type="text" wire:model="descripcion"
                 placeholder="Descripción breve" x-ref="countme"  x-init="count = $refs.countme.value.length"  x-on:keyup="count = $refs.countme.value.length" maxlength="50"></textarea>
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
            <div class="my-5 w-80">
                <x-input-label :value="__('Imagen actual')" />
                <img src="{{asset('storage/productos/' . $imagen)}}" alt="{{'Imagen producto '.$nombre_producto}}">
            </div>
    
    
            <x-input-label for="imagen" :value="__('Imagen')" />
            <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen_nueva" accept="image/*"/>
    
    
            <div class="my-5 w-80">
                @if($imagen_nueva)
                Imagen nueva:
                    <img src="{{$imagen_nueva->temporaryUrl()}}" alt="">
                @endif
            </div>
    
            @error('imagen_nueva')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

        <div class="flex justify-end">
            <x-primary-button>
                Editar Producto
            </x-primary-button>
        </div>


    </form>
</div>
