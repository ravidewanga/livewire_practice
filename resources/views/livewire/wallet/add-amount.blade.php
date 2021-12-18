<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <input type="text" wire:model="amount" />


    <div wire:loading wire:target="amount">
        Updating quantity...
    </div>
    {{$amount}}
</div>