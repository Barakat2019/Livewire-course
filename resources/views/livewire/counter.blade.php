<div>
    {{-- The Master doesn't talk, he acts. --}}
    <h1>Counter Component</h1>
    <h3>{{$count}}</h3>
    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
    <hr>
    <input type="text" wire:model.debounce.500ms="name">
    {{$name}}
</div>
