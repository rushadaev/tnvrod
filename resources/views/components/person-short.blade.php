<div class="grid grid-cols-1 xl:grid-cols-2 gap-10">
    @foreach($persons as $person)
    <div class="max-w-[584px]">
        <div class="grid grid-flow-row items-start">
            <div class="text-justify text-gray-700 text-xl font-semibold grid grid-flow-col justify-start gap-1">
                    <div class="number">{{$loop->index+1}}.</div>
                    <div class="content">{!! $person['title'] !!}</div>
            </div>
            <div class="text-gray-700 text-md font-normal leading-normal">
                {!! $person['subtitle'] !!}
            </div>
        </div>
    </div>
@endforeach
</div>
