@extends('layouts.main')
@section('title', 'Республиканское общественное движение &quot;Татарстан - новый век&quot; - Новости')
@section('content')
    <div class="container max-w-[1250px] mt-24 mx-auto px-4 flex flex-col justify-between h-full">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 items-center justify-items-center">
            @foreach($articles as $article)
            <!-- First element -->
            <div class="max-w-[600px] w-full h-full flex flex-col justify-between">
                @php
                    $dom = new DOMDocument();
                    $dom->loadHTML($article->introtext);
                    $imgsrc = null;
                    $images = $dom->getElementsByTagName('img');
                    if ($images->length > 0) {
                        $firstImage = $images->item(0);
                        $src = $firstImage->getAttribute('src');
                        $imgsrc = $src;
                    }
                @endphp
                <div class="max-h-[280px] h-full">
                <img src="{{$imgsrc}}" alt="Image description" class="w-full object-contain object-top h-[382px] object-cover">
                </div>
                <div class="bg-[#4884F1] p-4 grid grid-flow-row">
                    <div class="text-white">
                        <span class="text-[16px]">{{$article->publish_up}}</span>
                    </div>
                    <h2 class="text-[21px] lg:text-[27px] mb-5 lg:mb-0 text-white">
                        {{Str::of($article['title'])->limit(60)}}
                        @if(Str::of($article['title'])->length() <= 37)
                            <br/></br>
                        @endif
                    </h2>

                    <a class="mt-5" href="/articles/{{$article->id}}">
                        <button class="w-[155px] h-[50px] bg-white text-[#343847] flex items-center justify-center rounded-md">
                            Подробнее
                            <span class="material-icons text-[10px] ml-2">arrow_forward_ios</span>
                        </button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <x-lastnews :news="$last_articles"></x-lastnews>
    <x-photogallery></x-photogallery>

@endsection
