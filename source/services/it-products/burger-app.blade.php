@extends('_layouts.main')

@section('title', 'ITRetina - Burger app')

@section('body')



<section class="banner home-banner" id="banner-layer" style="background-image: url('{{ $page->baseUrl }}/assets/images/banner-bg.svg'); background-size: cover; background-position: center;" >
<img class="banner-shape1"  src="{{ $page->baseUrl }}/assets/images/banner-shap1.svg" alt="Banner Shape 1" />
<img class="banner-shape2" src="{{ $page->baseUrl }}/assets/images/banner-shap2.svg" alt="Banner Shape 2" />

@php
    $title = 'Burger App';
    $buttonLink = 'contact-us'; 
    $buttonText = 'Get More Info'; 
    $desc1='Step into the next frontier of burger dining with our revolutionary app! Get ready to turbocharge your restaurant`s operations with our innovative solution. It`s your ticket to a future of unparalleled efficiency and ecstatic customers. Effortlessly manage orders and create a menu as unique as your imagination. With our app, you`re the maestro of an unforgettable burger experience, setting the stage for an extraordinary culinary journey.';
@endphp

@include('_partials.burger-pizza', compact('title', 'buttonLink', 'buttonText','desc1'))



</section>


 <!-- Include Banner Section -->
 @include('_partials.pizza-burger-dynamic', [
        'banner_heading' => 'Crafting Burger ',
        'banner_subheading' => 'Perfection',
        'banner_description' => 'The `Burger App` is a dynamic mobile application, crafted using Flutter, aimed at empowering restaurant proprietors to efficiently handle their menu and orders across various digital platforms. Supported by a resilient Node.js backend, fortified with the prowess of TypeScript and TypeORM, it simplifies data management, ensuring a smooth and hassle-free experience. In addition, our `Burger App` admin panel website, constructed with Angular and HTML, offers an instinctive interface for restaurant owners to seamlessly oversee menu items and orders, guaranteeing a user-friendly and efficient experience for their valued customers.',
        'banner_button_text' => 'Get More Info',
        'banner_button_link' => 'contact-us.html',
        'banner_image_url' => '/assets/images/burger01.avif'
    ])

 @include('_partials.highlights-section-burger-app', [
        'startup_section_title' => 'Key ',
        'startup_section_subtitle' => 'Highlights',
        'highlights' => [
            ['title' => 'Real-Time Order Tracking', 'description' => 'Customers can track the status of their pizza orders in real-time, providing transparency and reassurance about the delivery process.'],
            ['title' => 'Multi-Platform Compatibility', 'description' => 'The app is accessible across multiple platforms, making it easy for customers to order from their preferred devices, whether it`s a smartphone, tablet, or computer.'],
            ['title' => 'Quick and Easy Ordering', 'description' => 'Enjoy effortless order management at your fingertips. Say goodbye to order-related headaches with swift and accurate order processing.'],
        ]
    ])

    @include('_partials.set-us-part', [
        'heading' => 'Why Choose Our ',
        'subheading' => 'Burger App',

        'cards' => [
            [
                'image' => '/assets/images/i.png',
                'title' => 'Ordering Made Effortless',
                'description' => 'Say goodbye to the complexities of traditional order management. Our app streamlines and simplifies the process, enhancing efficiency.'
            ],
            [
                'image' => '/assets/images/ii.png',
                'title' => 'Supporting Your Success',
                'description' => 'Our customer support team is committed to ensuring a seamless experience, ready to assist with any questions or concerns.'
            ],
            [
                'image' => '/assets/images/iii.png',
                'title' => 'Advanced Technology',
                'description' => 'Revolutionizing restaurant operations with advanced technology, our app simplifies order management and boosts efficiency..'
            ]
        ]


        
    ])
     

@endsection