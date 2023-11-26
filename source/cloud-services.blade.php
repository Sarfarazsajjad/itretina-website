@extends('_layouts.main')

<head>

    <title>ITRetina - Cloud Services</title>

</head>
@section('body')
<!-- Top Hero Section -->
<div class="container text-center my-5 bg-light p-5 shadow-elevation">
    <h1 class="mb-4">
        Empowering Your Cloud Journey, Every Step of the Way.
    </h1>
</div>

<!-- Unique Dental Billing Services Section -->

@include('_partials.right-image-left-text',
['cardHeading1' => 'Migrating in-house IT infrastructure to the cloud.',
'desc' => 'We specialize in seamlessly moving your in-house IT infrastructure
to AWS, Amazon`s cloud platform. Our expert team creates a
customized migration plan, ensuring a smooth transition of your
data, applications, and workloads. This process minimizes
disruptions and maximizes the benefits of AWS`s scalability and
security, allowing you to increase agility and reduce costs. Embrace
the future of cloud computing with confidence in our capable hands.',
'image'=>'assets/images/cloud.jpg',
'imageAlt'=>'Cloud Services'])

<!-- Unique Features Section -->

<div class="container my-5">
    <h2 class="text-center mb-4">What sets Us Apart?</h2>
    <div class="row justify-content-lg-center">
        <!-- Added justify-content-lg-center -->
        <!-- Tailored AWS experience -->
        @include('_partials.what-set-us-apart',['cardTitle' => 'Tailored AWS experience','desc'=>
        'Our specialized focus on AWS ensures that your cloud migration
        and operations are optimized for AWS`s unique features. We
        tailor our solutions to maximize the benefits of AWS, from
        cost-efficiency to scalability.'])
        <!-- Proactive problem solving -->
        @include('_partials.what-set-us-apart',['cardTitle' => 'Proactive Problem Solving','desc'=>
        'Our team is proactive in identifying and resolving issues before
        they impact your business. We don`t just fix problems; we
        prevent them, allowing you to operate smoothly and with peace of
        mind.'])

        <!-- Exceptional Customer Service -->
        @include('_partials.what-set-us-apart',['cardTitle' => 'End-to-End Support','desc'=>
        'We offer comprehensive, end-to-end support, from planning and
        migration to ongoing monitoring and maintenance. This holistic
        approach ensures a seamless and worry-free cloud experience'])
    </div>
</div>


<!-- Our IT Support Services Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Our Cloud Services</h2>
    <div class="row">
        <!-- Feature 1 -->
        @include('_partials.dental-features',
        ['heading' => 'Cloud Mitigation',
        'desc'=>'Streamline your business operations by migrating your in-house IT
        infrastructure to the powerful and secure world of Amazon Web
        Services (AWS). Our experts ensure a seamless transition to the
        cloud, enhancing scalability, flexibility, and cost-efficiency for
        your organization',
        'icon'=>'bi-cloud-check-fill'])


        <!-- Feature 2 -->
        @include('_partials.dental-features',
        ['heading' => 'Cloud Mitigation',
        'desc'=>'Gain real-time visibility into your on-premise and cloud
        infrastructure with our advanced monitoring solutions. We help you
        maintain peak performance, identify potential issues before they
        impact your business, and ensure a smooth and uninterrupted
        operation.',
        'icon'=>'bi-modem-fill'])


        <!-- Feature 3 -->
        @include('_partials.dental-features',
        ['heading' => 'Software and Cloud Automation',
        'desc'=>'Harness the full potential of automation to optimize your software
        and cloud operations. Our automation services streamline routine
        tasks, reduce human error, and improve resource allocation, freeing
        your team to focus on innovation and growth.',
        'icon'=>'bi-gear-wide-connected'])

    </div>
</div>
@include('_partials.it-footer')

@endsection