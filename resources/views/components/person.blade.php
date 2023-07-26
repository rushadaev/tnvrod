<div class="grid grid-cols-2 gap-10">
    @foreach($persons as $person)
    <div class="grid grid-flow-col gap-5 max-w-[584px]">
        <div class="w-[200px] h-[250px] relative block rounded bg-[#c1c1c1]">
            @if($person['image'])
                <img class="w-full h-full object-cover rounded" alt="{{$person['name'].' '.$person['lastname']}}" src="{{$person['image']}}" />
            @endif
        </div>
        <div class="grid grid-flow-row items-center justify-center">
            <div class="text-[21px] font-semibold text-[#3B3E4D]">
                {{$person['lastname']}}<br/>
                {{$person['name']}}
            </div>
            @foreach($person['achievements'] as $achieve)
                <div>
                    {{$achieve}}
                </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
