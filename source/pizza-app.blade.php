@extends('_layouts.main')

<head>
  <title>ITRetina - Pizza App</title>
</head>
@section('body')
 
  <!-- Hero Section -->
  <div class="container text-center my-5">
    <h1>Pizza App</h1>

    <p class="card-text">Welcome to the future of Pizza restaurant operations! Our innovative application is your recipe
      for streamlined
      food ordering, designed to empower your business. Embrace a new era of efficiency and customer satisfaction as you
      efficiently
      manage orders and customize your menu. With our app, you're in control of creating a delightful dining experience
      for your
      customers.</p>
  </div>


  <!-- Features Section -->
  <div class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="custom-img-container">
          <img src="assets/cs12.jpg" alt="Cloud Services" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6">
        <h2>Your Ultimate Pizza Experience</h2>
        <p>Pizza App is a versatile mobile application, developed with Flutter, empowers restaurant owners to
          efficiently manage
          their menus and orders on various platforms. The robust Node.js back end, enhanced by TypeScript and TypeORM,
          simplifies data management, ensuring a smooth experience. Additionally, our 'Pizza App' admin panel website,
          built
          using Angular and HTML, provides an intuitive interface for restaurant owners to effortlessly control menus
          and orders,
          ensuring an efficient and user-friendly experience for their customers</p>
        <h3>Key Highlights:</h3>
        <ul>
          <li>It provides a responsive and consistent user experience across various platforms, including iOS and
            Android.</li>
          <li>It offers a user-friendly interface for managing system data, users, and configurations. Angular's
            component-based
            architecture enhances modularity and maintainability.</li>
          <li>It handles data storage, retrieval, and business logic, providing APIs for the mobile application and web
            admin panel.</li>
        </ul>

      </div>
    </div>
  </div>

  <div class="container my-5 why-choose-us-container">
    <h2 class="text-center">Why Choose Our Pizza App?</h2>

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

  @include('_partials.footer')
@endsection