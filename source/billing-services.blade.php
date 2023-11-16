@extends('_layouts.main')

@section('body')

<!-- Header Section: Introduction to Billing Services -->
<div class="container my-5">
        <h1 class="text-center mb-4">Billing Services at Its Best</h1>
        <p class="text-center">Maximizing revenue, streamlining operations, and ensuring patient satisfaction – that's
            what we bring to the table with our unparalleled billing services. Dive into the world of hassle-free
            billing, tailored exclusively for medical and dental practitioners.</p>
    </div>
    <!-- Medical Billing Section -->
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Medical Billing: Expertise Meets Excellence</h2>
                <p>Empowering your medical practice with an experienced team that has been in the trenches with US
                    doctors since 2013. Our commitment isn't just to ensure your bills are taken care of; it's about
                    forging a partnership that boosts your revenue and elevates patient trust.</p>
                <h3>Key Highlights:</h3>
                <ul>
                    <li>HIPAA Certified: Your data's safety is non-negotiable.</li>
                    <li>Diverse Software Proficiency: From ModMed to AdvanceMD, we're well-versed.</li>
                    <li>Comprehensive Service Suite: From claim submissions to revenue analysis, we've got it all
                        covered.</li>
                </ul>
                <!-- Center aligned Get More Info Button for Medical Billing -->
                <div class="text-center mt-3">
                    <a href="/medical-billing" class="btn btn-primary">Get More Info</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-img-container">
                    <img src="/assets/images/billing-image-2.jpeg" alt="Medical Billing Services" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Dental Billing Section -->
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="custom-img-container">
                    <img src="/assets/images/billing-image-1.jpeg" alt="Dental Billing Services" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <h2>Dental Billing: Crafting Smiles, Beyond Dental Chairs</h2>
                <p>Your dental practice deserves more than just billing; it deserves billing done right. We bring in a
                    blend of technological sophistication and deep-rooted industry knowledge to ensure you can focus on
                    your patients, leaving the billing intricacies to us.</p>
                <h3>Why Choose Our Dental Billing Services:</h3>
                <ul>
                    <li>Dedicated Virtual Support: Round the clock, because your queries can't wait.</li>
                    <li>Stringent Data Security: Advanced encryption ensures no data slips.</li>
                    <li>Customized Billing Plans: Why fit in, when you can stand out? Choose plans that resonate with
                        your needs.</li>
                </ul>
                <!-- Center aligned Get More Info Button for Dental Billing -->
                <div class="text-center mt-3">
                    <a href="/dental-billing" class="btn btn-primary">Get More Info</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Call to Action: Join the Billing Revolution -->
    <div class="container text-center my-5">
        <h2>Pioneering the Billing Revolution</h2>
        <p>Organized, efficient, and precise - that's how we roll. Embrace solutions designed for today's challenges and
            tomorrow's aspirations. At the heart of our services lies a promise - uncompromised quality, relentless
            dedication, and an unwavering commitment to your practice's success.</p>
        <p>Ready for a change? Discover the difference with our premium billing services. Let's embark on this journey
            together.</p>
        <!-- You can add a button or link here for the users to get in touch or learn more -->
    </div>

    <!-- Testimonials Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">What Our Clients Say</h2>
        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <blockquote class="blockquote">
                    <p>"ITRetina has transformed our practice. Their IT support is top-notch, and our billing has never
                        been smoother."</p>
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

    <!-- Contact Us Call to Action -->
    <div class="container my-5 py-5 bg-light text-center shadow-elevation">
        <h2>Ready to Elevate Your Practice?</h2>
        <p>Our team is here to assist. Contact us today for a free consultation.</p>
        <a href="#contact" class="btn btn-primary">Contact Us</a>
    </div>


    <!-- Content Sections Go Here -->

    <!-- For example: Benefits, Services, Pricing CTA etc. -->

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