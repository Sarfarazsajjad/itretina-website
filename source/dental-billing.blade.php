@extends('_layouts.main')

<head>
    <title>Dental Billing Services</title>
</head>
@section('body')
<!-- Top Hero Section -->
<div class="container text-center my-5 bg-light p-5 shadow-elevation">
    <h1 class="mb-4">Seamless Dental Billing & Patient Scheduling Solutions for Your Dental Practice</h1>
    <!-- <p class="lead">Plans starting as low as $499/month</p> -->
</div>
<!-- Unique Dental Billing Services Section -->
@include('_partials.left-text-right-image',['cardHeading1'=>'What Makes Our Dental Billing Services
Unique?','cardHeading2'=>'A Customized Dental Billing & Schedule Management Solution for Dentists.','desc'=>'>We are
your dental billing experts, and we take care of the time-consuming processes for you so, you
can focus on what matters most, delivering the best patient experience. We fight on your behalf to
get you the money owed to
you!','image'=>'assets/images/national-cancer-institute-NFvdKIhxYlU-unsplash.jpg','imageAlt'=>'Dental Billing
Services'])
<!-- Unique Features Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">What Sets Us Apart?</h2>
    <div class="row justify-content-lg-center">
        <!-- Added justify-content-lg-center -->
        @include('_partials.what-set-us-apart',['cardTitle' => $page->dentalSetsApartBlock1Heading,'desc'=>
        $page->dentalSetsApartBlock1Desc])
        @include('_partials.what-set-us-apart',['cardTitle' => $page->dentalSetsApartBlock2Heading,'desc'=>
        $page->dentalSetsApartBlock2Desc])
        @include('_partials.what-set-us-apart',['cardTitle' => $page->dentalSetsApartBlock3Heading,'desc'=>
        $page->dentalSetsApartBlock3Desc])
        @include('_partials.what-set-us-apart',['cardTitle' => $page->dentalSetsApartBlock4Heading,'desc'=>
        $page->dentalSetsApartBlock4Desc])
        @include('_partials.what-set-us-apart',['cardTitle' => $page->dentalSetsApartBlock5Heading,'desc'=>
        $page->dentalSetsApartBlock5Desc])
    </div>
</div>
<!-- Our Dental Billing Services Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Our Dental Billing Services</h2>
    <p class="text-center mb-5">With industry knowledge for over 10 years, our team knows how to get things done
        quickly and efficiently. Take your practice to maximum capacity without worrying about a thing!</p>
    <div class="row">
        <!-- Feature 1 -->
        @include('_partials.dental-features',['heading' => $page->dentalFeature1Heading,'desc'=>
        $page->dentalFeature1Desc,'icon'=>$page->dentalFeature1Icon])
        <!-- Feature 2 -->
        @include('_partials.dental-features',['heading' => $page->dentalFeature2Heading,'desc'=>
        $page->dentalFeature2Desc,'icon'=>$page->dentalFeature2Icon])
        <!-- Feature 3 -->
        @include('_partials.dental-features',['heading' => $page->dentalFeature3Heading,'desc'=>
        $page->dentalFeature3Desc,'icon'=>$page->dentalFeature3Icon])
        <!-- Feature 4 -->
        @include('_partials.dental-features',['heading' => $page->dentalFeature4Heading,'desc'=>
        $page->dentalFeature4Desc,'icon'=>$page->dentalFeature4Icon])
        <!-- Feature 5 -->
        @include('_partials.dental-features',['heading' => $page->dentalFeature5Heading,'desc'=>
        $page->dentalFeature5Desc,'icon'=>$page->dentalFeature5Icon])
        <!-- Feature 6 -->
        @include('_partials.dental-features',['heading' => $page->dentalFeature6Heading,'desc'=>
        $page->dentalFeature6Desc,'icon'=>$page->dentalFeature6Icon])
    </div>
</div>

@include('_partials.footer')
@endsection