<div class="container max-w-[1250px] mt-10 mx-auto grid grid-flow-row md:grid-cols-4 px-4 w-full justify-start gap-5 h-full">
    @foreach($pages as $page)
    <div class="max-h-[99.08px] w-full h-full relative">
        <a href="{{$page['link']}}" >
            <div class="bg-zinc-100 hover:bg-blue-500  hover:text-white px-5 pt-5 pb-3 min-h-[90px] text-zinc-700 text-[14px] font-medium leading-tight">
                {{substr($page['title'], 0, 300)}}{{strlen($page['title']) >= 300 ? '...' : ''}}
            </div>
        </a>
    </div>
    @endforeach
</div>
