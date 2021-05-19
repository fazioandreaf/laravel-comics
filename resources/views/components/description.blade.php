<div class="description">
    <div class="description_content">

        <h2>
            {{$i['title']}}
        </h2>
        <div class="price_stock">
            <div>
                <span> U.S Price <span>{{$i['price']}}</span></span>
                <span>Available</span>
            </div>
            <div><span>Check Availability</span></div>
        </div>
        <div>

            {{$i['description']}}
        </div>
    </div>
    <div class="adv">
        <img src="{{ asset('/storage/asset/images/adv.jpg') }}" alt="adv">
    </div>
</div>
