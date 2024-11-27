@extends('_layouts.main')
@section('title', 'ITRetina')
@section( 'body')
 

<section class="banner home-banner" id="banner-layer" style="background-image: url('{{ $page->baseUrl }}assets/images/banner-bg.svg'); background-size: cover; background-position: center;" >
 

@php
$title = 'Introduction to Our IT Services';
$buttonLink = 'contact-us'; 
$buttonText = 'Get More Info'; 
$desc1='We dont just offer IT services; we craft comprehensive solutions that are meticulously tailored to meet the unique requirements of your business. Our dedicated team of proficient experts specializes in multiple domains of IT excellence, each designed to empower your business for success.';

@endphp

@include('_partials.main-title-page', compact('title', 'buttonLink', 'buttonText','desc1'))

</section>

<!-- Software Development Section -->
@include('_partials.right-image-left-text-button',
['cardHeading1' => 'Software Development',
'desc' => 'Whether you`re a startup looking to build your first application, a growing business in need of software
enhancements, or an enterprise seeking digital transformation, our team of experienced developers is here to turn your
vision into reality. We combine cutting-edge technology, industry best practices, and a client-centric approach to
deliver scalable, secure, and innovative software solutions that drive your business forward.',
'buttonLink'=>'services/index.html',
'buttonText'=>'Get More Info',
'image'=>'assets/images/software-development.jpg',
'imageAlt'=>'Software Development'])


<!-- Web Scrapping -->
@include('_partials.left-image-right-text-button',
['cardHeading1' => 'Web Scrapping and Data Collection',
'desc' => 'We`re your gateway to a wealth of data in the digital realm. Our web scraping and data collection services are your key to 
harnessing the power of information from diverse online sources. With a team of dedicated experts, we meticulously extract, transform, 
and deliver valuable data to fuel your business strategies. Whether you need website scraping, data cleansing, or in-depth analysis we 
will help you gather, analyze, and leverage data for insights and opportunities.',
'buttonLink'=>'services/index.html',
'buttonText'=>'Get More Info',
'image'=>'assets/images/web-scrapping.jpg',
'imageAlt'=>'Web Scrapping'])

<!-- ERP Next -->
@include('_partials.right-image-left-text-button',
['cardHeading1' => 'ERP Next',
'desc' => 'We understand the challenges and complexities that businesses face in this dynamic environment. That`s why we step in to offer 
a comprehensive suite of cutting-edge ERP services. We are committed to your success, dedicated to understanding your unique business 
needs, and crafting ERP solutions that align perfectly with your processes. Navigate the ever-changing business landscape, implement the 
right ERP system with the support and training you need to excel. Your journey to new heights begins here.',
'buttonLink'=>'services/index.html',
'buttonText'=>'Get More Info',
'image'=>'assets/images/software-development.jpg',
'imageAlt'=>'Software Development'])

<!-- Cloud Services Section -->
@include('_partials.left-image-right-text-button',
['cardHeading1' => 'Cloud Services',
'desc' => 'Catalyze your transition to the cloud with our AWS Amazon Web Services migration expertise. We ensure a
seamless shift
from traditional infrastructure to the cloud, emphasizing scalability and efficiency. Trust us to
optimize your
resources, enhance efficiency, and provide ongoing support, enabling you to embrace the future of IT
with confidence',
'buttonLink'=>'services/cloud-services',
'buttonText'=>'Get More Info',
'image'=>'assets/images/cloud-services.jpg',
'imageAlt'=>'Cloud Services'])

<!-- IT Support Section -->

@include('_partials.right-image-left-text-button',
['cardHeading1' => 'IT Support',
'desc' => 'Count on us for comprehensive IT infrastructure monitoring and support. We ensure your systems run
            smoothly,
            handling tasks such as server maintenance, security updates, and resource provisioning. With our
            meticulous
            care,
            your IT needs are efficiently managed, allowing your business operations to consistently perform at
            their peak
            potential.',
'buttonLink'=>'services/it-support',
'buttonText'=>'Get More Info',
'image'=>'assets/images/it-support.jpg',
'imageAlt'=>'IT Support'])


<!-- Integration Customization Section -->
@include('_partials.left-image-right-text-button',
['cardHeading1' => 'Integration Customization',
'desc' => 'Experience Integration Excellence! Our team specializes in harmonizing your software systems, weaving
            together the
            likes of Netsuite, Salesforce, MBS, ERPNext, and Odoo. With real-time data magic and automation at our
            fingertips,
            we sculpt a dynamic digital landscape that`s designed just for you. We`re here to streamline your
            workflows
            and optimize
            your digital operations, eliminating data bottlenecks and inefficiencies and making your business
            processes
            more efficient and
            effective.',
'buttonLink'=>'services/integration-and-customization',
'buttonText'=>'Get More Info',
'image'=>'assets/images/integration.jpg',
'imageAlt'=>'Integration and Customization'])


