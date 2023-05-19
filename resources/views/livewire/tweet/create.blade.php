<div>
    <div>
        <textarea wire:model="body" placeholder="Whats up"></textarea>
        @error('body')
            <span>{{$message}}</span>
        @enderror
    </div>
    <x-primary-button wire:click="tweet">Tweet</x-primary-button>
</div>
