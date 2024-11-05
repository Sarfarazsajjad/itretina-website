<div class="lan-wan-mian-container" id="LAN_&_WAN">
        <div class="container">
            <div class="lan-wan-main-sec">
                <div class="lan-wan-title">                 
                <h1>
                    <span style="color: white;">{{ explode(' ', $cardHeading1)[0] }}</span>
                    <span style="color: Orange;">{{ explode(' ', $cardHeading1)[1] }}</span>


                    </h1>
                                      <p>{{$desc}}</p>
                    <a href='{{ $page->baseUrl }}/{{$buttonLink}}' class="site-btn">{{$buttonText}}</a>
                </div>
                <div class="lan-wan-img ">
                <img src='{{ $page->baseUrl }}/{{$image}}' alt='{{$imageAlt}}' class="img-fluid">
                </div>
            </div>
        </div>
    </div>
