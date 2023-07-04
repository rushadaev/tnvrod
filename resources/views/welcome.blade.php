@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - Новости')
@section('content')
    <div class="container max-w-[1250px] mt-24 mx-auto px-4 flex flex-col justify-between h-full">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 items-center justify-items-center">
            <!-- First element -->
            <div class="max-w-[600px] ">
                <img src="/images/sample.png" alt="Image description" class="w-full h-[382px] object-cover">
                <div class="bg-[#4884F1] p-4 flex flex-col justify-between">
                    <div class="text-white">
                        <span class="text-[30px]">5</span>
                        <span class="text-[16px]">Мая 2023</span>
                    </div>
                    <h2 class="text-[21px] lg:text-[27px] mb-5 lg:mb-0 text-white">Активисты и волонтеры Балтасинского района поздравили ветеранов с Днём Победы</h2>
                    <a href="/article">
                        <button class="w-[155px] h-[50px] bg-white text-[#343847] flex items-center justify-center rounded-md">
                            Подробнее
                            <span class="material-icons text-[10px] ml-2">arrow_forward_ios</span>
                        </button>
                    </a>
                </div>
            </div>
            <!-- First element -->
            <div class="max-w-[600px] ">
                <img src="/images/sample.png" alt="Image description" class="w-full h-[382px] object-cover">
                <div class="bg-[#4884F1] p-4 flex flex-col justify-between">
                    <div class="text-white">
                        <span class="text-[30px]">5</span>
                        <span class="text-[16px]">Мая 2023</span>
                    </div>
                    <h2 class="text-[21px] lg:text-[27px] mb-5 lg:mb-0 text-white">Активисты и волонтеры Балтасинского района поздравили ветеранов с Днём Победы</h2>
                    <a href="/article">
                        <button class="w-[155px] h-[50px] bg-white text-[#343847] flex items-center justify-center rounded-md">
                            Подробнее
                            <span class="material-icons text-[10px] ml-2">arrow_forward_ios</span>
                        </button>
                    </a>
                </div>
            </div>
            <!-- First element -->
            <div class="max-w-[600px] ">
                <img src="/images/sample.png" alt="Image description" class="w-full h-[382px] object-cover">
                <div class="bg-[#4884F1] p-4 flex flex-col justify-between">
                    <div class="text-white">
                        <span class="text-[30px]">5</span>
                        <span class="text-[16px]">мая 2023</span>
                    </div>
                    <h2 class="text-[21px] lg:text-[27px] mb-5 lg:mb-0 text-white">Активисты и волонтеры Балтасинского района поздравили ветеранов с Днём Победы</h2>
                    <a href="/article">
                        <button class="w-[155px] h-[50px] bg-white text-[#343847] flex items-center justify-center rounded-md">
                            Подробнее
                            <span class="material-icons text-[10px] ml-2">arrow_forward_ios</span>
                        </button>
                    </a>
                </div>
            </div>
            <!-- First element -->
            <div class="max-w-[600px] ">
                <img src="/images/sample.png" alt="Image description" class="w-full h-[382px] object-cover">
                <div class="bg-[#4884F1] p-4 flex flex-col justify-between">
                    <div class="text-white">
                        <span class="text-[30px]">5</span>
                        <span class="text-[16px]">Мая 2023</span>
                    </div>
                    <h2 class="text-[21px] lg:text-[27px] mb-5 lg:mb-0 text-white">Активисты и волонтеры Балтасинского района поздравили ветеранов с Днём Победы</h2>
                    <a href="/article">
                        <button class="w-[155px] h-[50px] bg-white text-[#343847] flex items-center justify-center rounded-md">
                            Подробнее
                            <span class="material-icons text-[10px] ml-2">arrow_forward_ios</span>
                        </button>
                    </a>
                </div>
            </div>
            <!-- Add the other 3 elements here, following the same structure -->
        </div>
    </div>

    <x-lastnews></x-lastnews>
    <x-photogallery></x-photogallery>

@endsection
