@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - О движении - История')
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
                <a href="/about" class="text-left text-neutral-600 text-[14px] font-normal">О движении</a>
                <div class="origin-top-left w-2.5 h-[10px] relative">
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                        <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
            <div class="grid grid-flow-col justify-start items-center gap-4">
                <a href="/history" class="opacity-60 text-left text-neutral-600 text-[14px] font-normal">Гимн Республиканского общественного движения</a>
                <div class="origin-top-left w-2.5 h-[10px] relative">
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                        <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="container max-w-[1250px] mt-8 mx-auto px-4 grid grid-flow-row gap-10">
        <div class="text-zinc-700 text-xl md:text-3xl font-black uppercase">Гимн</div>
        <div class="text-justify">
            <iframe width="100%" height="705" src="https://www.youtube.com/embed/qgEWUPkTsIY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div class="mt-4 grid grid-flow-row md:grid-flow-col justify-between">
            <div class="max-w-[370px] w-full h-[75px] bg-gray-700 rounded">
                <a href="/about/history" class="grid grid-flow-col justify-start items-center h-full px-8 gap-8 cursor-pointer">
                    <div>
                        <svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="-1" x2="13.5771" y2="-1" transform="matrix(-0.736474 0.676465 -0.736474 -0.676465 9.99878 0)" stroke="white" stroke-width="2"/>
                            <line y1="-1" x2="13.5771" y2="-1" transform="matrix(0.736474 0.676465 -0.736474 0.676465 0.000732422 9.18457)" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="text-center text-white text-[18px] font-bold uppercase">история Республикан...</div>
                </a>
            </div>
            <div class="max-w-[370px] w-full h-[75px] bg-gray-700 rounded">
                <a href="/about/home" class="grid grid-flow-col justify-start items-center h-full px-8 gap-8 cursor-pointer">
                    <div class="text-center text-white text-[18px] font-bold uppercase">Главная</div>
                    <div>
                        <svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="-1" x2="13.5771" y2="-1" transform="matrix(0.736474 -0.676465 0.736474 0.676465 2.00122 19)" stroke="white" stroke-width="2"/>
                            <line y1="-1" x2="13.5771" y2="-1" transform="matrix(-0.736474 -0.676465 0.736474 -0.676465 11.9993 9.81567)" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>


@endsection
