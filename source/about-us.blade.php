@extends('_layouts.main')

@section('title', 'About Us')

@section('body')

<section class="banner home-banner" id="banner-layer" style="background-image: url('{{ $page->baseUrl }}/assets/images/banner-bg.svg'); background-size: cover; background-position: center;">
    <img class="banner-shape1" src="{{ $page->baseUrl }}/assets/images/banner-shap1.svg" alt="Banner Shape 1" />
    <img class="banner-shape2" src="{{ $page->baseUrl }}/assets/images/banner-shap2.svg" alt="Banner Shape 2" />
   
@php
    $title = 'About Us';
   
@endphp

@include('_partials.contact-us-dynamic-heading', compact('title'))
</section>

@php
    $sectionTitle = 'Introduction to';
    $sectionSubtitle = 'Our IT Services';
    $sectionDescription = 'We don`t just offer IT services; we craft comprehensive solutions that are meticulously tailored to meet the unique requirements of your business. Our dedicated team of proficient experts specializes in multiple domains of IT excellence, each designed to empower your business for success.';

    $coreValuesTitle = 'Our Core';
    $coreValuesSubtitle = 'Values';
    $coreValuesDescription = 'Our vision is to be a driving force in the digital age, crafting software solutions that inspire innovation, empower individuals and businesses, and transform industries. We are dedicated to pushing the boundaries of what technology can achieve, always striving to exceed expectations and redefine what`s possible. Our commitment is to deliver cutting-edge software that not only enhances lives but also contributes to a more interconnected and sustainable world. With a focus on user-centric design and a passion for excellence, we`re shaping a future where software is synonymous with progress, positive change, and limitless possibilities.

';
@endphp

@include('_partials.about-us-dynamic', compact('sectionTitle', 'sectionSubtitle', 'sectionDescription', 'coreValuesTitle', 'coreValuesSubtitle', 'coreValuesDescription'))

@endsection