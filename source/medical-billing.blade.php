@extends('_layouts.main')


<head>

    <title>Medical Billing Services</title>
</head>
@section('body')

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
    @include('_partials.footer')
@endsection