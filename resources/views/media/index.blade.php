@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - Молодежное отделение')
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
                <a href="/media" class="text-left text-neutral-600 text-[14px] font-normal">Медиа</a>

            </div>
        </div>
    </div>

    <div class="container max-w-[1250px] mt-8 mx-auto px-4 grid grid-flow-row gap-10">
        <div class="text-zinc-700 text-xl md:text-3xl font-black uppercase">Медиа</div>
        @php
        $media = collect([
            [
                'id' => 1,
                'title' => 'Завершился финал Республиканского этапа Всероссийских соревнований «Золотая шайба»',
                'created' => '2 февраля 2023 г.',
                'image' => '',
            ],
            [
                'id' => 2,
                'title' => 'В Нурлате провели соревнования  по плаванию на призы "Татарстан-Новый век"',
                'created' => '2 февраля 2023 г.',
                'image' => '',
            ],
            [
                'id' => 3,
                'title' => 'В Пестрецах встретились  с участниками СВО',
                'created' => '2 февраля 2023 г.',
                'image' => '',
            ],
            [
                'id' => 1,
                'title' => 'Завершился финал Республиканского этапа Всероссийских соревнований «Золотая шайба»',
                'created' => '2 февраля 2023 г.',
                'image' => '',
            ],
            [
                'id' => 2,
                'title' => 'В Нурлате провели соревнования  по плаванию на призы "Татарстан-Новый век"',
                'created' => '2 февраля 2023 г.',
                'image' => '',
            ],
            [
                'id' => 3,
                'title' => 'В Пестрецах встретились  с участниками СВО',
                'created' => '2 февраля 2023 г.',
                'image' => '',
            ],
        ]);
        @endphp
        <div class="text-justify">
            <x-media :media="collect($media)"></x-media>
        </div>


    </div>


@endsection
