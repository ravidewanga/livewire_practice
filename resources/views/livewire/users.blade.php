<div>
    <h3>Users Components</h3>

    @foreach($names as $name)
        @livewire('users-list',['user'=>$name])
    @endforeach
    
</div>
