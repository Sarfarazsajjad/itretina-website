<div class="container my-5 mobile-hide">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="custom-img-container">
                <img src='{{ $page->baseUrl }}/{{$image}}' alt={{$imageAlt}} class="img-fluid">
            </div>
        </div>
        <div class="col-md-6">
            <h2>{{$cardHeading1}}</h2>
            <p>{{$desc}}</p>
            <h3>{{$cardHeading2}}</h3>
            <ul>
                <li>{{$listItem1}}</li>
                <li>{{$listItem2}}</li>
                <li>{{$listItem3}}</li>
            </ul>
            <div class="text-center mt-3">
                <a href='{{ $page->baseUrl }}/{{$buttonLink}}' class="btn btn-primary">{{$buttonText}}</a>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 mobile-show">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="custom-img-container">
                <img src='{{ $page->baseUrl }}/{{$image}}' alt={{$imageAlt}} class="img-fluid">
            </div>
        </div>
        <div class="col-md-6 text-center">
            <h2>{{$cardHeading1}}</h2>
            <p>{{$desc}}</p>
            <h3>{{$cardHeading2}}</h3>
            <ul>
                <li>{{$listItem1}}</li>
                <li>{{$listItem2}}</li>
                <li>{{$listItem3}}</li>
            </ul>
            <div class="text-center mt-3">
                <a href='{{ $page->baseUrl }}/{{$buttonLink}}' class="btn btn-primary">{{$buttonText}}</a>
            </div>
        </div>
    </div>
</div>