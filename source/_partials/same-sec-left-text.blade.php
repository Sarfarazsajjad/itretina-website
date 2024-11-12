<div class="lan-wan-mian-container" id="LAN_&_WAN">
        <div class="container">
            <div class="lan-wan-main-sec">
                <div class="lan-wan-title">                 
                <h1>
                    <span style="color: #FFFFFF;">{{ explode(' ', $cardHeading2)[0] }}</span>
                    <span style="color: #FFFFFF;">{{ explode(' ', $cardHeading2)[1] }}</span>
                    <span style="color: #F38313;">{{ explode(' ', $cardHeading2)[2] }}</span>
                    <span style="color: #F38313;">{{ explode(' ', $cardHeading2)[3] }}</span>
                    <span style="color: #FFFFFF;">{{ explode(' ', $cardHeading2)[4] }}</span>
                    
                     </h1>
                            <p>{{$desc2}}</p>
                </div>
                <div class="lan-wan-img ">
                <img src='{{ $page->baseUrl }}/{{$image}}' alt='{{$imageAlt}}' class="img-fluid">
                </div>
            </div>
        </div>
    </div>
