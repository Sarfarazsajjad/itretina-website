@extends('_layouts.main')

<head>

    <title>ITRetina - ERP Next</title>

</head>
@section('body')
<!-- Top Hero Section -->
<div class="container text-center my-5 bg-light p-5 shadow-elevation">
    <h1 class="mb-4">
        Where Your Business Needs Meet ERP Excellence.
    </h1>
</div>

<!-- Unique Software Development Services Section -->


@include('_partials.right-image-left-text',
['cardHeading1' => 'Unlock Your Business Potential with ERPNext.',
'desc' => 'Our team of ERP enthusiasts is committed to diving deep into your unique business needs and crafting
tailored solutions that drive
results. With our data-powered ERP services, you`ll unlock real-time insights, analytics, and
streamlined workflows, propelling
your growth and enhancing customer relationships. We`re here to empower you with the tools and
strategies needed to not only succeed
but to excel in today`s dynamic business environment. With our data-powered ERP services, you`ll unlock
real-time insights,
analytics, and streamlined workflows. Your exciting journey to success starts right here, and we`re here
to guide you every step
of the way, ensuring you make the most of your ERP system and achieve your goals.',
'image'=>'assets/images/software.jpg',
'imageAlt'=>'Software Development'])
<!-- Unique Features Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">What Sets Us Apart?</h2>
    <div class="row justify-content-center">
        <!-- Expert Team -->
        @include('_partials.what-set-us-apart',['cardTitle' => 'Expertise','desc'=>
        'By utilizing our ERPNext services, your can significantly improve efficiency and productivity.
        With streamlined
        processes, integrated systems, and automation, your tasks can be accomplished in minutes. This
        translates into significant
        time and cost savings, allowing you to focus on more strategic, value-added activities.'])

        <!-- Custom Solutions -->
        @include('_partials.what-set-us-apart',['cardTitle' => 'Custom Solutions','desc'=>
        'Our ERPNext services provide you with robust data collection, analysis, and reporting
        capabilities. With real-time insights
        and analytics at your fingertips, you can make data-driven decisions that improve your business
        strategy, inventory management,
        customer relations, and overall performance.'])

        <!-- Cutting-Edge Technologies -->
        @include('_partials.what-set-us-apart',['cardTitle' => 'Cutting-Edge Technologies','desc'=>'One of the standout
        features of our ERPNext services is
        our ability to tailor the ERP system to
        your specific business
        requirements and our customization services Providing you a system that not only meets your
        needs but also grows with
        your business in the long term.'])

    </div>
</div>
<!-- Our Software Development Services Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Our Software Development Services</h2>
    <div class="row">

        <!-- Feature 1 -->
        @include('_partials.it-features',
        ['heading' => 'Service Desk',
        'desc'=>'Experience unparalleled customer support with our ERPNext Service Desk solutions. Our expertise
        ensures your customers are
        always heard, their concerns addressed, and their satisfaction guaranteed. With real-time ticket
        tracking, automated responses,
        and a user-friendly interface, we ensure seamless communication between your business and your
        valued customers.',
        'icon'=>'bi-laptop'])
        <!-- Feature 2 -->
        @include('_partials.it-features',
        ['heading' => 'CRM',
        'desc'=> 'Transform your customer relationship management with our ERPNext CRM solutions. Drive sales, nurture
        leads, and build lasting
        relationships. Our team`s deep understanding of ERPNext ensures that you can segment your audience,
        forecast sales, and automate
        marketing tasks with precision. Trust us to empower your salesforce with the tools they need for
        success.',
        'icon'=>'bi-people-fill'])
        <!-- Feature 3 -->
        @include('_partials.it-features',['heading' => 'Inventory Management',
        'desc'=>'Streamline and optimize your inventory with ERPNext. Our solutions help you maintain the perfect
        balance - minimizing holding
        costs while ensuring stock availability. Track products, manage suppliers, and get real-time
        insights into your inventory
        status. Let us help you ensure that your business never misses a beat due to stockouts or
        overstocking.',
        'icon'=>'bi-cart-fill'])
        <!-- Feature 4 -->
        @include('_partials.it-features',['heading' => 'POS',
        'desc'=>'Revolutionize your retail or restaurant business with our ERPNext POS solutions. Experience
        lightning-fast billing, real-time
        stock updates, and comprehensive sales reports, all integrated into a single system. We provide both
        offline and online POS
        solutions, ensuring that your business keeps running, no matter what.',
        'icon'=>'bi-upc'])

        <!-- Feature 5 -->
        @include('_partials.it-features',['heading' => 'Custom Application',
        'desc'=>'Every business is unique, and so are its needs. Our team excels in developing custom Frappe and
        ERPNext apps tailored to your
        specific requirements. From design to deployment, we handle it all. Enhance your ERPNext experience
        with functionalities built
        just for you.',
        'icon'=>'bi-tools'])


    </div>
</div>
@include('_partials.footer')
@endsection