<!-- Our Products Section -->

@include('_partials.right-image-left-text-button',
['cardHeading1' => 'Our Products',
'desc' => 'Explore our range of high-quality IT products designed to enhance your business`s efficiency and
            productivity.
            Whether you`re in search of cutting-edge solutions or reliable essentials, we have the products to meet
            your
            IT needs.
            Our products include apps for iOS and Android, as well as a web apps. We offer hosting and licensing
            options
            to suit
            your unique needs',
'buttonLink'=>'services/it-support',
'buttonText'=>'Get More Info',
'image'=>'assets/images/home-products.jpg',
'imageAlt'=>'Our Products'])



<div class="client-voices-main">
    <div class="client-voices-holder">

        <div class="sec-title text-center slideInLeft" data-wow-duration="1s">
            <h2><b>What Our <span>Clients</span> Say
            </b></h2>
        </div>
    </div>

</div>
<section class="slider-container">

    <div class="container slideInRight" data-wow-duration="1s">
      <button class="cus-next">
            <svg id="Group_12873" data-name="Group 12873" xmlns="http://www.w3.org/2000/svg" width="104.917"
                height="104.917" viewBox="0 0 104.917 104.917">
                <path id="Vector" d="M52.458,0a52.458,52.458,0,1,0,52.458,52.458A52.534,52.534,0,0,0,52.458,0Z"
                    transform="translate(104.917) rotate(90)" fill="#ff0000" />
                <path id="Union_4" data-name="Union 4"
                    d="M13.537,1.018,1,13.557a3.433,3.433,0,0,0-1,2.435v.052a3.448,3.448,0,0,0,.991,2.392L13.54,30.979a3.468,3.468,0,0,0,4.891.012A3.46,3.46,0,0,0,18.44,26.1l-7.226-7.229H29.988a2.87,2.87,0,1,0,0-5.739H11.211L18.437,5.9a3.426,3.426,0,0,0,1.009-2.438A3.451,3.451,0,0,0,16.871.115a3.458,3.458,0,0,0-3.335.9Z"
                    transform="translate(69.802 68.452) rotate(180)" fill="#fff" />
            </svg>
        </button>
        <div class="slide-box-main swiper card_slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="slide-box">
                        <div class="box-top">
                            <h1>“</h1>
                        </div>
                        <p>"The restaurant management software transformed our business. Their customer support is exceptional"

                        </p>


                        <div class="box-bottom">

                            
                            <div class="bottom-text">
                                <h3>Alan Taylor, 
                                </h3>
                                <h6>Restaurant Owner</h6>
                            </div>
                            
                        </div>

                    </div>

                </div>

                <div class="swiper-slide">
                    <div class="slide-box">
                        <div class="box-top">
                            <h1>“</h1>
                        </div>
                        <p>"Choosing ITRetina for our cloud migration was the best decision we ever made.
                        </p>
                        <div class="box-bottom">
                            <div class="bottom-text">
                                <h3>Jane Doe
                                </h3>
                                <h6>Tech Start-Up Founder</h6>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-box">
                        <div class="box-top">
                            <h1>“</h1>
                        </div>
                        <p>"Their expertise and reliability improved our IT operations, letting us focus on our core business."
                        </p>
                        <div class="box-bottom">
                            <div class="bottom-text">
                                <h3>Emily Howard
                                </h3>
                                <h6>Department Head</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-box">
                        <div class="box-top">
                            <h1>“</h1>
                        </div>
                        <p>"Choosing ITRetina for our cloud migration was the best decision we ever made.
                        </p>
                        <div class="box-bottom">
                            <div class="bottom-text">
                                <h3>Jane Doe
                                </h3>
                                <h6>Tech Start-Up Founder</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<section class="startup-sec">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-6 mt-2 mb-2">
                <div class="startup-headeing">
                    <h1 class="sec-title less-sm mb-0">Craft Your <span>Software</span>   with Excelence.
                    </h1>
                </div>
            </div>
            <div class="col-md-6 mt-2 mb-2">
                <div class="startup-pera">
                    <p>Join hands with a team that`s committed to your success. Get in touch with us today.

                    </p>
                    <a class="site-btn mt-4" href="/contact-us"> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript ">
    var swiper = new Swiper(".card_slider ", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination ",
            clickable: true,
        },

        navigation: {
            nextEl: ".cus-next ",
        },

        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 60,
            },
            2000: {
                slidesPerView: 3,
                spaceBetween: 100,
            },
        },

    });

    
</script>



    @endsection


