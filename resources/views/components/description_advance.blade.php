<div class="description_advance">
    <div class="description_advance_main">
        <div>
            <h2>Talent</h2>
            <div>
                <span>Art By:</span>
                <span>
                    @foreach ($i['artists'] as $item)
                    <a href="">

                        {{$item}}
                    </a>
                    @endforeach
                </span>
            </div>
            <div>
                <span>Written By:</span>
                <span>
                    @foreach ($i['writers'] as $item)
                    <a href="">

                        {{$item}}
                    </a>
                    @endforeach
                </span>
            </div>
        </div>
        <div>
            <h2>Spaces</h2>
            <div>
                <span>Series</span>
                <span>
                    {{$i['series']}}
                </span>
            </div>
            <div>
                <span>U.S. Price:</span>
                <span>
                    {{$i['price']}}
                </span>
            </div>
            <div>
                <span>On Sale Date:</span>
                <span>
                    {{$i['sale_date']}}
                </span>
            </div>
        </div>
    </div>
@include('components.reminder_img_grey')
</div>
