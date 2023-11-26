@extends('_layouts.main')

<head>
    <title>Medical Billing Pricing</title>
</head>
@section('body')


<!-- Hero Section -->
<div class="container text-center my-5">
    <h1>Select A Plan</h1>
    <!-- CTA Section -->
    <div class="container my-5">
        <div class="row">
            <!-- First CTA box -->
            @include('_partials.homepage-card',['cardTitle'=>'Insurance Eligibility','cardText'=> 'Get verified and
            accurate eligibility information for your patients.','buttonLink'=>'#services','buttonText'=>'Learn More'])
            <!-- Second CTA box -->
            @include('_partials.homepage-card',['cardTitle'=>'Insurance Billing & AR','cardText'=> 'Let us manage your
            billing and accounts receivables efficiently.','buttonLink'=>'#benefits','buttonText'=>'Learn More'])

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
@include('_partials.footer')
@endsection