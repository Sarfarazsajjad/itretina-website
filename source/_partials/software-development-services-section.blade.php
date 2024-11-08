<section class="digital-marketing-sec pt-0">
    <div class="container">
        <h2 class="sec-title fadeInUp">
            {{ $heading }}
            <span class="d-block">{{ $subheading }}</span>
        </h2>

        <div class="row experties-content digital-marketing-tab">
            <div class="col-md-4">
                <div class="vertical-tabs-holder inner">
                    <ul class="pixcile-tabs vertical-tabs mt-4">
                        @foreach($tabs as $tab)
                            <li class="pixcile-tab digital-media-tab {{ $loop->first ? 'active' : '' }}" onclick="openTab3('{{ $tab['id'] }}')">
                                {{ $tab['title'] }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-7 digital-tab-content-holder">
                @foreach($tabs as $tab)
                    <div id="{{ $tab['id'] }}Content" class="pixcile-tab-content digital-media-content {{ $loop->first ? 'active' : '' }}">
                        <div class="container">
                            <div class="experties-content">
                                <img src="{{ $tab['image'] }}" alt="{{ $tab['title'] }}" />
                                <h3>{{ $tab['title'] }}</h3>
                                <p>{{ $tab['description'] }}</p>
                                <a class="site-btn" href="{{ $tab['link'] }}">Explore</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-1">
                <div class="tab-slide-btn-holder vertical-tab-btn">
                    <div class="tab-slide-btn prev3">
                        <img src="assets/images/prev-arrow.svg" alt="Previous" />
                    </div>
                    <div class="tab-slide-btn next3">
                        <img src="assets/images/next-arrow.svg" alt="Next" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
