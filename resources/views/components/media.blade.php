<div class="container w-full mx-auto px-0 flex flex-col justify-between h-full">
    @if(count($media) > 0)
        <div class="grid lg:grid-flow-col grid-flow-row gap-5 items-center justify-between">
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 items-center justify-between w-full">
                @foreach($media as $article)
                    <a href="/media/{{$article['id']}}" class="max-w-[360px] h-full min-h-[337px] bg-cover bg-center grid grid-rows-[200px_minmax(100px,_1fr)]">
                        <div class="h-full max-h-[200px] bg-[#c1c1c1]">
                            <img class="relative object-cover object-top w-full h-full" src="/storage/{{$article['image']}}" />
                        </div>
                        <div class="p-4 bg-white h-full border-rounded flex flex-col min-h-[200px] justify-between">
                            <h2 class="text-[18px] text-[#4F525F]">{{$article['title']}}</h2>
                            <p class="text-[16px] text-[#88888A]">{{$article['created_at']}}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
</div>
