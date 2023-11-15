@extends('_layouts.main')

<head>
    <title>Medical Billing Pricing</title>
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
        <h1>Select A Plan</h1>
        <!-- CTA Section -->
        <div class="container my-5">
            <div class="row">
                <!-- First CTA box -->
                <div class="col-lg-6">
                    <div class="card shadow-elevation">
                        <div class="card-body">
                            <h2 class="card-title">Insurance Eligibility</h2>
                            <p class="card-text">Get verified and accurate eligibility information for your patients.
                            </p>
                            <a href="#services" class="btn btn-primary elevated-button">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Second CTA box -->
                <div class="col-lg-6">
                    <div class="card shadow-elevation">
                        <div class="card-body">
                            <h2 class="card-title">Insurance Billing & AR</h2>
                            <p class="card-text">Let us manage your billing and accounts receivables efficiently.</p>
                            <a href="#billing" class="btn btn-primary elevated-button">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Plans & Pricing -->
    <div class="container my-5" id="pricing">
        <h1 class="text-center">Plans & Pricing</h1>
        <!-- Include your pricing cards here following the style in index.html -->


        <!-- Services Offered -->
        <div class="container my-5" id="services">
            <h2>Insurance Eligibility & Verification of Benefits</h2>
            <p>Prior verification allows you to be proactive, save time, and have confidence while delivering patient
                treatment plans.</p>
            <!-- Pricing Matrix -->
            <!-- <div class="text-center">
                <h3>Monthly Pricing</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="row">Daily Patient Count</th>
                            <td>Up to 10 patients per day</td>
                            <td>11-25 patients per day</td>
                            <td>26-40 patients per day</td>
                            <td>40+ patients per day</td>
                        </tr>
                        <tr>
                            <th scope="row">Monthly Pricing</th>
                            <td>$499/month</td>
                            <td>$799/month</td>
                            <td>$1199/month</td>
                            <td>Contact Us for Pricing</td>
                        </tr>
                    </tbody>
                </table>
            </div> -->
            <a href="#contact" class="btn btn-primary">Contact Us For Pricing</a>

        </div>
        <!-- Insurance Verification Service Benefits -->
        <div class="container my-5" id="benefits">
            <h2>Insurance Verification Service Benefits</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">The most up-to-date insurance benefits for your patients.</li>
                <li class="list-group-item">The ability to accurately estimate insurance and patient payment portions.
                </li>
                <li class="list-group-item">Peace of mind that comes from knowing a patient’s insurance status at the
                    treatment planning stage.</li>
                <li class="list-group-item">Our Standard verification includes plan frequencies, history, and benefit
                    maximums and is intended to be a basic type of verification of benefits.</li>
                <li class="list-group-item">Our extensive form is designed to gather plan-specific coverage details,
                    including code-specific coverage, and expands on the information provided in the Standard form.</li>
                <li class="list-group-item">Further expands on the Extensive form and allows customization for any codes
                    that are not included on the Extensive but are essential for your practice.</li>
            </ul>
        </div>
        <!-- Insurance Billing & AR -->
        <div class="container my-5" id="billing">
            <h2>Insurance Billing & AR</h2>
            <p>Our team makes it hassle-free for you by managing and tracking outstanding claims and payments. Get paid
                faster and accurately.</p>
            <!-- Pricing Matrix -->
            <!-- <div class="text-center">
                <h3>Monthly Pricing</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="row">Practice Monthly Collections</th>
                            <td>Up to $40,000</td>
                            <td>$40,000 – $100,000</td>
                            <td>$100,000 – $150,000</td>
                            <td>$200,000+</td>
                        </tr>
                        <tr>
                            <th scope="row">Monthly Pricing</th>
                            <td>$999/month</td>
                            <td>3% monthly of insurance collections per location per month</td>
                            <td>2.5% monthly of insurance collections per location per month</td>
                            <td>2% monthly of insurance collections per location per month</td>
                        </tr>
                    </tbody>
                </table>
            </div> -->
            <a href="#contact" class="btn btn-primary">Contact Us For Pricing</a>
        </div>

        <!-- Insurance Billing / AR / Collections -->
        <div class="container my-5" id="collections">
            <h2>Insurance Billing / AR / Collections</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">EOBs Posted Daily</li>
                <li class="list-group-item">Denial Management</li>
                <li class="list-group-item">Verify Unbilled Procedures & Reasons to get them ready to be Billed</li>
                <li class="list-group-item">Primary & Secondary Claims Submitted Daily</li>
                <li class="list-group-item">Electronic Attachments Used When Available</li>
                <li class="list-group-item">Missing Information Research</li>
                <li class="list-group-item">Insurance Aging Report Focus</li>
                <li class="list-group-item">Detailed Accounts Receivables Work Log</li>
                <li class="list-group-item">Daily, Weekly, & Monthly Productivity Reports</li>
            </ul>
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