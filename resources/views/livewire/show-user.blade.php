<div>
    <h1>{{ $name }}</h1>
    
    <x-input type="text" wire:model="name" />
    <x-button wire:click="updateName">Update Name</x-button>
</div>
