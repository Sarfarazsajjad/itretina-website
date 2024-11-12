        @extends('_layouts.main')

        @section('title', 'ITRetina - Cloud Services')

        @section('body')

        <section class="banner home-banner" id="banner-layer" style="background-image: url('{{ $page->baseUrl }}/assets/images/banner-bg.svg'); background-size: cover; background-position: center;" >
        <img class="banner-shape1"  src="{{ $page->baseUrl }}/assets/images/banner-shap1.svg" alt="Banner Shape 1" />
        <img class="banner-shape2" src="{{ $page->baseUrl }}/assets/images/banner-shap2.svg" alt="Banner Shape 2" />

        @php
            $title = 'Empowering Your Cloud Journey, Every Step of the Way.';
            $buttonLink = 'contact-us'; 
            $buttonText = 'Get More Info'; 
        @endphp

        @include('_partials.dynamic-headings', compact('title', 'buttonLink', 'buttonText'))


        </section>

        @include('_partials.same-sec-left-text',
        ['cardHeading2'=>'Migrating in-house IT infrastructure to-the-cloud.',
        'desc2' => ' We specialize in seamlessly moving your in-house IT infrastructure to leading cloud platforms, including AWS, Amazon`s cloud platform, Azure by Microsoft,and Google Cloud Platform GCP. Our expert team creates a customized migration plans for each platform, ensuring a smooth transition of your data, applications, and workloads. This process minimizes disruptions and maximizes the the scalability and security benefits of each cloud provider. Whether you choose AWS, Azure, or GCP, we enable you to increase agility, reduce costs, and embrace the future of cloud computing with confidence in our capable hands.',
        'image'=>'assets/images/cloud-services.jpg',
        'imageAlt'=>'Software Development'])

        @include('_partials.set-us-part', [
                'heading' => 'What',
                'subheading' => 'Sets Us Apart?',





                'cards' => [
                    [
                        'image' => '/assets/images/i.png',
                        'title' => 'Tailored Cloud Experience',
                        'description' => 'We specialize in AWS, Azure, and GCP to optimize your cloud migration. Maximize benefits, from cost-efficiency on AWS to seamless integration with Azure and advanced analytics on GCP.'

                    ],
                    [
                        'image' => '/assets/images/ii.png',
                        'title' => 'End-to-End Support',
                        'description' => 'We offer comprehensive, end-to-end support, from planning and migration to ongoing monitoring and maintenance. This holistic approach ensures a seamless and worry-free cloud experience'
                    ],
                    [
                        'image' => '/assets/images/iii.png',
                        'title' => 'Proactive Problem Solving',
                        'description' => 'Our team is proactive in identifying and resolving issues before they impact your business. We don`t just fix problems; we prevent them, allowing you to operate smoothly and with peace of mind.'

                    ]
                ]


                
            ])
            @include('_partials.software-development-services-section', [
                'heading' => 'Our',
                'subheading' => 'Cloud Services',
                'tabs' => [
                    [
                        'id' => 'Cloud',
                        'title' => 'Cloud Mitigation',
                        'image' => '/assets/images/cloud01.svg',
                        'description' => 'Elevate your business by migrating to Google Cloud Platform (GCP), Microsoft Azure, and Amazon Web Services (AWS). Our experts ensure a seamless transition, boosting scalability, flexibility, and cost-efficiency for your organization.',
                        'link' => '#'
                    ],
                    [
                        'id' => 'Cloud-mitigation',
                        'title' => 'Cloud Mitigation',
                        'image' => '/assets/images/cloud02.svg',
                        'description' => 'We specialize in creating fast, interactive Single Page Applications (SPAs) using ReactJS and Angular. Our SPAs engage users seamlessly, ensuring a great user experience across devices.',
                        'link' => '#'
                    ],
                    [
                        'id' => 'soft-cloud',
                        'title' => 'Software and Cloud Automation',
                        'image' => '/assets/images/cloud03.svg',
                        'description' => 'Harness the full potential of automation to optimize your software and cloud operations. Our automation services streamline routine tasks, reduce human error, and improve resource allocation, freeing your team to focus on innovation and growth.',
                        'link' => '#'
                    ],
                
                ]
            ])
            
        @endsection