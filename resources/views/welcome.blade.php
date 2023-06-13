<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Республиканское общественное движение &quot;Татарстан - новый век&quot; - События</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        @vite('resources/css/app.css')
    </head>
    <body>
    <header class="bg-[#F4F2F2] h-200px pt-4 h-full">
        <div class="container max-w-[1250px] mx-auto px-4 flex flex-col justify-between h-full">
            <div class="flex items-center justify-between w-full h-full">
                <div class="flex items-center justify-between w-full">
                    <div class="flex">
                        <img src="/images/logo.png" alt="" class="h-20 w-20">
                        <h1 class="text-dark-blue text-25px ml-4 font-bold w-auto uppercase">
                            Республиканское общественное движение<br/>
                            «Татарстан — новый век» — «Татарстан — яңа гасыр»
                        </h1>
                    </div>
                    <div class="flex">
                        <div class="flex rounded justify-center items-center ml-2">
                            <span class="w-14 h-14 flex justify-center items-center bg-F4F2F2 border border-round-rounded search-container">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="8.5" cy="8.5" r="7.65" stroke="black" stroke-width="1.7"/>
                                <path d="M19 19L14 14" stroke="black" stroke-width="1.7"/>
                                </svg>
                            </span>
                        </div>
                        <button class="text-white bg-blue-500 ml-2 h-14 w-44 uppercase">
                            Задать вопрос
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-4 grid menu">
                <a href="#" class="active leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">Новости</a>
                <a href="#" class="leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">О движении</a>
                <a href="#" class="leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">Молодежное отделение</a>
                <a href="#" class="leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">структура</a>
                <a href="#" class="leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">документы</a>
                <a href="#" class="leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">медиа</a>
                <a href="#" class="leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">наши издания</a>
                <a href="#" class="leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">гранты и конкурсы</a>
            </div>
        </div>
    </header>

    <div class="container max-w-[1250px] mt-24 mx-auto px-4 flex flex-col justify-between h-full">
        <div class="grid grid-cols-2 gap-4">
            <!-- First element -->
            <div class="w-[600px] h-[680px]">
                <img src="/images/sample.png" alt="Image description" class="w-full h-[382px] object-cover">
                <div class="bg-[#4884F1] h-[298px] p-4 flex flex-col justify-between">
                    <div class="text-white">
                        <span class="text-[30px]">5</span>
                        <span class="text-[16px]">Мая 2023</span>
                    </div>
                    <h2 class="text-[27px] text-white">Активисты и волонтеры Балтасинского района поздравили ветеранов с Днём Победы</h2>
                    <button class="w-[155px] h-[50px] bg-white text-[#343847] flex items-center justify-center rounded-md">
                        Подробнее
                        <span class="material-icons text-[10px] ml-2">arrow_forward_ios</span>
                    </button>
                </div>
            </div>
            <!-- First element -->
            <div class="w-[600px] h-[680px]">
                <img src="/images/sample.png" alt="Image description" class="w-full h-[382px] object-cover">
                <div class="bg-[#4884F1] h-[298px] p-4 flex flex-col justify-between">
                    <div class="text-white">
                        <span class="text-[30px]">5</span>
                        <span class="text-[16px]">Мая 2023</span>
                    </div>
                    <h2 class="text-[27px] text-white">Активисты и волонтеры Балтасинского района поздравили ветеранов с Днём Победы</h2>
                    <button class="w-[155px] h-[50px] bg-white text-[#343847] flex items-center justify-center rounded-md">
                        Подробнее
                        <span class="material-icons text-[10px] ml-2">arrow_forward_ios</span>
                    </button>
                </div>
            </div>
            <!-- First element -->
            <div class="w-[600px] h-[680px]">
                <img src="/images/sample.png" alt="Image description" class="w-full h-[382px] object-cover">
                <div class="bg-[#4884F1] h-[298px] p-4 flex flex-col justify-between">
                    <div class="text-white">
                        <span class="text-[30px]">5</span>
                        <span class="text-[16px]">мая 2023</span>
                    </div>
                    <h2 class="text-[27px] text-white">Активисты и волонтеры Балтасинского района поздравили ветеранов с Днём Победы</h2>
                    <button class="w-[155px] h-[50px] bg-white text-[#343847] flex items-center justify-center rounded-md">
                        Подробнее
                        <span class="material-icons text-[10px] ml-2">arrow_forward_ios</span>
                    </button>
                </div>
            </div>
            <!-- First element -->
            <div class="w-[600px] h-[680px]">
                <img src="/images/sample.png" alt="Image description" class="w-full h-[382px] object-cover">
                <div class="bg-[#4884F1] h-[298px] p-4 flex flex-col justify-between">
                    <div class="text-white">
                        <span class="text-[30px]">5</span>
                        <span class="text-[16px]">Мая 2023</span>
                    </div>
                    <h2 class="text-[27px] text-white">Активисты и волонтеры Балтасинского района поздравили ветеранов с Днём Победы</h2>
                    <button class="w-[155px] h-[50px] bg-white text-[#343847] flex items-center justify-center rounded-md">
                        Подробнее
                        <span class="material-icons text-[10px] ml-2">arrow_forward_ios</span>
                    </button>
                </div>
            </div>
            <!-- Add the other 3 elements here, following the same structure -->
        </div>
    </div>

    <div class="container max-w-[1250px] mt-20 mx-auto px-4 flex flex-col justify-between h-full">
        <div class="w-full px-14">
            <h1 class="text-[32px] text-[#4F525F] my-4 font-bold">ДРУГИЕ НОВОСТИ</h1>
        </div>
        <div class="flex items-center justify-between">
            <button class="text-4xl"><span class="material-icons text-[36px] text-[#949598] ml-2">arrow_back_ios</span></button>
            <div class="w-[360px] bg-cover bg-center">
                <div class="h-[225px] bg-[#c1c1c1]"></div>
                <div class="p-4 bg-white h-full border-rounded flex flex-col justify-between">
                    <h2 class="text-[18px] text-[#4F525F]">Завершился финал Республиканского этапа Всероссийских соревнований «Золотая шайба»</h2>
                    <p class="text-[16px] text-[#88888A]">2 февраля 2023 г.</p>
                </div>
            </div>
            <div class="w-[360px] bg-cover bg-center">
                <div class="h-[225px] bg-[#c1c1c1]"></div>
                <div class="p-4 bg-white h-full border-rounded flex flex-col justify-between">
                    <h2 class="text-[18px] text-[#4F525F]">Завершился финал Республиканского этапа Всероссийских соревнований «Золотая шайба»</h2>
                    <p class="text-[16px] text-[#88888A]">2 февраля 2023 г.</p>
                </div>
            </div>
            <div class="w-[360px]  bg-cover bg-center">
                <div class="h-[225px] bg-[#c1c1c1]"></div>
                <div class="p-4 bg-white h-full border-rounded flex flex-col justify-between">
                    <h2 class="text-[18px] text-[#4F525F]">Завершился финал Республиканского этапа Всероссийских соревнований «Золотая шайба»</h2>
                    <p class="text-[16px] text-[#88888A]">2 февраля 2023 г.</p>
                </div>
            </div>
            <button class="text-4xl"><span class="material-icons text-[#949598] text-[36px] ml-2">arrow_forward_ios</span></button>
        </div>
        <div class="w-full px-14 flex justify-end">
            <button class="bg-[#424653] my-4 py-5 text-white font-bold text-[20px] uppercase py-2 px-4 rounded-md w-[360px]">Читать все новости</button>
        </div>
    </div>

    <div class="container max-w-[1250px] mt-20 mx-auto px-4 flex flex-col justify-between h-full">
        <div class="w-full px-14">
            <h1 class="text-[32px] text-[#4F525F] my-4 font-bold">ФОТОГАЛЕРЕЯ</h1>
        </div>
        <div class="flex items-center justify-between">
            <button class="text-4xl"><span class="material-icons text-[36px] text-[#949598] ml-2">arrow_back_ios</span></button>
            <div class="w-[360px] bg-cover bg-center">
                <div class="h-[225px] bg-[#c1c1c1]"></div>
            </div>
            <div class="w-[360px] bg-cover bg-center">
                <div class="h-[225px] bg-[#c1c1c1]"></div>
            </div>
            <div class="w-[360px]  bg-cover bg-center">
                <div class="h-[225px] bg-[#c1c1c1]"></div>
            </div>
            <button class="text-4xl"><span class="material-icons text-[#949598] text-[36px] ml-2">arrow_forward_ios</span></button>
        </div>
    </div>

    <footer class="bg-[#424653] ">
        <div class="container max-w-[1250px] mt-20 h-[320px] mx-auto px-4 flex flex-col justify-between items-center">
            <div class="flex items-start pt-10 justify-between w-full h-full">
                <div class="flex items-center">
                    <img src="/images/logo_white.png" alt="" class="h-[54px] w-[54px]">
                    <h3 class="text-white text-[14px] ml-4 font-bold w-auto uppercase">
                        Республиканское общественное движение<br/>
                        «Татарстан — новый век» — «Татарстан — яңа гасыр»
                    </h3>
                </div>
                <div class="flex">
                    <p class="text-white text-[15px]">
                        Адрес: 420111, г. Казань, ул. Лобачевского, д.10<br/>
                        Телефон: (843) 264-69-38<br/>
                        Факс: (843) 264-69-39<br/>
                        E-Mail: tnvrod@yandex.ru
                    </p>
                </div>
                <div class="flex">
                    <button class="text-white bg-blue-500 ml-2 h-14 w-44 uppercase">
                        Задать вопрос
                    </button>
                </div>
            </div>
            @php
            $images = [1,2,3,4];
            @endphp
            <div class="flex items-center justify-center border-t w-full h-full">
                <div class="flex items-center justify-between w-full max-w-[700px] h-full">
                    @foreach($images as $image)
                        <img src="/images/partner_{{$image}}.png" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
