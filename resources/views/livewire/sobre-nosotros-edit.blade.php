<div class="flex justify-center p-5 ">

    <form action="#" class="w-full md:w-1/3 space-y-5" wire:submit.prevent="editarNosotros">





        <div class="" x-data="{ count: 0 }" x-init="count = $refs.countme.value.length">
            <x-input-label for="sobre_nosotros" :value="__('Sobre Nosotros')" />
            <textarea id="sobre_nosotros" class="block mt-1 w-full" type="text" wire:model="sobre_nosotros"
                placeholder="Sobre Nosotros" x-ref="countme" x-init="count = $refs.countme.value.length" x-on:keyup="count = $refs.countme.value.length"
                maxlength="200"></textarea>
            <span x-html="count"></span> / <span x-html="$refs.countme.maxLength"></span>

            @error('sobre_nosotros')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

        <div class="" x-data="{ count: 0 }" x-init="count = $refs.countme.value.length">
            <x-input-label for="mision" :value="__('Misión')" />
            <textarea id="mision" class="block mt-1 w-full" type="text" wire:model="mision" placeholder="Misión"
                x-ref="countme" x-init="count = $refs.countme.value.length" x-on:keyup="count = $refs.countme.value.length" maxlength="200"></textarea>
            <span x-html="count"></span> / <span x-html="$refs.countme.maxLength"></span>

            @error('mision')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

        <div class="" x-data="{ count: 0 }" x-init="count = $refs.countme.value.length">
            <x-input-label for="vision" :value="__('Visión')" />
            <textarea id="vision" class="block mt-1 w-full" type="text" wire:model="vision" placeholder="Visión"
                x-ref="countme" x-init="count = $refs.countme.value.length" x-on:keyup="count = $refs.countme.value.length" maxlength="200"></textarea>
            <span x-html="count"></span> / <span x-html="$refs.countme.maxLength"></span>

            @error('vision')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>










        <div class="flex justify-end">
            <x-primary-button>
                Editar Sobre Nosotros
            </x-primary-button>
        </div>


    </form>
</div>
