<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <!-- <input type="text" wire:model="amount" /> -->
    <form>
    <input type="text" wire:model.debounce.1000ms="amount" />

    <div wire:loading wire:target="amount">
        Updating quantity...
    </div>
    <input type="submit" value="Add Money {{$amount}}" />
    </form>

    <br/>
    <br/>
    <br/>

    {{$msg}}
    <button wire:click="updateMessage('Ravikant Dewangan')">Update Message</button>
</div>
