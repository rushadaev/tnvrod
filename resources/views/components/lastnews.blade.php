<div class="container max-w-[1250px] mt-20 mx-auto px-4 flex flex-col justify-between h-full">
    <div class="w-full px-5 lg:px-14">
        <h1 class="text-[32px] text-center lg:text-left text-[#4F525F] my-4 font-bold">ДРУГИЕ НОВОСТИ</h1>
    </div>
    @if(count($news) > 0)
    <div class="grid lg:grid-flow-col grid-flow-row gap-5 items-center justify-between">
        <button class="text-4xl hidden lg:block"><span class="material-icons text-[36px] text-[#949598] ml-2">arrow_back_ios</span></button>
        <div class="flex lg:flex-row flex-col gap-5 items-center justify-between">
        @foreach($news as $article)
        <a href="/articles/{{$article->id}}" class="w-[360px] w-full h-full min-h-[337px] bg-cover bg-center grid grid-rows-[200px_minmax(100px,_1fr)]">
            <div class="h-full max-h-[200px] bg-[#c1c1c1]">
                <img class="relative object-cover object-top w-full h-full" src="{{$article->image}}" />
            </div>
            <div class="p-4 bg-white h-full border-rounded flex flex-col min-h-[200px] justify-between">
                <h2 class="text-[18px] text-[#4F525F]">{{$article->title}}</h2>
                <p class="text-[16px] text-[#88888A]">{{$article->created}}</p>
            </div>
        </a>
        @endforeach
        </div>
        <button class="text-4xl hidden lg:block"><span class="material-icons text-[#949598] text-[36px] ml-2">arrow_forward_ios</span></button>
    </div>
    <div class="w-full px-[10px] lg:px-14 flex justify-center lg:justify-end">
        <a href="/news">
            <button class="bg-[#424653] my-4 py-5 text-white font-bold text-[20px] uppercase py-2 px-4 rounded-md max-w-[360px]">Читать все новости</button>
        </a>
    </div>
    @endif
</div>
