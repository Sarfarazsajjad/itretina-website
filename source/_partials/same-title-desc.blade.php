<div class="container">
    <div class="banner-content" id="banner-content">
        <h1>
            <span style="color: #314252;">{{ explode(' ', string: $maintitlepage1)[0] }}</span>
            <span style="color: #314252;">{{ explode(' ', string: $maintitlepage1)[1] }}</span>
            <span style="color: #314252;">{{ explode(' ', string: $maintitlepage1)[2] }}</span>
            <span style="color: #314252;">{{ explode(' ', string: $maintitlepage1)[3] }}</span>
            <span style="color: orange;" >{{ explode(' ', string:  $maintitlepage1)[4] }}</span>
            <span style="color: orange;" >{{ explode(' ', string:  $maintitlepage1)[5] }}</span>        
            <span style="color: orange;" >{{ explode(' ', string:  $maintitlepage1)[6] }}</span>        

        </h1>
        <a href='{{ $page->baseUrl }}/{{$buttonLink}}' class="gredient-btn mt-4">{{$buttonText}}</a>

    </div>
</div>  