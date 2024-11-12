@extends('_layouts.main')

@section('title', 'ITRetina - Software Development')

@section('body')

<section class="banner home-banner" id="banner-layer" style="background-image: url('{{ $page->baseUrl }}/assets/images/banner-bg.svg'); background-size: cover; background-position: center;" >
<img class="banner-shape1"  src="{{ $page->baseUrl }}/assets/images/banner-shap1.svg" alt="Banner Shape 1" />
<img class="banner-shape2" src="{{ $page->baseUrl }}/assets/images/banner-shap2.svg" alt="Banner Shape 2" />

@php
    $title = 'Turning Ideas into Code, Code into Solutions.';
    $buttonLink = 'contact-us'; 
    $buttonText = 'Get More Info'; 
@endphp

@include('_partials.dynamic-headings', compact('title', 'buttonLink', 'buttonText'))


</section>

@include('_partials.same-sec-left-text',
['cardHeading2'=>'Custom Code, Tailored Solutions, Unique Results.',
'desc2' => 'We are a team of devoted experts who demonstrate excellence across various domains of software development. Our comprehensive software development services cover a wide spectrum of needs. In the realm of mobile applications, our experts excel in developing both native apps for iOS and Android and cross-platform solutions. This versatility extends your reach to a broader audience, and we`re dedicated to delivering seamless and engaging mobile experiences. On the web front, our development team harnesses the power of Codeigniter with PHP and Node.js with TypeScript, building robust and scalable web applications. Additionally, we specialize in crafting user-friendly interfaces using React.js and Angular, ensuring that your web applications are not only visually appealing but also highly intuitive and responsive.',
'image'=>'assets/images/web1.jpg',
'imageAlt'=>'Software Development'])

@include('_partials.set-us-part', [
        'heading' => 'What',
        'subheading' => 'Sets Us Apart?',





        'cards' => [
            [
                'image' => '/assets/images/i.png',
                'title' => 'Expertise',
                'description' => 'Our team consists of highly skilled developers, designers, and project managers with extensive experience in the field. We are well-versed in various technologies and platforms, ensuring your project is in capable hands.

'
            ],
            [
                'image' => '/assets/images/ii.png',
                'title' => 'Custom Solutions',
                'description' => 'We understand that one-size-fits-all solutions don`t work. Our approach is entirely tailored to your unique business needs. We closely collaborate with you to grasp your requirements and create software that`s a perfect fit.

'
            ],
            [
                'image' => '/assets/images/iii.png',
                'title' => 'Cutting-Edge Technologies',
                'description' => 'We stay at the forefront of technology trends, utilizing the latest tools and frameworks to craft innovative solutions that provide your business with a competitive edge.

'
            ]
        ]


        
    ])
    @include('_partials.software-development-services-section', [
        'heading' => 'Our Software',
        'subheading' => 'Development Services',
        'tabs' => [
            [
                'id' => 'Digital',
                'title' => 'Custom Software Development',
                'image' => '/assets/images/software01.svg',
                'description' => 'We create custom software solutions that enhance operational efficiency and customer satisfaction. Our expert team ensures reliability and scalability using cutting-edge technologies, from concept to deployment.',
                'link' => '#'
            ],
            [
                'id' => 'social',
                'title' => 'Web Scraping Services',
                'image' => '/assets/images/dekstop03.svg',
                'description' => 'We specialize in creating fast, interactive Single Page Applications (SPAs) using ReactJS and Angular. Our SPAs engage users seamlessly, ensuring a great user experience across devices.',
                'link' => 'social-media-service.html'
            ],
            [
                'id' => 'Paid',
                'title' => 'Single Page Applications',
                'image' => '/assets/images/scarping05.svg',
                'description' => 'We use Python-based technology to gather valuable data from diverse online sources. Our custom solutions ensure accurate and up-to-date information for tracking market trends, monitoring competitors, and supporting your business decisions.',
                'link' => '#'
            ],
            [
                'id' => 'Search',
                'title' => 'Specialized Systems',
                'image' => '/assets/images/systems04.svg',
                'description' => 'We specialize in building specialized software systems, including CRM, Billing, and Multi-vendor platforms. Our expert developers use cutting-edge technology to create scalable and efficient solutions that drive your business success.',
                'link' => 'seo-service.html',
            ]
        ]
    ])
    
@endsection