<div>
    <form wire:submit="save" class="mb-4">
        <x-input type="text" wire:model="pais" />
        <x-button>Guardar</x-button>
    </form>
    
    <ul>
        @foreach($paises as $index => $pais)
            <li class="mb-4" wire:key="pais-{{$index}}">
                {{$pais}}
                <x-danger-button wire:click="delete({{$index}})">x</x-danger-button>
            </li>
        @endforeach
    </ul>
</div>
