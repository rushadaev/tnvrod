@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - О движении')
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
                <a href="/awards" class="opacity-60 text-left text-neutral-600 text-[14px] font-normal">Гранты и конкурсы</a>
            </div>
        </div>
    </div>

    <div class="container max-w-[1250px] mt-10 mx-auto grid grid-flow-row md:grid-cols-4 px-4 w-full justify-start gap-5 h-full">
        <div class="max-h-[99.08px] w-full h-full relative">
            <a href="/about/home" >
            <div class="bg-zinc-100 hover:bg-blue-500  hover:text-white px-5 pt-5 pb-3 min-h-[90px] text-zinc-700 text-[14px] font-medium leading-tight">
                Главная
            </div>
            </a>
        </div>
        <div class="max-h-[99.08px] w-full h-full relative">
            <a href="/about/history" >
                <div class="bg-zinc-100 hover:bg-blue-500  hover:text-white px-5 pt-5 pb-3  min-h-[90px] text-zinc-700 text-[14px] font-medium leading-tight">
                    История Республиканского общественного движения
                    «Татарстан – новый век» ...
                </div>
            </a>
        </div>
        <div class="max-h-[99.08px] w-full h-full relative">
            <a href="/about/anthem" >
                <div class="bg-zinc-100 hover:bg-blue-500 hover:text-white px-5 pt-5 pb-3  min-h-[90px] text-zinc-700 text-[14px] font-medium leading-tight">
                    Гимн Республиканского общественного движения
                    «Татарстан – новый век» ...
                </div>
            </a>
        </div>
    </div>


@endsection
