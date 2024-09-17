<x-app-layout>
    @if (session()->has('mensaje'))
        {{-- se incluye para eliminar el mensaje en un determinado tiempo --}}
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
            class="text-sm uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3">
            {{ session('mensaje') }}
        </div>
    @endif
    <a href="{{ route('productos.create') }}" class="btn btn-success mt-2 ms-2">Agregar nuevo producto</a>
    <livewire:listado-productos>    
</x-app-layout>
