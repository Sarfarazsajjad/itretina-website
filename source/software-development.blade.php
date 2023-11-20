@extends('_layouts.main')
<head>

  <title>ITRetina - Software Development</title>

</head>
@section('body')

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
          We are a team of devoted experts who demonstrate excellence across various domains of software development.
          Our comprehensive
          software development services cover a wide spectrum of needs. In the realm of mobile applications, our experts
          excel in developing
          both native apps for iOS and Android and cross-platform solutions. This versatility extends your reach to a
          broader audience,
          and we're dedicated to delivering seamless and engaging mobile experiences. On the web front, our development
          team harnesses the
          power of Codeigniter with PHP and Node.js with TypeScript, building robust and scalable web applications.
          Additionally, we
          specialize in crafting user-friendly interfaces using React.js and Angular, ensuring that your web
          applications are not only
          visually appealing but also highly intuitive and responsive.
        </p>
      </div>
      <!-- Image Content -->
      <div class="col-md-6">
        <div class="custom-img-container">
          <img src="assets/images/software.jpg" alt="Software Development" class="img-fluid" />
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

    @include('_partials.software-development-partial')

@include('_partials.it-footer')

 @endsection