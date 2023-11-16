@extends('_layouts.main')
@section('body')
  <!-- Top Hero Section -->
  <div class="container text-center my-5 bg-light p-5 shadow-elevation">
    <h1 class="mb-4">
      Empowering Your Cloud Journey, Every Step of the Way.
    </h1>
  </div>

  <!-- Unique Dental Billing Services Section -->
  <div class="container my-5">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-md-6">
        <h2 class="font-weight-bold">
          Migrating in-house IT infrastructure to the cloud.
        </h2>
        <p>
          We specialize in seamlessly moving your in-house IT infrastructure
          to AWS, Amazon's cloud platform. Our expert team creates a
          customized migration plan, ensuring a smooth transition of your
          data, applications, and workloads. This process minimizes
          disruptions and maximizes the benefits of AWS's scalability and
          security, allowing you to increase agility and reduce costs. Embrace
          the future of cloud computing with confidence in our capable hands..
        </p>
      </div>

      <!-- Image Content -->
      <div class="col-md-6">
        <div class="custom-img-container">
          <img src="assets/cloud.jpg" alt="Cloud Services" class="img-fluid" />
        </div>
      </div>


    </div>
  </div>

  <!-- Unique Features Section -->

  <div class="container my-5">
    <h2 class="text-center mb-4">What sets Us Apart?</h2>
    <div class="row justify-content-lg-center">
      <!-- Added justify-content-lg-center -->
      <!-- Tailored AWS experience -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Tailored AWS experience</h4>
            <p class="card-text">
              Our specialized focus on AWS ensures that your cloud migration
              and operations are optimized for AWS's unique features. We
              tailor our solutions to maximize the benefits of AWS, from
              cost-efficiency to scalability.
            </p>
          </div>
        </div>
      </div>
      <!-- Proactive problem solving -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Proactive Problem Solving</h4>
            <p class="card-text">
              Our team is proactive in identifying and resolving issues before
              they impact your business. We don't just fix problems; we
              prevent them, allowing you to operate smoothly and with peace of
              mind.
            </p>
          </div>
        </div>
      </div>

      <!-- Exceptional Customer Service -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">End-to-End Support</h4>
            <p class="card-text">
              We offer comprehensive, end-to-end support, from planning and
              migration to ongoing monitoring and maintenance. This holistic
              approach ensures a seamless and worry-free cloud experience
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Our IT Support Services Section -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Our Cloud Services</h2>
    <div class="row">
      <!-- Feature 1 -->
      <div class="col-lg-4 col-md-6 mb-4 text-center">
        <i class="bi bi-cloud-check-fill" style="font-size: 48px"></i>
        <h4>Cloud Mitigation</h4>
        <p>
          Streamline your business operations by migrating your in-house IT
          infrastructure to the powerful and secure world of Amazon Web
          Services (AWS). Our experts ensure a seamless transition to the
          cloud, enhancing scalability, flexibility, and cost-efficiency for
          your organization
        </p>
      </div>

      <!-- Feature 2 -->
      <div class="col-lg-4 col-md-6 mb-4 text-center">
        <i class="bi bi-modem-fill" style="font-size: 48px"></i>
        <h4>Infrastructure Support</h4>
        <p>
          Gain real-time visibility into your on-premise and cloud
          infrastructure with our advanced monitoring solutions. We help you
          maintain peak performance, identify potential issues before they
          impact your business, and ensure a smooth and uninterrupted
          operation.
        </p>
      </div>

      <!-- Feature 3 -->
      <div class="col-lg-4 col-md-6 mb-4 text-center">
        <i class="bi bi-gear-wide-connected" style="font-size: 48px"></i>
        <h4>Software and Cloud Automation</h4>
        <p>
          Harness the full potential of automation to optimize your software
          and cloud operations. Our automation services streamline routine
          tasks, reduce human error, and improve resource allocation, freeing
          your team to focus on innovation and growth.
        </p>
      </div>
    </div>
  </div>
@include('_partials.it-footer')

@endsection