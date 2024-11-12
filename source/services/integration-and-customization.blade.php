@extends('_layouts.main')

@section('title', 'ITRetina - Integration And Customization ')

@section('body')

<section class="banner home-banner" id="banner-layer" style="background-image: url('{{ $page->baseUrl }}/assets/images/banner-bg.svg'); background-size: cover; background-position: center;" >
<img class="banner-shape1"  src="{{ $page->baseUrl }}/assets/images/banner-shap1.svg" alt="Banner Shape 1" />
<img class="banner-shape2" src="{{ $page->baseUrl }}/assets/images/banner-shap2.svg" alt="Banner Shape 2" />

@php
    $title = 'Catalyzing Efficiency, Tailoring Excellence.';
    $buttonLink = '/contact-us'; 
    $buttonText = 'Get More Info'; 
    $desc1='';
@endphp

@include('_partials.main-title-page', compact('title', 'buttonLink', 'buttonText','desc1'))


</section>

@include('_partials.same-sec-left-text',
['cardHeading2'=>'Seamless Integration and Personalized Customization',
'desc2' => 'Connecting diverse software applications for efficient data flow while also tailoring technology platforms to your specific needs. This integration ensures streamlined operations, reduces redundancy, and enhances productivity, while our customization services focus on optimizing user experiences and process efficiency.',
'image'=>'assets/images/integration-main.jpg',
'imageAlt'=>'Software Development'])

@include('_partials.set-us-part', [
        'heading' => 'What',
        'subheading' => 'Sets Us Apart?',





        'cards' => [
            [
                'image' => '/assets/images/i.png',
                'title' => 'Tailored Solutions',
                'description' => 'We understand that one size does not fit all. Our services are uniquely customized to match your specific needs, ensuring that your software and platforms work seamlessly according to your requirements.'

            ],
            [
                'image' => '/assets/images/ii.png',
                'title' => 'Comprehensive Expertise',
                'description' => 'With our in-depth knowledge and experience, we cover both integration and customization, providing a holistic solution that streamlines processes and optimizes user experiences under one roof.'
            ],
            [
                'image' => '/assets/images/iii.png',
                'title' => 'Client-Centric Approach',
                'description' => 'Our customer-first philosophy means that we collaborate closely with you, understanding your goals and challenges, to deliver solutions that not only meet your current needs but also adapt and evolve with your business.'

            ]
        ]


        
    ])
    @include('_partials.software-development-services-section', [
        'heading' => 'Our Integration &',
        'subheading' => 'Customization Services',
        'tabs' => [
            [
                'id' => 'Cloud',
                'title' => 'Software Integration',
                'image' => '/assets/images/integration01.svg',
                'description' => 'Our software integration services enable the seamless connection and synchronization of diverse software applications, allowing for the efficient flow of data and functionality within your organization. By harmonizing these systems, we enhance productivity, reduce redundancy, and ensure a smoother workflow.',
                'link' => '#'
            ],
            [
                'id' => 'Cloud-mitigation',
                'title' => 'Platform Customization',
                'image' => '/assets/images/integration02.svg',
                'description' => 'We specialize in tailoring technology platforms to match your unique requirements, ensuring that your website or software operates exactly as you envision. Our customization services encompass everything from user interface adjustments to fine-tuning features, providing an improved user experience and increased operational efficiency.',
                'link' => '#'
            ],
             
        ]
    ])
    
@endsection