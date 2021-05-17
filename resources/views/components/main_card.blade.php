<div class="main_card">
    <span>
        @yield('content')
    </span>
    <div>

        @foreach ($data as $item)
        <div class="main_card_single">
            <img src="{{$item['thumb']}}" alt="">
            <span class="title">{{$item['title']}}</span>
        </div>
        @endforeach
        
    </div>
    <span class="button">
        Load More
    </span>

</div>
