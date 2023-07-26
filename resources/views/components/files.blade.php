@foreach($files as $file)
<div class="flex flex-col items-start md:flex-row justify-start md:items-center mb-10">
    <div class="mr-4 h-[18px] w-[18px] md:h-[66px] md:w-[55px]">
        <div class="relative grid justify-center items-center h-full">

            @if($file['type'] == 'yandex')
                <img class="absolute top-0 left-0 hidden md:block" src="/images/youth/icons/file.svg">
                <img class="relative" src="/images{{$file['icon']}}">
            @else
                <img class="absolute top-0 left-0" src="/images/youth/icons/file.svg">
                @if($file['type'] == 'custom')
                    @if($file['icon'] == 'PDF')
                        <div class="relative text-[#F44254] text-[8px] md:text-[18px]">{{$file['icon']}}</div>
                    @else
                        <div class="relative text-[#4884F1] text-[8px] md:text-[18px]">{{$file['icon']}}</div>
                    @endif
                @endif
            @endif
        </div>
    </div>
    <div class="grid grid-rows-auto gap-1 w-full h-full">
        <div class="text-[#343847] text-[18px] text-left">
            <a class="text-[#343847] text-[14px] md:text-[18px]" href="{{$file['url']}}">
                {{$file['title']}}
            </a>
        </div>
        <div class="bg-[#818181] opacity-[0.5px] h-[0.5px] w-full"></div>
        <div class="text-[#848484] text-[14px]">
            @if(isset($file) && $file['url'])
                <a target="_blank" class="text-[#3FA3FF] underline text-[14px]" href="{{$file['url']}}">
                    {{$file['url']}}
                </a>
            @else
                  (тут должна быть ссылка на яндекс форму)
            @endif
        </div>
    </div>
</div>
@endforeach

