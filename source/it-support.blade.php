@extends('_layouts.main')
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
      Empowering Business Success Through Exceptional IT Support
    </h1>
  </div>

  <!-- Unique IT Support Services Section -->
  <div class="container my-5">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-md-6">
        <h2 class="font-weight-bold">
          Comprehensive IT Infrastructure Support and Monitoring
        </h2>
        <p>
          Experience the peace of mind that comes with our all-encompassing IT support services. We diligently monitor
          both cloud and in-house infrastructure, proactively addressing issues like server patching, security updates,
          and resource upgrades. Our expert team excels at swiftly implementing network changes and granting access
          permissions. When additional resources are needed, we seamlessly provision virtual machines with the required
          networking configurations. Your IT needs are efficiently managed.
        </p>
      </div>

      <!-- Image Content -->
      <div class="col-md-6">
        <div class="custom-img-container">
          <img src="assets/support.jpg" alt="IT Support" class="img-fluid" />
        </div>
      </div>

    </div>
  </div>

  <!-- Unique Features Section -->
  <div class="container my-5">
    <h2 class="text-center mb-4">What Sets Us Apart?</h2>
    <div class="row justify-content-center">

      <!-- Tailored solutions for your business -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Tailored Solutions</h4>
            <p class="card-text">
              We understand that every organization is unique, and so are their IT needs. Our team works closely with
              you to understand your specific requirements and designs customized IT support strategies that align
              perfectly with your business objectives. We deliver services as unique as your organization.
            </p>
          </div>
        </div>
      </div>
      <!-- Proactive problem solving -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Proactive Problem-Solving</h4>
            <p class="card-text">
              Our proactive monitoring and maintenance protocols identify potential problems before they impact your
              operations, allowing us to address them in advance, minimizing downtime, and reducing costs, providing you
              with a more reliable and stable IT environment.
            </p>
          </div>
        </div>
      </div>

      <!-- Exceptional Customer Service -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Exceptional Customer Service</h4>
            <p class="card-text">
              Our commitment to outstanding customer service means we prioritize transparent communication, rapid
              responses, and a friendly, approachable attitude. You can count on us not only for solving technical
              issues but also for ensuring a positive and enjoyable interaction with our IT support team.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Our IT Support Services Section -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Our IT Support Services</h2>
    <div class="row">
      <!-- Feature 1 -->
      <div class="col-lg-6 col-md-6 mb-4 text-center">
        <i class="bi bi-pc-display-horizontal" style="font-size: 48px"></i>
        <h4>IT Service Desk</h4>
        <p>
          Our IT Service Desk is your first point of contact for technical assistance and issue resolution. Our team of
          skilled technicians is available to provide prompt and reliable support, ensuring that your technology
          challenges are addressed efficiently, minimizing downtime, and keeping your business operations running
          smoothly.
        </p>
      </div>

      <!-- Feature 2 -->
      <div class="col-lg-6 col-md-6 mb-4 text-center">
        <i class="bi bi-modem-fill" style="font-size: 48px"></i>
        <h4>Infrastructure Support</h4>
        <p>
          Our Infrastructure Support services focus on maintaining and optimizing your organization's IT backbone. We
          offer comprehensive solutions for managing and enhancing your network, servers, and hardware. Whether it's
          troubleshooting, upgrading, or ensuring the security and performance of your infrastructure, our experts are
          here to safeguard your IT investments.
        </p>
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