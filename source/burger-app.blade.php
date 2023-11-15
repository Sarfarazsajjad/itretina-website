@extends('_layouts.main')
@section('body')

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


  <!-- Hero Section -->
  <div class="container text-center my-5">
    <h1>Burger App</h1>

    <p class="card-text">Step into the next frontier of burger dining with our revolutionary app! Get ready to
      turbocharge your
      restaurant's operations with our innovative solution. It's your ticket to a future of unparalleled efficiency and
      ecstatic
      customers. Effortlessly manage orders and create a menu as unique as your imagination. With our app, you're the
      maestro of an
      unforgettable burger experience, setting the stage for an extraordinary culinary journey.</p>
  </div>


  <!-- Cloud Services Section -->
  <div class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="custom-img-container">
          <img src="assets/cs12.jpg" alt="Cloud Services" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6">
        <h2>Crafting Burger Perfection</h2>
        <p>The 'Burger App' is a dynamic mobile application, crafted using Flutter, aimed at empowering restaurant
          proprietors to
          efficiently handle their menu and orders across various digital platforms. Supported by a resilient Node.js
          backend,
          fortified with the prowess of TypeScript and TypeORM, it simplifies data management, ensuring a smooth and
          hassle-free
          experience. In addition, our 'Burger App' admin panel website, constructed with Angular and HTML, offers an
          instinctive interface for restaurant owners to seamlessly oversee menu items and orders, guaranteeing a
          user-friendly
          and efficient experience for their valued customers.</p>

        <h3>Key Highlights:</h3>
        <ul>
          <li><strong>Real-Time Order Tracking: </strong>Customers can track the status of their pizza orders in
            real-time, providing transparency and reassurance about the delivery process.</li>
          <li><strong> Multi-Platform Compatibility: </strong>The app is accessible across multiple platforms, making it
            easy for customers to order from their preferred devices, whether it's a smartphone, tablet, or computer.
          </li>
          <li><strong>Quick and Easy Ordering: </strong>Enjoy effortless order management at your fingertips. Say
            goodbye to order-related headaches with swift and accurate order processing.li>
        </ul>

      </div>
    </div>
  </div>

  <div class="container my-5 why-choose-us-container">
    <h2 class="text-center">Why Choose Our Burger App?</h2>

    <div class="row">
      <div class="col-md-4">
        <h4>Ordering Made Effortless</h4>
        <p>Say goodbye to the complexities of traditional order management. Our app streamlines and simplifies the
          process, enhancing efficiency.</p>
      </div>
      <div class="col-md-4">
        <h4>Supporting Your Success</h4>
        <p>Our customer support team is committed to ensuring a seamless experience, ready to assist with any questions
          or concerns.</p>
      </div>
      <div class="col-md-4">
        <h4>Advanced Technology</h4>
        <p>Revolutionizing restaurant operations with advanced technology, our app simplifies order management and
          boosts efficiency..</p>
      </div>
    </div>
  </div>



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