<div class="main_card">
    <span>
        Current series
    </span>
    <div>

        @foreach ($data as $item)
        <div class="main_card_single">
            <img src="{{$item['thumb']}}" alt="">
            <a href="{{route('description',$loop->index)}}">
            {{$item['series']}}
            </a>
        </div>
        @endforeach

    </div>
    <span class="button">
        Load More
    </span>

</div>
