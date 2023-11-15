@extends('_layouts.main')
@section('body')

<body>

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
            <a class="nav-link dropdown-toggle" href="#" id="itServicesDropdown" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              IT Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="itServicesDropdown">
              <li><a class="dropdown-item" href="it-services.html">Overview</a></li>
              <li><a class="dropdown-item" href="software-development.html">Software Development</a></li>
              <li><a class="dropdown-item" href="web-scrapping.html">Web Scrapping and Data Collection</a></li>
              <li><a class="dropdown-item" href="work-in-progress.html">ERP Next</a></li>
              <li><a class="dropdown-item" href="cloud-services.html">Cloud Services</a></li>
              <li><a class="dropdown-item" href="it-support.html">IT Support</a></li>
              <li><a class="dropdown-item" href="integration-and-customization.html">Integration and Customization</a>
              </li>
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
    <h1 class="mb-4">
      Elevate Your Operations with Cutting-Edge IT Products
    </h1>
  </div>

  <!-- Unique Restaurant Management Services Section -->
  <div class="container my-5">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-md-6">
        <h2 class="font-weight-bold">
          Revolutionizing Your Industry with Distinctive IT Products
        </h2>
        <p>
          We've created a versatile product available on CodeCanyon, enabling businesses to launch their branded apps on
          both iOS and
          Android stores. Our solution, built with Flutter for mobile apps, Angular for the web app's frontend, and
          Node.js with
          TypeScript for the backend, offers a hassle-free approach. Customers can purchase a license, including backend
          and app
          hosting services, or opt for the source code-only version, giving them the flexibility to self-deploy or hire
          their preferred
          technical experts.
        </p>
      </div>
      <!-- Image Content -->
      <div class="col-md-6">
        <img src="assets/its11.jpg" alt="IT Support" class="img-fluid" />
      </div>
    </div>
  </div>


  <div class="container my-5">
    <h2 class="text-center mb-4">Our Products</h2>
  </div>

  <!-- Pizza App Section -->
  <div class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="custom-img-container">
          <img src="assets/billing-image-1.jpeg" alt="Cloud Services" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6">
        <h2>Pizza App</h2>
        <p>Introducing a game-changing solution for pizza restaurants. Our cutting-edge application is designed to
          streamline the pizza ordering process for your establishment. With a user-friendly interface, your customers
          can
          effortlessly place orders, customize their pizzas to perfection, and ensure a seamless ordering experience. By
          integrating our Pizza App, your restaurant can enhance customer satisfaction, boost efficiency, and stay ahead
          of
          the competition. Contact us today to revolutionize your pizza ordering experience.</p>
        <!-- Center aligned Get More Info Button for Pizza App -->
        <div class="text-center mt-3">
          <a href="work-in-progress.html" class="btn btn-primary">Get More Info</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Burger App section -->
  <div class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2>Burger App</h2>
        <p>Step into the future of burger ordering with our innovative application. Designed for burger restaurants, our
          user-friendly app simplifies the ordering process, enabling your customers to create their perfect burger,
          customize ingredients, and enjoy a smooth ordering experience. Revolutionize the way your burger restaurant
          serves its customers, ensuring satisfaction with each bite.</p>
        <!-- Center aligned Get More Info Button for Burger App -->
        <div class="text-center mt-3">
          <a href="work-in-progress.html" class="btn btn-primary">Get More Info</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="custom-img-container">
          <img src="assets/billing-image-2.jpeg" alt="IT Support" class="img-fluid">
        </div>
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
            <h4 class="card-title">Perceptive Development</h4>
            <p class="card-text">
              We have a profound understanding of diverse business processes and requirements, allowing us to
              offer custom solutions that truly align with your unique needs.
            </p>
          </div>
        </div>
      </div>

      <!-- Proactive problem solving -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Flexibility & Integration Expertise</h4>
            <p class="card-text">
              We offer flexibility by adapting to your unique requirements and integrating new software with your
              existing
              systems, ensuring minimal disruption and maximum efficiency.
            </p>
          </div>
        </div>
      </div>

      <!-- Exceptional Customer Service -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Supportiveness</h4>
            <p class="card-text">
              We collaborate closely to fully understand your objectives and deliver solutions to enhance efficiency and
              adapt to
              your evolving needs so that your business stays ahead, meeting the challenges while maximizing
              opportunities.
            </p>
          </div>
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