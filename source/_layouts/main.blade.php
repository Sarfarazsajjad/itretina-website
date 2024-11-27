<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <meta name="google-site-verification" content="9UJ4lIzdRtIUsxAsTRdb8cD_UXL3rM7Piuy0PE6QNjI">
        <title>@yield('title')</title>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-562JNHZJ');</script>
        <!-- End Google Tag Manager -->
        <script defer src="{{ mix('js/main.js', '/assets/build') }}"></script>
        <script defer src="{{ $page->baseUrl }}/assets/build/js/main.js"></script>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="{{ mix('styles/styles.css', '/assets/build') }}">
        <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/build/css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js "></script>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        </head>

   
    <body class="text-gray-900 font-sans antialiased">
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-562JNHZJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@include('_partials.nav')
@yield(section: 'body')
@include('_partials.footer')

    </body>
    
    
<script type="text/javascript ">

function openTab(tabName) {
    document.querySelectorAll('.mobile-tab-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.mobile-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab(\'' + tabName + '\')"]').classList.add('active');
}

function openTab2(tabName2) {
    document.querySelectorAll('.desktop-tab-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.desktop-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName2 + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab2(\'' + tabName2 + '\')"]').classList.add('active');
}

function openTab3(tabName3) {
    document.querySelectorAll('.digital-media-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.digital-media-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName3 + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab3(\'' + tabName3 + '\')"]').classList.add('active');
}

function openTab4(tabName4) {
    document.querySelectorAll('.Prowess-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.Prowess-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName4 + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab4(\'' + tabName4 + '\')"]').classList.add('active');
}

function showNextTab(section) {
    var tabs = document.querySelectorAll('.' + section + '-tab');
    var activeIndex = Array.from(tabs).findIndex(tab => tab.classList.contains('active'));

    if (activeIndex < tabs.length - 1) {
        openTab(section + (activeIndex + 1));
    }
}

function showPrevTab(section) {
    var tabs = document.querySelectorAll('.' + section + '-tab');
    var activeIndex = Array.from(tabs).findIndex(tab => tab.classList.contains('active'));

    if (activeIndex > 0) {
        openTab(section + (activeIndex - 1));
    }
}

$(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 200) {
                $(".pixcile-header").addClass("white-header");
            } else {
                $(".pixcile-header").removeClass("white-header");
            }
        });
        
        const more_option = document.getElementById("nav-btn");
        const mega_option = document.querySelector(".header-nav");
        
        more_option.addEventListener("click", (e) => {
            e.preventDefault();
            mega_option.classList.toggle("open-menu");
            more_option.classList.toggle("nav-open");
        });
        
        
        more_option.addEventListener("click", (e) => {
            if (e.defaultPrevented) return;
            mega_option.classList.remove("open-menu");
            more_option.classList.remove("nav-open");
        }); 

</script>
</html>
