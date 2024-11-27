@php
    $words = explode(' ', $title);
@endphp
<div class="container">
    <div class="banner-content" id="banner-content">
    <h1>
            @foreach ($words as $index => $word)
                <span style="color: {{ $index >= 3 ?'var(--secondary-color)' : 'var(--primary-color)'  }};">
                    {{ $word }}
                </span>
            @endforeach
        </h1>
        <p class="">
            {{$desc1}}
        </p>
        <a href='{{ $page->baseUrl }}/{{$buttonLink}}' class="site-btn mt-4">{{$buttonText}}</a>

    </div>
</div>  

