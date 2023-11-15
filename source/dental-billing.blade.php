@extends('_layouts.main')
@section('body')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-elevation">
        <div class="container">
            <a class="navbar-brand logo-text" href="index.html"><span class="itr">ITR</span>etina</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="itServicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            IT Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="itServicesDropdown">
                            <li><a class="dropdown-item" href="it-services.html">Overview</a></li>
                            <li><a class="dropdown-item" href="software-development.html">Software Development</a></li>
                            <li><a class="dropdown-item" href="web-scrapping.html">Web Scrapping and Data Collection</a>
                            </li>
                            <li><a class="dropdown-item" href="work-in-progress.html">ERP Next</a></li>
                            <li><a class="dropdown-item" href="cloud-services.html">Cloud Services</a></li>
                            <li><a class="dropdown-item" href="it-support.html">IT Support</a></li>
                            <li><a class="dropdown-item" href="integration-and-customization.html">Integration and
                                    Customization</a></li>
                            <li>
                                <a class="dropdown-item" href="it-products.html">
                                    Our Products &raquo;
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li>
                                        <a class="dropdown-item" href="work-in-progress.html">Pizza App</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="work-in-progress.html">Burger App</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="billingServicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Billing Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="billingServicesDropdown">
                            <li><a class="dropdown-item" href="billing-services.html">Overview</a></li>
                            <li><a class="dropdown-item" href="medical-billing.html">Medical Billing</a></li>
                            <li><a class="dropdown-item" href="dental-billing.html">Dental Billing</a></li>
                            <li><a class="dropdown-item" href="medical-billing-pricing.html">Pricing</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Top Hero Section -->
    <div class="container text-center my-5 bg-light p-5 shadow-elevation">
        <h1 class="mb-4">Seamless Dental Billing & Patient Scheduling Solutions for Your Dental Practice</h1>
        <!-- <p class="lead">Plans starting as low as $499/month</p> -->
    </div>

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
                <img src="assets/national-cancer-institute-NFvdKIhxYlU-unsplash.jpg" alt="Dental Billing Services"
                    class="img-fluid">
            </div>
        </div>
    </div>
    <!-- Unique Features Section -->
    <!-- Unique Features Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">What Sets Us Apart?</h2>
        <div class="row justify-content-lg-center"> <!-- Added justify-content-lg-center -->
            <!-- Experienced Virtual Client Success Managers -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Experienced Virtual Client Success Managers</h4>
                        <p class="card-text">Our team is dedicated to ensuring your needs are met. You will have a
                            virtual success manager available 24/7, who can help you with billing assistance and answer
                            any questions that come up while we work on your behalf.</p>
                    </div>
                </div>
            </div>
            <!-- Security and Privacy -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Security and Privacy</h4>
                        <p class="card-text">Your security and privacy are our #1 priority. We protect all the patient
                            data using an advanced encryption algorithm to prevent any theft of patient personal
                            information or identity leaks, so you can rest easy knowing that we have got this!</p>
                    </div>
                </div>
            </div>
            <!-- High Quality, Customized Solutions -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">High Quality, Customized Solutions</h4>
                        <p class="card-text">You just need to choose the customized plan that best fits your needs. We
                            don’t believe in long-term contracts because we are confident that you’ll have peace of mind
                            with us. Our Flat fee schedules allow you more flexibility and control.</p>
                    </div>
                </div>
            </div>
            <!-- Organized Billing Process -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Organized Billing Process</h4>
                        <p class="card-text">Our organized billing process can help dental practices streamline their
                            billing operations, saving time and resources. This allows dentists and their staff to focus
                            on providing quality care to their patients, rather than spending time on administrative
                            tasks.</p>
                    </div>
                </div>
            </div>
            <!-- Trained Staff -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Trained Staff</h4>
                        <p class="card-text">​​We specialize in complex billing processes and have a team of experienced
                            professionals who are well-versed in the latest industry regulations and coding systems. You
                            can be sure that your claims will be processed accurately and efficiently.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Check Our Prices Button -->
        <div class="text-center mt-4">
            <a href="medical-billing-pricing.html" class="btn btn-primary">Check Our Prices</a>
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


    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <!-- Dental Billing Services -->
                <div class="col-lg-6">
                    <h4 class="text-uppercase mb-4">Our Dental Billing Services</h4>
                    <ul class="list-group list-group-flush bg-dark">
                        <li class="list-group-item bg-dark text-white">Dental Insurance Eligibility Verification</li>
                        <li class="list-group-item bg-dark text-white">Dental Insurance Billing and AR/Collection</li>
                        <li class="list-group-item bg-dark text-white">Patient Follow-ups/Fill the Chair</li>
                        <li class="list-group-item bg-dark text-white">Appointment Scheduling</li>
                        <li class="list-group-item bg-dark text-white">Appointment Confirmation</li>
                        <li class="list-group-item bg-dark text-white">Inbound and Outbound Calls</li>
                    </ul>
                </div>
                <!-- Contact Details -->
                <div class="col-lg-6">
                    <h4 class="text-uppercase mb-4">Contact Details</h4>
                    <div class="d-flex flex-column align-items-start">
                        <div class="mb-3">
                            <h5>USA, Texas</h5>
                            <p class="text-white">827 Overdell Dr Sugarland TX 77479<br>
                                +18015574513</p>
                        </div>
                        <!-- <div class="mb-3">
                            <h5>Pakistan, Karachi</h5>
                            <p class="text-white">R-43, block 7, Gulshan-e-Johar<br>
                                +923132604692</p>
                        </div> -->
                        <div class="mb-3">
                            <h5>Email</h5>
                            <p><a href="mailto:info@itretina.com" class="text-white">info@itretina.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center bg-white text-dark">
                <p class="mb-0">Copyright © 2023 ITRetina. All rights reserved.</p>
            </div>
        </div>
    </footer>
@endsection