@extends('_layouts.main')

@section('title', 'Contact Us')

@section('body')

<section class="banner home-banner" id="banner-layer" style="background-image: url('{{ $page->baseUrl }}/assets/images/banner-bg.svg'); background-size: cover; background-position: center;" >
<img class="banner-shape1"  src="{{ $page->baseUrl }}/assets/images/banner-shap1.svg" alt="Banner Shape 1" />
<img class="banner-shape2" src="{{ $page->baseUrl }}/assets/images/banner-shap2.svg" alt="Banner Shape 2" />

@php
    $title = 'Contact Us';
   
@endphp

@include('_partials.contact-us-dynamic-heading', compact('title'))


</section>


<section class="get-quote-sec pb-4">
        <div class="container">
            <h2 class="sec-title">Get <span>in Touch:</span>
            </h2>
            <div class="row">
                <div class="col-md-8 mt-2 mb-2">
                    <form class="form-holder">
                        <fieldset>
                            <div class="field-icon">
                                <img src="assets/images/profile.svg" alt="" />
                            </div>
                            <div class="field-input">
                                <input type="text" placeholder="Enter Name" required />
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="field-icon">
                                <img src="assets/images/email-icon.svg" alt="" />
                            </div>
                            <div class="field-input">
                                <input type="email" placeholder="Enter Email" required />
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="field-icon">
                                <img src="assets/images/mobile.svg" alt="" />
                            </div>
                            <div class="field-input">
                                <input id="phone-number" type="text" placeholder="Your Phone Number" required />
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="field-icon">
                                <img src="assets/images/service-icon.svg" alt="" />
                            </div>
                            <div class="field-input">
                                <select>
                                    <option value="Web Development">Software Development </option>
                                    <option value="Software Development">Web Scrapping and Data Solution</option>
                                    <option value="Software Development">ERP Next</option>
                                    <option value="Software Development"> Cloud Services</option>
                                    <option value="Software Development"> IT Support</option>
                                    <option value="Software Development">Integration and Customization</option>

                                </select>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="field-icon">
                                <img src="assets/images/document-text.svg" alt="" />
                            </div>
                            <div class="field-input">
                                <input id="phone-number" type="text" placeholder="Describe You Project" required />
                            </div>
                        </fieldset>
                        <fieldset>
                            <button class="gredient-btn" type="submit">Get More Info</button>
                        </fieldset>
                    </form>
                </div>
             
            </div>

        </div>
    </section>
@endsection
