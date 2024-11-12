@extends('_layouts.main')

@section('title', 'ITRetina - Erp next')

@section('body')

<section class="banner home-banner" id="banner-layer" style="background-image: url('{{ $page->baseUrl }}/assets/images/banner-bg.svg'); background-size: cover; background-position: center;" >
<img class="banner-shape1"  src="{{ $page->baseUrl }}/assets/images/banner-shap1.svg" alt="Banner Shape 1" />
<img class="banner-shape2" src="{{ $page->baseUrl }}/assets/images/banner-shap2.svg" alt="Banner Shape 2" />

@php
    $title = 'Where Your Business Needs Meet ERP Excellence.';
    $buttonLink = 'contact-us'; 
    $buttonText = 'Get More Info'; 
@endphp

@include('_partials.dynamic-headings', compact('title', 'buttonLink', 'buttonText'))


</section>

@include('_partials.same-sec-left-text',
[
'cardHeading2' => 'Unlock Business Potential with ERPNext.',
'desc2' => 'Our team of ERP enthusiasts is committed to diving deep into your unique business needs and crafting tailored solutions that drive results. With our data-powered ERP services, you`ll unlock real-time insights, analytics, and streamlined workflows, propelling your growth and enhancing customer relationships. We`re here to empower you with the tools and strategies needed to not only succeed but to excel in today`s dynamic business environment. With our data-powered ERP services, you`ll unlock real-time insights, analytics, and streamlined workflows. Your exciting journey to success starts right here, and we`re here to guide you every step of the way, ensuring you make the most of your ERP system and achieve your goals.',
'image'=>'assets/images/web1.jpg',
'imageAlt'=>'erp-next'
])

@include('_partials.set-us-part', [
        'heading' => 'What',
        'subheading' => 'Sets Us Apart?',





        'cards' => [
            [
                'image' => '/assets/images/i.png',
                'title' => 'Expertise',
                'description' => 'By utilizing our ERPNext services, your can significantly improve efficiency and productivity. With streamlined processes, integrated systems, and automation, your tasks can be accomplished in minutes. This translates into significant time and cost savings, allowing you to focus on more strategic, value-added activities.'

            ],
            [
                'image' => '/assets/images/ii.png',
                'title' => 'Custom Solutions',
                'description' => 'Our ERPNext services provide you with robust data collection, analysis, and reporting capabilities. With real-time insights and analytics at your fingertips, you can make data-driven decisions that improve your business strategy, inventory management, customer relations, and overall performance.'
            ],
            [
                'image' => '/assets/images/iii.png',
                'title' => 'Cutting-Edge Technologies',
                'description' => 'One of the standout features of our ERPNext services is our ability to tailor the ERP system to your specific business requirements and our customization services Providing you a system that not only meets your needs but also grows with your business in the long term.'
            ]
        ]


        
    ])
    @include('_partials.software-development-services-section', [
        'heading' => 'Our Software',
        'subheading' => 'Development Services',
        'tabs' => [
            [
                'id' => 'Digital',
                'title' => 'Service Desk',
                'image' => '/assets/images/software01.svg',
                'description' => 'Experience unparalleled customer support with our ERPNext Service Desk solutions. Our expertise ensures your customers are always heard, their concerns addressed, and their satisfaction guaranteed. With real-time ticket tracking, automated responses, and a user-friendly interface, we ensure seamless communication between your business and your valued customers.',
                'link' => '#'
            ],
            [
                'id' => 'social',
                'title' => 'CRM',
                'image' => '/assets/images/dekstop03.svg',
                'description' => 'Transform your customer relationship management with our ERPNext CRM solutions. Drive sales, nurture leads, and build lasting relationships. Our team`s deep understanding of ERPNext ensures that you can segment your audience, forecast sales, and automate marketing tasks with precision. Trust us to empower your salesforce with the tools they need for success.',
                'link' => '#'
            ],
            [
                'id' => 'Paid',
                'title' => 'Inventory Management',
                'image' => '/assets/images/scarping05.svg',
                'description' => 'Streamline and optimize your inventory with ERPNext. Our solutions help you maintain the perfect balance - minimizing holding costs while ensuring stock availability. Track products, manage suppliers, and get real-time insights into your inventory status. Let us help you ensure that your business never misses a beat due to stockouts or overstocking.',
                'link' => '#'
            ],
            [
                'id' => 'Search',
                'title' => 'POS',
                'image' => '/assets/images/systems04.svg',
                'description' => 'Revolutionize your retail or restaurant business with our ERPNext POS solutions. Experience lightning-fast billing, real-time stock updates, and comprehensive sales reports, all integrated into a single system. We provide both offline and online POS solutions, ensuring that your business keeps running, no matter what.',
                'link' => 'seo-service.html',
            ],
            [
                
                'id' => 'custom',
                'title' => 'Custom Application',
                'image' => '/assets/images/systems04.svg',
                'description' => ' Every business is unique, and so are its needs. Our team excels in developing custom Frappe and ERPNext apps tailored to your specific requirements. From design to deployment, we handle it all. Enhance your ERPNext experience with functionalities built just for you.',
                'link' => '#',
                
                
            ]
            
        ]
    ])
    
@endsection