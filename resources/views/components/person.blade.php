<div class="grid grid-cols-1 xl:grid-cols-2 gap-10">
    @foreach($persons as $person)
    <div class="grid grid-cols-min xl:grid-flow-col auto-cols-[minmax(200px,220px)] gap-5 max-w-[584px]">
        <div class="w-[200px] h-[250px] relative block rounded bg-[#c1c1c1]">
            @if($person['image'])
                <img class="w-full h-full object-cover rounded" alt="{{$person['name'].' '.$person['lastname']}}" src="{{$person['image']}}" />
            @endif
        </div>
        <div class="grid grid-flow-row items-start">
            <div class="text-[21px] font-semibold text-[#3B3E4D]">
                {!! $person['title'] !!}
            </div>
            <div>
                {!! $person['subtitle'] !!}
            </div>
        </div>
    </div>
    @endforeach
</div>
