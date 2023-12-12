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
to leading cloud platforms, including AWS, Amazon`s cloud platform, Azure by 
Microsoft,and Google Cloud Platform GCP). Our expert team creates a
customized migration plans for each platform, ensuring a smooth transition of your
data, applications, and workloads. This process minimizes
disruptions and maximizes the the scalability and security benefits of each 
cloud provider. Whether you choose AWS, Azure, or GCP, we enable you to 
increase agility, reduce costs, and embrace the future of cloud computing 
with confidence in our capable hands.',
'image'=>'assets/images/cloud.jpg',
'imageAlt'=>'Cloud Services'])

<!-- Unique Features Section -->

<div class="container my-5">
    <h2 class="text-center mb-4">What sets Us Apart?</h2>
    <div class="row justify-content-lg-center">
        <!-- Added justify-content-lg-center -->
        <!-- Tailored AWS experience -->
        @include('_partials.what-set-us-apart',['cardTitle' => 'Tailored Cloud Experience','desc'=>
        'We specialize in AWS, Azure, and GCP to optimize your cloud migration. 
        Maximize benefits, from cost-efficiency on AWS to seamless integration 
        with Azure and advanced analytics on GCP.'])
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
        'desc'=>'Elevate your business by migrating to Google Cloud Platform 
        (GCP), Microsoft Azure, and Amazon Web Services (AWS). Our experts 
        ensure a seamless transition, boosting scalability, flexibility, and 
        cost-efficiency for your organization.',
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