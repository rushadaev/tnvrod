@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - Новости')
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
                <a href="/news" class="text-left text-neutral-600 text-[14px] font-normal">Новости</a>
                <div class="origin-top-left w-2.5 h-[10px] relative">
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.46967" y1="9.46967" x2="6.46967" y2="4.46967" stroke="#4B4A4C" stroke-width="1.5"/>
                        <line x1="6.46967" y1="5.53033" x2="1.46967" y2="0.53033" stroke="#4B4A4C" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
            <div class="opacity-60 text-left text-neutral-600 text-[14px] font-normal">Поздравление с международным женским днём матерей </div>
        </div>
    </div>

    <div class="container max-w-[1250px] mt-10 mx-auto flex flex-col justify-between h-full">
        <div class="bg-[#4884f1] relative flex flex-col justify-start w-full items-stretch">
            <div class="bg-[#4884f1] relative flex flex-col justify-center px-6 md:px-12 py-5 md:py-10 shrink-0 items-stretch px-12">
                <div class="text-center text-xl md:text-3xl font-sans font-bold leading-[42px] text-white ml-px relative">
                    3 июля 1999г.
                    <br />
                    День основания Республиканского общественного движения <br />
                    «Татарстан - новый век» - «Татарстан - яңа гасыр»
                </div>
            </div>
        </div>

    </div>

    <div class="container max-w-[1250px] mt-10 mx-auto flex flex-col justify-between h-full">
        <div class="grid grid-flow-row md:grid-flow-col">
            <div class="flex-col justify-start items-start inline-flex">
                <div class="w-full max-h-[370px]">
                    <img class="object-cover w-full" src="/images/about/1.png" />
                </div>
                <div class="relative w-full">
                    <div class="bg-blue-500 text-center text-white text-[18px] py-4 font-bold leading-normal">Председатель Высшего Совета Республиканского<br/>общественного Движение «ТНВ»,<br/>Председатель Государственного совета РТ<br/>Ф. МУХАМЕТШИН</div>
                </div>
            </div>
            <div class="bg-zinc-100 relative h-full flex items-center justify-center">
                <div class="text-center text-gray-700 text-[auto] font-normal p-5">Сердечно поздравляю участников общественного движения «Татарстан – новый век» – «Татарстан – яңа гасыр» с очередной годовщиной со дня его создания!<br/>Искренне признателен многочисленным сторонникам Движения за активную жизненную позицию, за весомый вклад в дело формирования гражданского общества в Республике Татарстан.<br/>Желаю Вам всем крепкого здоровья, счастья, благополучия!<br/>Надеюсь на дальнейшее плодотворное сотрудничество и деятельное участие в делах нашего Движения во благо процветания и успехов родного Татарстана!</div>
            </div>
        </div>
    </div>
@endsection
