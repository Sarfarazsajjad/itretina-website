@extends('_layouts.main')

@section('body')

  <!-- Top Hero Section -->
  <div class="container text-center my-5 bg-light p-5 shadow-elevation">
    <h1 class="mb-4">
      Catalyzing Efficiency, Tailoring Excellence.
    </h1>
  </div>

  <!-- Unique integration and Customization Services Section -->
  <div class="container my-5">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-md-6">
        <h2 class="font-weight-bold">
          Seamless Integration and Personalized Customization
        </h2>
        <p>
          Connecting diverse software applications for efficient data flow while also tailoring technology platforms to
          your specific
          needs. This integration ensures streamlined operations, reduces redundancy, and enhances productivity, while
          our customization
          services focus on optimizing user experiences and process efficiency.
        </p>
      </div>
      <!-- Image Content -->
      <div class="col-md-6">
        <div class="custom-img-container">
          <img src="assets/Integration.jpg" alt="Integration" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>


  <!-- Unique Features Section -->
  <div class="container my-5">
    <h2 class="text-center mb-4">What sets Us Apart?</h2>
    <div class="row justify-content-lg-center">

      <!-- Tailored solutions for our business -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Tailored Solutions</h4>
            <p class="card-text">
              We understand that one size does not fit all. Our services are uniquely customized to match your specific
              needs, ensuring
              that your software and platforms work seamlessly according to your requirements.
            </p>
          </div>
        </div>
      </div>

      <!-- Comprehensive Expertise -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Comprehensive Expertise</h4>
            <p class="card-text">
              With our in-depth knowledge and experience, we cover both integration and customization, providing a
              holistic solution that
              streamlines processes and optimizes user experiences under one roof.
            </p>
          </div>
        </div>
      </div>

      <!-- Client Centrice Approach -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Client-Centric Approach</h4>
            <p class="card-text">
              Our customer-first philosophy means that we collaborate closely with you, understanding your goals and
              challenges, to
              deliver solutions that not only meet your current needs but also adapt and evolve with your business.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Integrationa and Customization Services Section -->
    <div class="container my-5">
      <h2 class="text-center mb-4">Our Integration & Customization Services</h2>
      <!-- <p class="text-center mb-5">With industry knowledge for over 10 years, our team knows how to get things done -->
      <!-- quickly and efficiently. Take your practice to maximum capacity without worrying about a thing!</p> -->
      <div class="row">

        <!-- Feature 1 -->
        <div class="col-lg-6 col-md-6 mb-4 text-center">
          <i class="bi bi-plug-fill" style="font-size: 48px"></i>
          <h4>Software Integration</h4>
          <p>
            Our software integration services enable the seamless connection and synchronization of diverse software
            applications,
            allowing for the efficient flow of data and functionality within your organization. By harmonizing these
            systems, we enhance
            productivity, reduce redundancy, and ensure a smoother workflow.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="col-lg-6 col-md-6 mb-4 text-center">
          <i class="bi bi-pencil-square" style="font-size: 48px"></i>
          <h4>Platform Customization</h4>
          <p>
            We specialize in tailoring technology platforms to match your unique requirements, ensuring that your
            website or software
            operates exactly as you envision. Our customization services encompass everything from user interface
            adjustments to
            fine-tuning features, providing an improved user experience and increased operational efficiency.
          </p>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="bg-dark text-white py-5">
    <div class="container" style="text-align: center;">
      <h4 class="text-uppercase mb-4" align="center">Contact Details</h4>
      <div class="row">
        <div class="col-lg-6">
          <div class="d-flex flex-column">
            <div class="mb-3">
              <h5>USA, Texas</h5>
              <p class="text-white">
                827 Overdell Dr Sugarland TX 77479<br />
                +18015574513
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="d-flex flex-column ">
            <div class="mb-3">
              <h5>Pakistan, Karachi</h5>
              <p class="text-white">
                R-43, block 7, Gulshan-e-Johar<br />
                +923132604692
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <h5>Email</h5>
        <p>
          <a href="mailto:info@itretina.com" class="text-white">info@itretina.com</a>
        </p>
      </div>
      <!--</div>-->
      <!--</div>-->
    </div>
    <div class="row mt-4">
      <div class="col text-center bg-white text-dark">
        <p class="mb-0">Copyright © 2023 ITRetina. All rights reserved.</p>
      </div>
    </div>
  </footer>

  

@endsection