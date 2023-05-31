<div class="mt-10 text-primary text-lg">
    <button wire:click="loadMore" class="bg-white border p-2 rounded-md">Load More</button>
    @foreach ($tweets as $tweet)
        <div class="flex p-4 border-b border-gray-300 dark:text-white">
            {{-- <div class="mr-2">
                <img src="{{$tweet->user->avatar}}" alt="avatar" class="rounded-full mr-2" width="50" height="50">
            </div> --}}
            <div>
                <p class="text-sm p-1 mt-1">
                   {{$loop->index +1 }}) {{ $tweet->body }}
                </p>
            </div>
        </div>
    @endforeach
    <div class="bg-blue-400 h-10 w-10" x-data="{
            infinityScrool() {
                const observer = new IntersectionObserver((items)=>{
                    {{-- console.log({observerItems: items}); --}}
                    items.forEach((item)=>{
                        if(item.isIntersecting){
                            @this.loadMore();
                            console.log('Buscando mais tweets...')
                        }
                    });
                }, {
                    threshold:0.5,
                    rootMargin: '200px'
                });
                observer.observe(this.$el)
            }
        }" x-init="infinityScrool()">
    </div>
</div>
