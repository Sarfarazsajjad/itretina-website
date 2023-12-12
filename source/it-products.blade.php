@extends('_layouts.main')

<head>

    <title>ITRetina - IT Products</title>

</head>
@section('body')

<!-- Top Hero Section -->
<div class="container text-center my-5 bg-light p-5 shadow-elevation">
    <h1 class="mb-4">
        Elevate Your Operations with Cutting-Edge IT Products
    </h1>
</div>

<!-- Unique Restaurant Management Services Section -->
@include('_partials.right-image-left-text',
['cardHeading1' => 'Revolutionizing Your Industry with Distinctive IT Products',
'desc' => 'We`ve created a versatile product available on CodeCanyon, enabling businesses to launch their branded
apps on both iOS and Android stores. Our solution, built with Flutter for mobile apps, Angular for the web app`s
frontend,
and Node.js with TypeScript for the backend, offers a hassle-free approach. Customers can purchase a license, including
backend and app hosting services, or opt for the source code-only version, giving them the flexibility to self-deploy or
hire their preferred technical experts.',
'image'=>'assets/images/software.jpg',
'imageAlt'=>'IT Support'])

<div class="container my-5">
    <h2 class="text-center mb-4">Our Products</h2>
</div>

<!-- Pizza App Section -->
@include('_partials.left-image-right-text-button',
['cardHeading1' => 'Pizza App',
'desc' => 'Introducing a game-changing solution for pizza restaurants. Our cutting-edge application is designed to
streamline the pizza ordering process for your establishment. With a user-friendly interface, your customers
can
effortlessly place orders, customize their pizzas to perfection, and ensure a seamless ordering experience. By
integrating our Pizza App, your restaurant can enhance customer satisfaction, boost efficiency, and stay ahead
of
the competition. Contact us today to revolutionize your pizza ordering experience.',
'buttonLink'=>'work-in-progress',
'buttonText'=>'Get More Info',
'image'=>'assets/images/pizza.jpg',
'imageAlt'=>'Cloud Services'])


<!-- Burger App section -->
@include('_partials.right-image-left-text-button',
['cardHeading1' => 'Burger App',
'desc' => 'Step into the future of burger ordering with our innovative application. Designed for burger restaurants, our
user-friendly app simplifies the ordering process, enabling your customers to create their perfect burger,
customize ingredients, and enjoy a smooth ordering experience. Revolutionize the way your burger restaurant
serves its customers, ensuring satisfaction with each bite.',
'buttonLink'=>'work-in-progress',
'buttonText'=>'Get More Info',
'image'=>'assets/images/billing-image-2.jpeg',
'imageAlt'=>'IT Support'])

<!-- Unique Features Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">What sets Us Apart?</h2>
    <div class="row justify-content-lg-center">

        <!-- Tailored solutions for our business -->
        @include('_partials.what-set-us-apart',['cardTitle' => 'Perceptive Development','desc'=>
        'We have a profound understanding of diverse business processes and requirements, allowing us to
        offer custom solutions that truly align with your unique needs.'])


        <!-- Proactive problem solving -->
        @include('_partials.what-set-us-apart',['cardTitle' => 'Flexibility & Integration Expertise','desc'=>
        'We offer flexibility by adapting to your unique requirements and integrating new software with your
        existing
        systems, ensuring minimal disruption and maximum efficiency.'])


        <!-- Exceptional Customer Service -->
        @include('_partials.what-set-us-apart',['cardTitle' => 'Supportiveness','desc'=>
        'We collaborate closely to fully understand your objectives and deliver solutions to enhance efficiency and
        adapt to
        your evolving needs so that your business stays ahead, meeting the challenges while maximizing
        opportunities.'])


    </div>
</div>

@include('_partials.it-footer')

@endsection