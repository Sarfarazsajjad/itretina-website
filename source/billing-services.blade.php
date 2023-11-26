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

@include('_partials.right-image-left-text-list-button',
['cardHeading1' => 'Medical Billing: Expertise Meets Excellence',
'desc' => 'Empowering your medical practice with an experienced team that has been in the trenches with US
doctors since 2013. Our commitment isn`t just to ensure your bills are taken care of it`s about forging a partnership
that boosts your revenue and elevates patient trust.','cardHeading2'=>'Key Highlights:','listItem1'=>'HIPAA Certified
Your data`s safety is non-negotiable.','listItem2'=>'Diverse Software Proficiency From ModMed to AdvanceMD, we`re
well-versed.','listItem3'=>'Comprehensive Service Suite From claim submissions to revenue analysis, we`ve got it all
covered.','buttonLink'=>'medical-billing','buttonText'=>'Get More
Info','image'=>'assets/images/billing-image-2.jpeg','imageAlt'=>'Medical Billing Services'])

<!-- Dental Billing Section -->

@include('_partials.left-image-right-text-list-button',
['cardHeading1' => 'Dental Billing: Crafting Smiles, Beyond Dental Chairs',
'desc' => 'Your dental practice deserves more than just billing; it deserves billing done right. We bring in a
blend of technological sophistication and deep-rooted industry knowledge to ensure you can focus on
your patients, leaving the billing intricacies to us.',
'cardHeading2'=>'Key Highlights:',
'listItem1'=>'Dedicated Virtual Support: Round the clock, because your queries can`t wait.',
'listItem2'=>'Stringent Data Security: Advanced encryption ensures no data slips.',
'listItem3'=>'Customized Billing Plans: Why fit in, when you can stand out? Choose plans that resonate with your
needs.',
'buttonLink'=>'/dental-billing',
'buttonText'=>'Get More Info',
'image'=>'assets/images/billing-image-1.jpeg',
'imageAlt'=>'Dental Billing Services'])

<!-- Call to Action: Join the Billing Revolution -->
<div class="container text-center my-5">
    <h2>Pioneering the Billing Revolution</h2>
    <p>Organized, efficient, and precise - that`s how we roll. Embrace solutions designed for today`s challenges and
        tomorrow`s aspirations. At the heart of our services lies a promise - uncompromised quality, relentless
        dedication, and an unwavering commitment to your practice`s success.</p>
    <p>Ready for a change? Discover the difference with our premium billing services. Let`s embark on this journey
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
@include('_partials.bottom-bar-heading-button',['heading'=>'Ready to Elevate Your Practice?','desc'=>'Our team is here
to assist. Contact us today for a free consultation.','buttonLink'=>'#contact','buttonText'=>'Contact Us'])


<!-- Content Sections Go Here -->

<!-- For example: Benefits, Services, Pricing CTA etc. -->

<!-- Footer -->
@include('_partials.footer')
@endsection