@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - '.$category->title)
@section('content')
    <div class="container max-w-[1250px] mt-8 mx-auto px-4 flex flex-col justify-between ">
        <div class="grid grid-flow-row xl:grid-flow-col justify-start items-start gap-[15px]">
            <div class="grid grid-flow-col justify-start items-center gap-4">
                <a href="/" class="text-left text-neutral-600 text-[14px] font-normal">Республиканское общественное движение - «Татарстан — новый век» — «Татарстан —  яңа гасыр»</a>
                <div class="origin-top-left w-2.5 h-[10px] relative">
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                        <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
            <div class="grid grid-flow-col justify-start items-center gap-4">
                <a href="/content/{{$category->alias}}" class="opacity-60 text-left text-neutral-600 text-[14px] font-normal">{{$category->title}}</a>
            </div>
        </div>
    </div>

    <div class="container max-w-[1250px] mt-10 mx-auto grid grid-flow-row md:grid-cols-4 px-4 w-full justify-start gap-5 h-full">
        @if($category->alias == 'media')
            <div class="flex lg:flex-row flex-col gap-5 items-center justify-between">
                <a href="#" class="w-[360px] w-full h-full min-h-[337px] bg-cover bg-center grid grid-rows-[200px_minmax(100px,_1fr)]">
                    <div class="h-full max-h-[200px] bg-[#c1c1c1]">
                    </div>
                    <div class="p-4 bg-white h-full border-rounded flex flex-col min-h-[200px] justify-between">
                        <h2 class="text-[18px] text-[#4F525F]">Раздел находится в разработке</h2>
                        <p class="text-[16px] text-[#88888A]">10 июля 2023 г.</p>
                    </div>
                </a>
                @foreach($category->articles as $article)
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
        @else
            @foreach($category->articles as $article)
            <div class="max-h-[99.08px] w-full h-full relative">
                <a href="/articles/{{$article->id}}" >
                <div class="bg-zinc-100 hover:bg-blue-500  hover:text-white px-5 pt-5 pb-3 min-h-[90px] text-zinc-700 text-[14px] font-medium leading-tight">
                    {{$article->title}}
                </div>
                </a>
            </div>
            @endforeach
        @endif
    </div>


@endsection
