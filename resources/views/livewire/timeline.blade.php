<div class="mt-10 text-primary text-lg">
    @foreach ($tweets as $tweet)
        <div class="flex p-4 border-b border-gray-300">
            {{-- <div class="mr-2">
                <img src="{{$tweet->user->avatar}}" alt="avatar" class="rounded-full mr-2" width="50" height="50">
            </div> --}}
            <div>
                <p class="text-sm p-1 mt-1">
                    {{ $tweet->body }}
                </p>
            </div>
        </div>
    @endforeach
</div>
