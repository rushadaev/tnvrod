<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    @vite('resources/css/app.css')
</head>
<body>
<header class="bg-[#F4F2F2] min-h-200px pt-4 h-full">
    <div class="container max-w-[1250px] mx-auto px-4 flex flex-col justify-between h-full">
        <div class="flex items-center justify-between w-full h-full">
            <div class="flex items-center lg:flex-row flex-col justify-between w-full">
                <div class="flex lg:flex-row flex-col items-center ">
                    <a href="/">
                        <img src="/images/logo.png" alt="" class="h-20 w-20">
                    </a>
                    <h1 class="text-dark-blue text-25px ml-4 text-center lg:text-left font-bold w-auto uppercase mt-4 lg:mt-0">
                        Республиканское общественное движение<br/>
                        «Татарстан — новый век» — «Татарстан — яңа гасыр»
                    </h1>
                </div>
                <div class="flex mt-4 lg:mt-0">
                    <form action="/search">
                        <div id="searchbar" class="fixed hidden bg-[#424653] w-full h-[200px] left-0 top-0">
                            <div class="flex rounded justify-center items-center ml-2 h-full">
                                <div class="relative w-full max-w-[800px] ">
                                    <form method="get" action="/search" >
                                        <input placeholder="Поиск по сайту..." class="border-b-2 w-full pl-[30px] outline-none text-white h-[40px] text-[16px] font-thin border-white bg-transparent" name="query" />
                                    </form>
                                    <div class="absolute top-[10px] left-0">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8.5" cy="8.5" r="7.65" stroke="white" stroke-width="1.7"/>
                                            <path d="M19 19L14 14" stroke="white" stroke-width="1.7"/>
                                        </svg>
                                    </div>
                                    <div onclick="document.getElementById('searchbar').classList.add('hidden')" class="absolute right-[10px] top-[10px] cursor-pointer">
                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5977 11.5996L1.19766 1.19961" stroke="white" stroke-width="1.7"/>
                                            <path d="M11.5977 1.19922L1.19766 11.5992" stroke="white" stroke-width="1.7"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div onclick="document.getElementById('searchbar').classList.remove('hidden')" class="flex cursor-pointer rounded justify-center items-center ml-2">
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
        <div class="mt-4 grid menu grid-flow-row xl:grid-flow-col">
            <a href="/" class="@if(Route::currentRouteName() == 'home')active @endif leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">Новости</a>
            <a href="/about" class="@if(Str::of(Route::currentRouteName())->contains('about'))active @endif leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">О движении</a>
            <a href="/youth" class="@if(Str::of(Route::currentRouteName()) == 'youth.index')active @endif leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">Молодежное отделение</a>
            <a href="/structure" class="@if(Str::of(Route::currentRouteName())->contains('structure'))active @endif leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">Cтруктура</a>
            <a href="/documents" class="@if(Str::of(Route::currentRouteName())->contains('documents'))active @endif leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">Документы</a>
            <a href="/media" class="@if(Str::of(Route::currentRouteName())->contains('media'))active @endif leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">Медиа</a>
            <a href="/publications" class="@if(Str::of(Route::currentRouteName())->contains('publications'))active @endif leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">Наши издания</a>
            <a href="/grants" class="@if(Str::of(Route::currentRouteName())->contains('grants'))active @endif leading-2 px-3 py-2 hover:bg-gray-700 hover:text-white uppercase border-transparent">Гранты и конкурсы</a>
        </div>
    </div>
</header>
<main class="min-h-[500px]">
    @yield('content')
</main>

<footer class="bg-[#424653] ">
    <div class="container max-w-[1250px] mt-20 min-h-[320px] mx-auto px-4 flex flex-col justify-between items-center">
        <div class="flex lg:flex-row flex-col items-center lg:items-start pt-10 justify-between w-full h-full">
            <div class="flex items-center">
                <img src="/images/logo_white.png" alt="" class="h-[54px] w-[54px]">
                <h3 class="text-white text-[14px] ml-4 font-bold w-auto uppercase">
                    Республиканское общественное движение<br/>
                    «Татарстан — новый век» — «Татарстан — яңа гасыр»
                </h3>
            </div>
            <div class="flex mt-5 lg:mt-0">
                <p class="text-white text-[15px]">
                    Адрес: 420111, г. Казань, ул. Лобачевского, д.10<br/>
                    Телефон: (843) 264-69-38<br/>
                    Факс: (843) 264-69-39<br/>
                    E-Mail: tnvrod@yandex.ru
                </p>
            </div>
            <div class="flex mt-5 lg:mt-0">
                <button class="text-white bg-blue-500 ml-2 h-14 w-44 uppercase">
                    Задать вопрос
                </button>
            </div>
        </div>
        @php
        $images = [1,2,3,4];
        @endphp
        <div class="flex items-center justify-center border-t w-full h-full mt-5 pt-4 pb-4">
            <div class="flex flex-wrap gap-5 items-center justify-between w-full max-w-[700px] h-full">
                @foreach($images as $image)
                <img src="/images/partner_{{$image}}.png" alt="">
                @endforeach
            </div>
        </div>
    </div>
</footer>
</body>
</html>
