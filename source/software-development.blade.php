@extends('_layouts.main')

<head>
    <title>ITRetina - Software Development</title>
</head>
@section('body')

<!-- Top Hero Section -->
<div class="container text-center my-5 bg-light p-5 shadow-elevation">
    <h1 class="mb-4">
        Turning Ideas into Code, Code into Solutions.
    </h1>
</div>

<!-- Unique Software Development Services Section -->

@include('_partials.right-image-left-text',
['cardHeading1' => 'Custom Code, Tailored Solutions, Unique Results.',
'desc' => 'We are a team of devoted experts who demonstrate excellence across various domains of software
development.
Our comprehensive
software development services cover a wide spectrum of needs. In the realm of mobile applications, our
experts
excel in developing
both native apps for iOS and Android and cross-platform solutions. This versatility extends your reach
to a
broader audience,
and we`re dedicated to delivering seamless and engaging mobile experiences. On the web front, our
development
team harnesses the
power of Codeigniter with PHP and Node.js with TypeScript, building robust and scalable web
applications.
Additionally, we
specialize in crafting user-friendly interfaces using React.js and Angular, ensuring that your web
applications are not only
visually appealing but also highly intuitive and responsive.',
'image'=>'assets/images/software.jpg',
'imageAlt'=>'Software Development'])

<!-- Unique Features Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">What Sets Us Apart?</h2>
    <div class="row justify-content-center">
        @include('_partials.what-set-us-apart',['cardTitle' => 'Expertise','desc'=>
        ' Our team consists of highly skilled developers, designers, and project managers with extensive experience
        in the field. We are well-versed in various technologies and platforms, ensuring your project is in
        capable hands.'])
        @include('_partials.what-set-us-apart',['cardTitle' => 'Custom Solutions','desc'=>
        'We understand that one-size-fits-all solutions don`t work. Our approach is entirely tailored to your
        unique business needs. We closely collaborate with you to grasp your requirements and create software
        that`s a perfect fit.'])
        @include('_partials.what-set-us-apart',['cardTitle' => 'Cutting-Edge Technologies','desc'=>
        'We stay at the forefront of technology trends, utilizing the latest tools and frameworks to craft
        innovative solutions that provide your business with a competitive edge.'])
    </div>
</div>
<!-- Our Software Development Services Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Our Software Development Services</h2>
    <div class="row">

        <!-- Feature 1 -->
        @include('_partials.it-features',
        ['heading' => 'Custom Software Development',
        'desc'=>'We create custom software solutions that enhance operational efficiency and customer satisfaction.
        Our
        expert team ensures reliability and scalability using cutting-edge technologies, from concept to
        deployment.',
        'icon'=>'bi-file-code-fill'])
        <!-- Feature 2 -->
        @include('_partials.it-features',
        ['heading' => 'Single Page Applications',
        'desc'=> 'We specialize in creating fast, interactive Single Page Applications (SPAs) using ReactJS and
        Angular. Our
        SPAs engage users seamlessly, ensuring a great user experience across devices.',
        'icon'=>'bi-laptop'])
        <!-- Feature 3 -->
        @include('_partials.it-features',['heading' => 'Web Scraping Services',
        'desc'=>' We use Python-based technology to gather valuable data from diverse online sources. Our custom
        solutions
        ensure accurate and up-to-date information for tracking market trends, monitoring competitors, and
        supporting your business decisions.',
        'icon'=>'bi-box-arrow-down'])
        <!-- Feature 4 -->
        @include('_partials.it-features',['heading' => 'Specialized Systems',
        'desc'=>' We specialize in building specialized software systems, including CRM, Billing, and Multi-vendor
        platforms.
        Our expert developers use cutting-edge technology to create scalable and efficient solutions that drive your
        business success.',
        'icon'=>'bi-tools'])

    </div>
</div>

@include('_partials.it-footer')

@endsection