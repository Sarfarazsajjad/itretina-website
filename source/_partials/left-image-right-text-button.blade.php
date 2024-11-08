<div class="network-cyber-main-container" id="Network_and_Cyber">
        <div class="container">
            <div class="network-cyber-main-sec">
                <div class="lan-wan-img ">
                <img src='{{ $page->baseUrl }}/{{$image}}' alt='{{$imageAlt}}' class="img-fluid">
                </div>
                <div class="network-cyber-title">
                <h1>
                    <span style="color: black;">{{ explode(' ', $cardHeading1)[0] }}</span>
                    <span style="color: Orange;">{{ explode(' ', $cardHeading1)[1] }}</span>
        </h1>
                    <p>{{$desc}}</p>
                    <a href='{{ $page->baseUrl }}/{{$buttonLink}}' class="site-btn">{{$buttonText}}</a>
                </div>

            </div>
        </div>
    </div>
