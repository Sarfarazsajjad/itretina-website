@php
    $words = explode(' ', $title);
@endphp

<div class="container">
    <div class="banner-content" id="banner-content">
        <h1>
            @foreach ($words as $index => $word)
                <span style="color: {{ $index >= 1 ?'var(--secondary-color)' : 'var(--primary-color)' }};">
                    {{ $word }}
                </span>
            @endforeach
        </h1>
        </div>
</div>
