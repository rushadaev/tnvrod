<div class="container max-w-[1250px] mt-20 mx-auto px-4 flex flex-col justify-between h-full">
    <div class="w-full px-5 text-center lg:text-left lg:px-14">
        <h1 class="text-[32px] text-[#4F525F] my-4 font-bold">ФОТОГАЛЕРЕЯ</h1>
    </div>
    @php
    $photos = App\Models\Media::select(['id','image'])->get();
    @endphp
    <div class="flex lg:flex-row flex-col items-center justify-between">
        <button class="text-4xl hidden lg:block"><span class="material-icons text-[36px] text-[#949598] ml-2">arrow_back_ios</span></button>
        @foreach($photos as $photo)
            <div class="max-w-[360px] w-[360px] bg-cover bg-center">
                <div class="h-[225px] w-[360px] bg-[#c1c1c1] relative">
                    <a href="/media/{{$photo->id}}">
                        <img class="relative object-cover object-top w-full h-full" src="/storage/{{$photo->image}}">
                    </a>
                </div>
            </div>
        @endforeach
        <button class="text-4xl hidden lg:block"><span class="material-icons text-[#949598] text-[36px] ml-2">arrow_forward_ios</span></button>
    </div>
</div>
