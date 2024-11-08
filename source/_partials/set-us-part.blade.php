<section class="why-choose-sec">
    <div class="container sw">
        <h2 class="sec-title text-center">{{ $heading }}
            <span>{{ $subheading }}</span>
        </h2>
    </div>
    <div class="container">
        <div class="oppor-card-holder gc-3">
            @foreach($cards as $card)
                <div class="oppor-card ">
                    <div class="i-count-img">
                        <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" />
                    </div>
                    <h3 class="text-center sub-title-style">{{ $card['title'] }}</h3>
                    <p class="text-center">{{ $card['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
