<div class="flex justify-center p-5 ">

    <form action="#" class="w-full md:w-1/3 space-y-5" wire:submit.prevent="crearServicio">

        <div>
            <x-input-label for="nombre_servicio" :value="__('Nombre del servicio')" />
            <x-text-input id="nombre_servicio" class="block mt-1 w-full" type="text" wire:model="nombre_servicio"
                {{-- es vez de name = 'titulo' en livewire es wire:model = 'titulo' --}} :value="old('nombre_servicio')" placeholder="Nombre del servicio" />
            {{-- <x-input-error :messages="$errors->get('titulo')" class="mt-2" /> --}}
            
                @error('nombre_servicio')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

        <div class="" x-data="{ count: 0 }" x-init="count = $refs.countme.value.length">
            <textarea name="body" class="char-limiter" rows="3" maxlength="280" x-ref="countme" x-on:keyup="count = $refs.countme.value.length"></textarea>
          
            <div class="">
              <span x-html="count"></span> / <span x-html="$refs.countme.maxLength"></span>
            </div>
          </div>

        <div x-data="{ count: 0 }" x-init="count = $refs.countme.value.length">
            <x-input-label for="descripcion_breve" :value="__('Descripción breve del servicio')" />
            <textarea id="descripcion_breve" class="block mt-1 w-full" type="text" wire:model="descripcion_breve"
                 placeholder="Descripción breve" x-on:keyup="count = $refs.countme.value.length" maxlength="50"></textarea>
                 <span x-html="count"></span> / <span x-html="$refs.countme.maxLength"></span>
                 <p>{{$caracteres}}/50</p>
            @error('descripcion_breve')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
        <div>
            <x-input-label for="descripcion_completa" :value="__('Descripción completa del servicio')" />
            <textarea id="descripcion_completa" class="block mt-1 w-full" type="text" wire:model="descripcion_completa"
                 placeholder="Descripción completa"></textarea>
            @error('descripcion_completa')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

        <div>
            <x-input-label for="costo" :value="__('Costo del servicio')" />
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
                Crear Servicio
            </x-primary-button>
        </div>


    </form>
</div>
