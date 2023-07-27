@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - Гранты и конкурсы')
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
                <a href="/grants" class="opacity-60 text-left text-neutral-600 text-[14px] font-normal">Гранты и конкурсы</a>
            </div>
        </div>
    </div>
    @php
    $pages = collect([
        [
            "title" => "Возрождение Родника Гаяза Исхаки  (2012 г.)",
            "link" => "#"
        ],
        [
            "title" => "Интернет конференция ",
            "link" => "#"
        ],
        [
            "title" => "Детские приюты",
            "link" => "#"
        ],
        [
            "title" => "Родник Хальфа бабай",
            "link" => "#"
        ],
        [
            "title" => "IT-ДИАЛОГ: ВЕБИНАР",
            "link" => "#"
        ],
        [
            "title" => "Конкурсы",
            "link" => "#"
        ],
        [
            "title" => "Фестиваль студенческих хоров",
            "link" => "#"
        ],
        [
            "title" => "Положение о конкурсе «Вторая жизнь отходов»",
            "link" => "#"
        ],
        [
            "title" => "Доказательная медицина — преодоление барьеров",
            "link" => "#"
        ],
        [
            "title" => "Фотоконкурс",
            "link" => "#"
        ],
        [
            "title" => "Положение III Республиканский конкурс любительских объединений «Дыхание земли»",
            "link" => "#"
        ],
        [
            "title" => "Положение конкурса детского художественного творчества «Сохраним богатство малой....",
            "link" => "#"
        ],
        [
            "title" => "Проект «Возрождение Уразлинского родника»",
            "link" => "#"
        ],
        [
            "title" => "Проект «Чувство долга»",
            "link" => "#"
        ],
        ]);
    @endphp
    <x-category :pages="$pages"></x-category>
@endsection
