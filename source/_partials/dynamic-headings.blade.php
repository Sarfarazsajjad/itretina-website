@php
    $words = explode(' ', $title );
@endphp

<div class="container">
    <div class="banner-content" id="banner-content">
        <h1>
            @foreach ($words as $index => $word)
                <span style="color: {{ $index >= 4 ?'#F38313': '#314252'  }};">
                    {{ $word }}
                </span>
            @endforeach
        </h1>
        <a href="{{ $page->baseUrl }}/{{ $buttonLink }}" class="gredient-btn mt-4">{{ $buttonText }}</a>
    </div>
</div>
