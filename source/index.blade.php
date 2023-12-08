@extends('_layouts.main')
@section('body')
<div id="p5-canvas-container"></div>
<!-- Hero Section -->
<div class="container text-center my-5">
    <h1>Welcome to ITRetina</h1>
    <p>Your Solution for IT Services and Medical Billing</p>
</div>
<div class="container cta-container">
    <div class="row justify-content-center"> <!-- Center aligning the row -->
        <!-- IT Services -->
        @include('_partials.homepage-card',['cardTitle'=>$page->homePageButtonITText,'cardText'=> $page->homePageCardITDesc,'buttonLink'=> $page->homePageButtonITLink,'buttonText'=>$page->homePageButtonITText])
        <!-- Billing Services -->
        @include('_partials.homepage-card',['cardTitle'=>$page->homePageButtonBillingText,'cardText'=> $page->homePageCardBillingDesc,'buttonLink'=> $page->homePageButtonBillingLink,'buttonText'=>$page->homePageButtonBillingText])
        <!-- About Us -->
        @include('_partials.homepage-card',['cardTitle'=>$page->homePageButtonAboutUsText,'cardText'=> $page->homePageCardAbtDesc,'buttonLink'=> $page->homePageButtonAboutUsLink,'buttonText'=>$page->homePageButtonAboutUsText])
    </div>
</div>
@endsection

