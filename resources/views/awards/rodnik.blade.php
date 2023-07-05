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
                <a href="/awards" class="text-left text-neutral-600 text-[14px] font-normal">Гранты и конкурсы</a>
                <div class="origin-top-left w-2.5 h-[10px] relative">
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                        <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
            <div class="grid grid-flow-col justify-start items-center gap-4">
                <a href="/awards/rodnik" class="opacity-60 text-left text-neutral-600 text-[14px] font-normal">Возрождение Родника Гаяза Исхаки</a>
            </div>
        </div>
    </div>

    <div class="container max-w-[1250px] mt-8 mx-auto px-4 grid grid-flow-row gap-10">
        <div class="text-zinc-700 text-xl md:text-3xl font-black uppercase">Возрождение Родника Гаяза Исхаки</div>
        <div class="max-w-[805px]">
            <img class="w-full h-full object-cover" src="/images/awards/rodnik.png">
        </div>
        <div class="max-w-[805px] text-justify text-gray-700 text-[16px] font-normal leading-normal">Республиканское общественное движение «Татарстан – новый век»– «Татарстан – яңа гасыр» стало абсолютным победителем в номинации «Родной край» III-го Конкурса социальных и культурных проектов ОАО «РИТЭК» и Некоммерческой организации «Благотворительный фонд «ЛУКОЙЛ».<br/><br/>В соответствии с условиями конкурса Движение «ТНВ» представило проект «Возрождение родника Гаяза Исхаки», который направлен на привлечение внимания общественности к одной из насущных проблем нашего времени – сохранению пресных источников воды и дальнейшего бережного к ним отношения.<br/>В данный проект входит не только благоустройство родника, проект также направлен на воспитание<br/>у жителей села Кутлушкино Чистопольского района уважения к родной земле и популяризацию творчества своего великого земляка, всемирно известного писателя, драматурга, просветителя Гаяза Исхаки.</div>

        <x-boundnews></x-boundnews>
    </div>


@endsection
