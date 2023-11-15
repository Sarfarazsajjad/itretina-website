@extends('_layouts.main')


<head>

    <title>Medical Billing Services</title>
</head>
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

    <!-- Hero Section -->
    <div class="container text-center my-5">
        <h1>Medical Billing Services</h1>
        <p>We are HIPAA Certified and have been professionally working with US doctors since 2013.</p>

        <p class="card-text">We are experts in medical billing and related services with over 09 years
            of experience in complete Revenue Cycle Management. We have worked across the US for
            providers and hospitals to increase cash flow, follow claims, resolve denials, and ensure
            payments. With experience in using a variety of healthcare software, EMRs, and portals, we
            also strictly adhere to HIPAA & PHI rules, ensuring no data or privacy breaches.</p>
    </div>

    <div class="container my-5 why-choose-us-container">
        <h2 class="text-center">Why Choose Our Medical Billing Services?</h2>

        <div class="row">
            <div class="col-md-4">
                <h4>Streamlined Operations</h4>
                <p>We optimize your billing operations to ensure timely and accurate claim submissions, reducing denials
                    and accelerating reimbursements.</p>
            </div>
            <div class="col-md-4">
                <h4>Experienced Professionals</h4>
                <p>Our team comprises skilled professionals with years of experience in handling diverse medical billing
                    needs, ensuring precision at every step.</p>
            </div>
            <div class="col-md-4">
                <h4>Advanced Technology</h4>
                <p>Integrating the latest technology, we offer solutions that not only simplify billing processes but
                    also offer insightful analytics to help you make informed decisions.</p>
            </div>
        </div>
    </div>

    <!-- Our Process -->
    <section class="container my-5">
        <h2>Our Medical Billing Process</h2>
        <div class="row">
            <div class="col-md-3">
                <h4>1. Patient Verification</h4>
                <p>We begin by verifying patient details to avoid discrepancies in the later stages of billing.</p>
            </div>
            <div class="col-md-3">
                <h4>2. Claim Creation</h4>
                <p>Our team meticulously creates claims, ensuring all services rendered are accurately coded and
                    documented.</p>
            </div>
            <div class="col-md-3">
                <h4>3. Submission and Tracking</h4>
                <p>We submit claims to the respective insurance companies and track them until they are settled.</p>
            </div>
            <div class="col-md-3">
                <h4>4. Revenue Collection</h4>
                <p>Upon approval, we ensure prompt collection of payments and handle any denials or discrepancies
                    efficiently.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">What Our Clients Say</h2>
        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <blockquote class="blockquote">
                    <p>"Partnering with ITRetina transformed our billing process. Their efficiency and
                        dedication have significantly reduced our denials and increased revenue."</p>
                    <footer class="blockquote-footer">Dr. Jane Smith, <cite title="Source Title">Dental Clinic</cite>
                    </footer>
                </blockquote>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <blockquote class="blockquote">
                    <p>"Highly professional and responsive. Their team has been a game changer for our clinic."</p>
                    <footer class="blockquote-footer">Dr. Alan Taylor, <cite title="Source Title">Physio Center</cite>
                    </footer>
                </blockquote>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <blockquote class="blockquote">
                    <p>"Their custom solutions really stand out. ITRetina has truly been a partner in our growth."</p>
                    <footer class="blockquote-footer">Ms. Emily Howard, <cite title="Source Title">Optical Studio</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <section class="container my-5 cta-section text-center">
        <h2>Ready to Transform Your Billing Process?</h2>
        <p>Join hands with a team that's committed to your success. Get in touch with us today.</p>
        <div class="mt-3">
            <a href="#contact" class="btn btn-primary">Contact Us</a>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <!-- Dental Billing Services -->
                <div class="col-lg-6">
                    <h4 class="text-uppercase mb-4">Our Medical & Dental Billing Services</h4>
                    <ul class="list-group list-group-flush bg-dark">
                        <li class="list-group-item bg-dark text-white">Insurance Eligibility Verification</li>
                        <li class="list-group-item bg-dark text-white">Insurance Billing and AR/Collection</li>
                        <li class="list-group-item bg-dark text-white">Patient Follow-ups/Fill the Chair</li>
                        <li class="list-group-item bg-dark text-white">Appointment Scheduling</li>
                        <li class="list-group-item bg-dark text-white">Appointment Confirmation</li>
                        <li class="list-group-item bg-dark text-white">Inbound and Outbound Calls</li>
                    </ul>
                </div>
                <!-- Contact Details -->
                <div id="contact" class="col-lg-6">
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
        <div class="row">
            <div class="text-center bg-white text-dark">
                <p class="mb-0">Copyright © 2023 ITRetina. All rights reserved.</p>
            </div>
        </div>
    </footer>
@endsection