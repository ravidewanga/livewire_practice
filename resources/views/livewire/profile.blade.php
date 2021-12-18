<div>
    {{$name}}

    <h3>{{$counter}}</h3>
    <button wire:click="updateName('Ravikant')">update name</button>

    <input type="text" wire:model="name"/>
</div>
