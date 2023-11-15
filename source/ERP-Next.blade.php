@extends('_layouts.main')
@section('body')
  <head>

    <title>ITRetina - Software Development</title>
    
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>

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
    Turning Ideas into Code, Code into Solutions.
  </h1>
</div>

<!-- Unique Software Development Services Section -->
<div class="container my-5">
  <div class="row align-items-center">
    <!-- Text Content -->
    <div class="col-md-6">
      <h2 class="font-weight-bold">
        Custom Code, Tailored Solutions, Unique Results.
      </h2>
      <p>
        We are a team of devoted experts who demonstrate excellence across various domains of software development. Our comprehensive 
        software development services cover a wide spectrum of needs. In the realm of mobile applications, our experts excel in developing 
        both native apps for iOS and Android and cross-platform solutions. This versatility extends your reach to a broader audience, 
        and we're dedicated to delivering seamless and engaging mobile experiences. On the web front, our development team harnesses the 
        power of Codeigniter with PHP and Node.js with TypeScript, building robust and scalable web applications. Additionally, we 
        specialize in crafting user-friendly interfaces using React.js and Angular, ensuring that your web applications are not only 
        visually appealing but also highly intuitive and responsive.
      </p>
    </div>
    <!-- Image Content -->
    <div class="col-md-6">
      <div class="custom-img-container">
      <img
        src="assets/software.jpg"
        alt="Software Development"
        class="img-fluid"
      />
    </div>
    </div>
  </div>
</div>

  <!-- Unique Features Section -->
  <div class="container my-5">
    <h2 class="text-center mb-4">What Sets Us Apart?</h2>
    <div class="row justify-content-center">
      <!-- Expert Team -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Expertise</h4>
            <p class="card-text">
              Our team consists of highly skilled developers, designers, and project managers with extensive experience
              in the field. We are well-versed in various technologies and platforms, ensuring your project is in
              capable hands.
            </p>
          </div>
        </div>
      </div>

      <!-- Custom Solutions -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Custom Solutions</h4>
            <p class="card-text">
              We understand that one-size-fits-all solutions don't work. Our approach is entirely tailored to your
              unique business needs. We closely collaborate with you to grasp your requirements and create software
              that's a perfect fit.
            </p>
          </div>
        </div>
      </div>

      <!-- Cutting-Edge Technologies -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Cutting-Edge Technologies</h4>
            <p class="card-text">
              We stay at the forefront of technology trends, utilizing the latest tools and frameworks to craft
              innovative solutions that provide your business with a competitive edge.
            </p>
          </div>
        </div>
      </div>

    </div>

    <!-- Our Software Development Services Section -->
    <div class="container my-5">
      <h2 class="text-center mb-4">Our Software Development Services</h2>
      <div class="row">
        <!-- Feature 1 -->
        <div class="col-lg-6 col-md-6 mb-4 text-center">
          <i class="bi bi-file-code-fill" style="font-size: 48px"></i>
          <h4>Custom Software Development</h4>
          <p>
            We create custom software solutions that enhance operational efficiency and customer satisfaction. Our
            expert team ensures reliability and scalability using cutting-edge technologies, from concept to deployment.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="col-lg-6 col-md-6 mb-4 text-center">
          <i class="bi bi-laptop" style="font-size: 48px"></i>
          <h4>Single Page Applications</h4>
          <p>
            We specialize in creating fast, interactive Single Page Applications (SPAs) using ReactJS and Angular. Our
            SPAs engage users seamlessly, ensuring a great user experience across devices.
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="col-lg-6 col-md-6 mb-4 text-center">
          <i class="bi bi-box-arrow-down" style="font-size: 48px"></i>
          <h4>Web Scraping Services</h4>
          <p>
            We use Python-based technology to gather valuable data from diverse online sources. Our custom solutions
            ensure accurate and up-to-date information for tracking market trends, monitoring competitors, and
            supporting your business decisions.
          </p>
        </div>

      <!-- Feature 4 -->
      <div class="col-lg-6 col-md-6 mb-4 text-center">
        <i class="bi bi-tools" style="font-size: 48px"></i>
        <h4>Specialized Systems</h4>
        <p>
          We specialize in building specialized software systems, including CRM, Billing, and Multi-vendor platforms. Our expert developers use cutting-edge technology to create scalable and efficient solutions that drive your business success.
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
            <a href="mailto:info@itretina.com" class="text-white"
              >info@itretina.com</a
            >
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