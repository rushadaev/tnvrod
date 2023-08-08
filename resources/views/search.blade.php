@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - Новости')
@section('content')
    <div class="container max-w-[1250px] mt-8 mx-auto px-4 flex flex-col justify-between">
        <div class="h-[18px] justify-start items-center gap-[15px] inline-flex">
            <div class="text-justify text-neutral-600 text-[14px] font-normal">Республиканское общественное движение - «Татарстан — новый век» — «Татарстан —  яңа гасыр»</div>
            <div class="origin-top-left w-2.5 h-[10px] relative">
                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                    <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                </svg>
            </div>
            <div class="opacity-60 text-justify text-neutral-600 text-[14px] font-normal">Поиск</div>
        </div>
    </div>

    <div class="container max-w-[1250px]  mx-auto px-4 flex flex-col justify-between h-full mt-10">
        <div class="relative grid grid-flow-row md:grid-flow-col">
            <div class="block">
                <div class="text-justify text-zinc-700 text-[35px] font-black uppercase tracking-widest mb-5">РЕЗУЛЬТАТЫ ПОИСКА</div>
                <div class="left-[2px] top-[68px]">

                    @if(Request::get('query'))
                    @foreach($articles as $article)
                    <div class="border-t border-b py-4 border-black">
                        <div class="grid grid-flow-col justify-start items-center gap-2">
                            <div class="text-justify text-zinc-700 text-[30px] font-medium uppercase tracking-wider">{{Carbon\Carbon::make($article->created)->day}}</div>
                            <div class="text-justify text-zinc-700 text-[16px] font-normal tracking-wider">/ {{Carbon\Carbon::make($article->created)->month}} {{Carbon\Carbon::make($article->created)->year}} г.</div>
                        </div>
                        <a href="/articles/{{$article->id}}" class="text-zinc-700 text-[22px] font-semibold leading-snug mb-5">{{$article->title}}</a>
                        <div class="text-zinc-700 text-[16px] font-normal leading-snug">{!! CustomHelper::shortenString($article->fulltext) !!}</div>
                    </div>
                    @endforeach
                    @else
                        Пустой поисковой запрос
                    @endif

                </div>
            </div>
        </div>

    </div>
@endsection
