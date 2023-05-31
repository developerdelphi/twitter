@props(['route', 'icon', 'title'])
<a href="{{ $route }}"
    class="bg-transparent hover:bg-slate-200 hover:bg-opacity-20 p-2 pr-6 flex flex-grow rounded-full">
    <div class="flex items-center space-x-2">
        <span>
            <x-dynamic-component :component="'icons.' . $icon" />
        </span>
        <span class="font-bold text-lg">{{ $title }}</span>
    </div>
</a>
