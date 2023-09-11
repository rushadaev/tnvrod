@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - '.$article->title)
@section('content')
    <div class="container max-w-[1250px] mt-8 mx-auto px-4 flex flex-col justify-between ">
        <div class="grid grid-flow-row xl:grid-flow-col justify-start items-start gap-[15px]">
            <div class="grid grid-flow-col justify-start items-center gap-4 h-full">
                <a href="/" class="text-left text-neutral-600 text-[14px] font-normal">Республиканское общественное движение - «Татарстан — новый век» — «Татарстан —  яңа гасыр»</a>
                <div class="origin-top-left w-2.5 h-[10px] relative">
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                        <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
            <div class="grid grid-flow-col justify-start items-center gap-4 h-full">
                <a href="/media/" class="text-left text-neutral-600 text-[14px] font-normal">Медиа</a>
                <div class="origin-top-left w-2.5 h-[10px] relative">
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                        <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
            <div class="opacity-60 text-left text-neutral-600 text-[14px] font-normal">
                {{$article->title}}
            </div>
        </div>
    </div>

    <div class="container max-w-[1250px] mt-10 mx-auto px-4 flex flex-col justify-between h-full">
        <div class="relative grid grid-flow-col">
            <div class="block">
                <div class="text-zinc-700 text-[35px] font-black uppercase mb-10">{{$article->title}}</div>
                <div class="w-full relative">
                    <div class="w-full relative text-justify text-gray-700 text-[16px] font-normal leading-normal">
                        {!! $article->body !!}
                        <div class="container w-full mx-auto px-0 flex flex-col justify-between h-full">
                            @if(count($article['image']) > 0)
                                <div class="grid lg:grid-flow-col grid-flow-row gap-5 items-center justify-between">
                                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 items-center justify-between w-full">
                                        @foreach($article['image'] as $media)
                                            <div class="max-w-[360px] h-full min-h-[337px] bg-cover bg-center grid grid-rows-[200px_minmax(100px,_1fr)]">
                                                <div class="h-full max-h-[200px] bg-[#c1c1c1]">
                                                    <img class="relative object-cover object-top w-full h-full" src="/storage/{{$media}}" />
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
