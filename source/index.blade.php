@extends('_layouts.main')
@section('body')
<div id="p5-canvas-container"></div>
<!-- Hero Section -->
<div class="container text-center my-5">
        <h1>Welcome to ITRetina</h1>
        <p>Your Solution for IT Services and Medical Billing</p>
    </div>
    <div class="container cta-container">
    <div class="row">
        <!-- IT Services -->
        @include('_partials.homepage-card',['cardTitle'=>$page->homePageButtonITText,'cardText'=> $page->homePageCardITDesc,'buttonText'=>$page->homePageButtonITText])
        <!--Billing Services -->
        @include('_partials.homepage-card',['cardTitle'=>$page->homePageButtonBillingText,'cardText'=> $page->homePageCardBillingDesc,'buttonText'=>$page->homePageButtonBillingText])
    </div>
</div>
@endsection
