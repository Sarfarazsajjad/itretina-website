<div class="container">
    <div class="banner-content" id="banner-content">
        <h1>
            <span style="color: #314252;">{{ explode(' ', string: $maintitlepage)[0] }}</span>
            <span style="color: #314252;">{{ explode(' ', string: $maintitlepage)[1] }}</span>
            <span style="color: #314252;">{{ explode(separator: ' ', string: $maintitlepage)[2] }}</span>
            <span style="color: orange;">{{ explode(separator: ' ', string: $maintitlepage)[3] }}</span>
            <span style="color: orange;">{{ explode(separator: ' ', string: $maintitlepage)[4] }}</span>
           

        </h1>
        <p class="">
            {{$desc1}}
        </p>
        <a href='{{ $page->baseUrl }}/{{$buttonLink}}' class="gredient-btn mt-4">{{$buttonText}}</a>

    </div>
</div>  