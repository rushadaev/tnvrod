@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - Образцы отчетных документов')
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
                <a href="/documents" class="opacity-60 text-left text-neutral-600 text-[14px] font-normal">Документы</a>
            </div>
        </div>
    </div>

    <div class="container max-w-[1250px] mt-8 mx-auto px-4 grid grid-flow-row gap-10">
        <div class="text-zinc-700 text-xl md:text-3xl font-black uppercase">Центр Некоммерческой организации</div>
        @php
        $files = collect([
            [
                'type' => 'custom',
                'icon' => 'DOCX',
                'title' => 'Заявление в ПФР-2',
                'url' => 'DOCX, 34.0 Кб',
                'order' => 1,
                'widget_id' => 1,
            ],
            [
                'type' => 'custom',
                'icon' => 'PDF',
                'title' => 'Статистический отчет 1-НКО',
                'url' => 'PDF, 34.0 Кб',
                'order' => 2,
                'widget_id' => 1,
            ],
            [
                'type' => 'custom',
                'icon' => 'DOCX',
                'title' => 'Заявление в ФСС',
                'url' => 'DOCX, 34.0 Кб',
                'order' => 3,
                'widget_id' => 1,
            ],
            [
                'type' => 'custom',
                'icon' => 'DOCX',
                'title' => 'Форма 4. Расчет по начисленным социальным взносам',
                'url' => 'DOCX, 34.0 Кб',
                'order' => 4,
                'widget_id' => 1,
            ],
            [
                'type' => 'custom',
                'icon' => 'DOCX',
                'title' => 'Справка-подтверждение основ. вида эконом. деятельности',
                'url' => 'DOCX, 34.0 Кб',
                'order' => 5,
                'widget_id' => 1,
            ],
            [
                'type' => 'custom',
                'icon' => 'DOCX',
                'title' => 'Образцы в налоговую службу',
                'url' => 'DOCX, 34.0 Кб',
                'order' => 6,
                'widget_id' => 1,
            ],
            [
                'type' => 'yandex',
                'icon' => '/youth/icons/disk.png',
                'title' => 'Запись видео-конференции от 28.02.2019',
                'url' => 'https://disk.yandex.ru/d/pYDfnUby9sDvhw%20',
                'order' => 7,
                'widget_id' => 1,
            ],
        ]);
        @endphp
        <div class="text-justify">
            <x-files :files="collect($files)"></x-files>
        </div>
    </div>


@endsection
