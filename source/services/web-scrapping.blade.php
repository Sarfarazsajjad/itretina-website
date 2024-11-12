@extends('_layouts.main')

@section('title', 'ITRetina - web-scrapping')

@section('body')

<section class="banner home-banner" id="banner-layer" style="background-image: url('{{ $page->baseUrl }}/assets/images/banner-bg.svg'); background-size: cover; background-position: center;" >
<img class="banner-shape1"  src="{{ $page->baseUrl }}/assets/images/banner-shap1.svg" alt="Banner Shape 1" />
<img class="banner-shape2" src="{{ $page->baseUrl }}/assets/images/banner-shap2.svg" alt="Banner Shape 2" />


@php
    $title = 'Transforming Web Data into Wisdom.';
    $buttonLink = 'contact-us'; 
    $buttonText = 'Get More Info'; 
@endphp

@include('_partials.dynamic-headings', compact('title', 'buttonLink', 'buttonText'))


</section>

@include('_partials.same-sec-left-text',

['cardHeading2'=>' Elevate Your Data Game with Our Web Scraping Expertise.',
'desc2' => 'Unlock the Power of Web Data with Our Web Scraping Services! Our team is adept in the art of data extraction from the web, harnessing the capabilities of Python-based technologies. Whether you`re on a quest for market insights, aiming to outshine your competitors, or pursuing any data-driven ambition, our web scraping expertise has you covered. We`re your passport to a world of valuable data, empowering you with the insights needed for informed, strategic decision-making.',
'image'=>'assets/images/web1.jpg',
'imageAlt'=>'Web-scrap'])

@include('_partials.set-us-part', [
        'heading' => 'What',
        'subheading' => 'Sets Us Apart?',





        'cards' => [
            [
                'image' => '/assets/images/i.png',
                'title' => 'Customized Precision',
                'description' => 'Our web scraping services are customized to your specific needs. We don`t believe in one-size-fits-all solutions. Whether you require data from a single source or multiple websites, we ensure you get the precise information you need.'

            ],
            [
                'image' => '/assets/images/ii.png',
                'title' => 'Robust Technology',
                'description' => 'We employ advanced technology and techniques for deep and accurate data extraction. Our advanced scraping techniques go beyond the surface, delving deep to retrieve comprehensive and accurate information that you can rely on.'

            ],
            [
                'image' => '/assets/images/ii.png',
                'title' => 'Compliance and Ethics',
                'description' => 'We prioritize ethical and legal web scraping practices by respecting terms of use and privacy policies, ensuring your data collection is reliable and responsible. Maintaining your compliance and reputation while delivering valuable data.'

            ]
        ]


        
    ])

@endsection