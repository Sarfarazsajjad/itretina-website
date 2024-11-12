@extends('_layouts.main')

@section('title', 'ITRetina - IT Support')

@section('body')

<section class="banner home-banner" id="banner-layer" style="background-image: url('{{ $page->baseUrl }}/assets/images/banner-bg.svg'); background-size: cover; background-position: center;" >
<img class="banner-shape1"  src="{{ $page->baseUrl }}/assets/images/banner-shap1.svg" alt="Banner Shape 1" />
<img class="banner-shape2" src="{{ $page->baseUrl }}/assets/images/banner-shap2.svg" alt="Banner Shape 2" />

@php
    $title = 'Empowering Business Success Through Exceptional IT Support.';
    $buttonLink = '/contact-us'; 
    $buttonText = 'Get More Info'; 
@endphp

@include('_partials.dynamic-headings', compact('title', 'buttonLink', 'buttonText'))


</section>

@include('_partials.same-sec-left-text',
['cardHeading2'=>'Comprehensive IT Infrastructure-Support and Monitoring',
'desc2' => ' Experience the peace of mind that comes with our all-encompassing IT support services. We diligently monitor both cloud and in-house infrastructure, proactively addressing issues like server patching, security updates, and resource upgrades. Our expert team excels at swiftly implementing network changes and granting access permissions. When additional resources are needed, we seamlessly provision virtual machines with the required networking configurations. Your IT needs are efficiently managed.',
'image'=>'assets/images/support.jpg',
'imageAlt'=>'it-support'])

@include('_partials.set-us-part', [
        'heading' => 'What',
        'subheading' => 'Sets Us Apart?',





        'cards' => [
            [
                'image' => '/assets/images/i.png',
                'title' => 'Tailored Solutions',
                'description' => 'We understand that every organization is unique, and so are their IT needs. Our team works closely with you to understand your specific requirements and designs customized IT support strategies that align perfectly with your business objectives. We deliver services as unique as your organization.'

            ],
            [
                'image' => '/assets/images/ii.png',
                'title' => 'Proactive Problem-Solving',
                'description' => 'Our proactive monitoring and maintenance protocols identify potential problems before they impact your operations, allowing us to address them in advance, minimizing downtime, and reducing costs, providing you with a more reliable and stable IT environment.'    
            ],
            [
                'image' => '/assets/images/iii.png',
                'title' => 'Exceptional Customer Service',
                'description' => 'Our commitment to outstanding customer service means we prioritize transparent communication, rapid responses, and a friendly, approachable attitude. You can count on us not only for solving technical issues but also for ensuring a positive and enjoyable interaction with our IT support team.'

            ]
        ]


        
    ])
    @include('_partials.software-development-services-section', [
        'heading' => 'Our IT',
        'subheading' => 'Support Services',
        'tabs' => [
            [
                'id' => 'IT-Service-Desk',
                'title' => 'IT Service Desk',
                'image' => '/assets/images/Dekstop02.svg',
                'description' => 'Our IT Service Desk is your first point of contact for technical assistance and issue resolution. Our team of skilled technicians is available to provide prompt and reliable support, ensuring that your technology challenges are addressed efficiently, minimizing downtime, and keeping your business operations running smoothly.',
                'link' => '#'
            ],
            [
                'id' => 'Infrastructure-Support',
                'title' => 'Infrastructure Support',
                'image' => '/assets/images/cloud02.svg',
                'description' => 'Our Infrastructure Support services focus on maintaining and optimizing your organization`s IT backbone. We offer comprehensive solutions for managing and enhancing your network, servers, and hardware. Whether it`s troubleshooting, upgrading, or ensuring the security and performance of your infrastructure, our experts are here to safeguard your IT investments.',
                'link' => '#'
            ],
           
           
        ]
    ])
    
@endsection