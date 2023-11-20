@extends('_layouts.main')
@section('body')

    <!-- Top Hero Section -->
    <div class="container text-center my-5 bg-light p-5 shadow-elevation">
        <h1 class="mb-4">Seamless Dental Billing & Patient Scheduling Solutions for Your Dental Practice</h1>
        <!-- <p class="lead">Plans starting as low as $499/month</p> -->
    </div>
    @include('_partials.dental-billing')
    <!-- Unique Dental Billing Services Section -->
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-md-6">
                <h3 class="text-muted">What Makes Our Dental Billing Services Unique?</h3>
                <h2 class="font-weight-bold">A Customized Dental Billing & Schedule Management Solution for Dentists.
                </h2>
                <p>We are your dental billing experts, and we take care of the time-consuming processes for you so, you
                    can focus on what matters most, delivering the best patient experience. We fight on your behalf to
                    get you the money owed to you!</p>
            </div>
            <!-- Image Content -->
            <div class="col-md-6">
                <img src="assets/images/national-cancer-institute-NFvdKIhxYlU-unsplash.jpg" alt="Dental Billing Services"
                    class="img-fluid">
            </div>
        </div>
    </div>
    <!-- Unique Features Section -->
<div class="container my-5">
        <h2 class="text-center mb-4">What Sets Us Apart?</h2>
        <div class="row justify-content-lg-center"> <!-- Added justify-content-lg-center -->
    @include('_partials.what-set-us-apart',['cardTitle' => 'Experienced Virtual Client Success Managers','desc'=> $page->dentalSetsApartBlock1Desc])
</div>
</div>
    <!-- Our Dental Billing Services Section -->
     <div class="container my-5">
        <h2 class="text-center mb-4">Our Dental Billing Services</h2>
        <p class="text-center mb-5">With industry knowledge for over 10 years, our team knows how to get things done
            quickly and efficiently. Take your practice to maximum capacity without worrying about a thing!</p>
        <div class="row">
            <!-- Feature 1 -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <i class="bi bi-check-circle-fill" style="font-size: 48px;"></i>
                <h4>Dental Insurance Eligibility Verification</h4>
                <p>Prior verification allows you to be proactive, save time, and have confidence while delivering
                    patient treatment plans.</p>
            </div>
            <!-- Feature 2 -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <i class="bi bi-cash" style="font-size: 48px;"></i>
                <h4>Dental Insurance Billing and AR/Collection</h4>
                <p>Our dental team is here to make it quick and convenient for you to track and collect any outstanding
                    claims and payments from insurance companies. Get paid what you are owed.</p>
            </div>
            <!-- Feature 3 -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <i class="bi bi-person-check-fill" style="font-size: 48px;"></i>
                <h4>Patient Follow-ups/Fill the Chair</h4>
                <p>Are you struggling to juggle all of your responsibilities? Let us take care of that for you. We will
                    handle everything from appointments and follow-ups with active and inactive patients, so don’t worry
                    about a thing!</p>
            </div>
            <!-- Feature 4 -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <i class="bi bi-calendar-check-fill" style="font-size: 48px;"></i>
                <h4>Appointment Scheduling</h4>
                <p>Need a more efficient way to schedule your patient appointments? Our technology schedules and
                    streamlines new appointments in real-time and syncs them with your daily calendar.</p>
            </div>
            <!-- Feature 5 -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <i class="bi bi-telephone-forward-fill" style="font-size: 48px;"></i>
                <h4>Appointment Confirmation</h4>
                <p>Our team makes sure that patient appointments are confirmed and there are no last-minute
                    cancellations. Our system follows up via phone and text before an appointment.</p>
            </div>
            <!-- Feature 6 -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <i class="bi bi-telephone-fill" style="font-size: 48px;"></i>
                <h4>Inbound and Outbound Calls</h4>
                <p>Whether you have 1 call per day or 100+, we will create a customized solution so you can be confident
                    that each call is answered professionally and taken care of.</p>
            </div>
        </div>
    </div> 
    
    @include('_partials.footer')
@endsection