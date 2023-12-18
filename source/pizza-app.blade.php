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
      manage orders and customize your menu. With our app, you`re in control of creating a delightful dining experience
      for your
      customers.</p>
  </div>


  <!-- Features Section -->
  <div class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="custom-img-container">
          <img src="{{ $page->baseUrl }}/assets/images/pizza-app.jpeg" alt="Cloud Services" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6">
        <h2>Your Ultimate Pizza Experience</h2>
        <p>Pizza App is a versatile mobile application, developed with Flutter, empowers restaurant owners to
          efficiently manage
          their menus and orders on various platforms. The robust Node.js back end, enhanced by TypeScript and TypeORM,
          simplifies data management, ensuring a smooth experience. Additionally, our `Pizza App` admin panel website,
          built
          using Angular and HTML, provides an intuitive interface for restaurant owners to effortlessly control menus
          and orders,
          ensuring an efficient and user-friendly experience for their customers</p>
        <h3>Key Highlights:</h3>
        <ul>
          <li>It provides a responsive and consistent user experience across various platforms, including iOS and
            Android.</li>
          <li>It offers a user-friendly interface for managing system data, users, and configurations. Angular`s
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
      <div class="col-md-4 mx-auto">
        <h4>Branded Customer Experience</h4>
        <p>This benefit allows you to establish and promote their brand effectively, providing a unique and consistent experience to customers.</p>
      </div>
      <div class="col-md-4">
        <h4>Faster Order Processing</h4>
        <p>The capability for restaurants to receive and process orders immediately leads to quicker order preparation and delivery, enhancing customer satisfaction and retention.</p>
      </div>
      <div class="col-md-4">
        <h4>Higher Profit Margins</h4>
        <p>By avoiding third-party fees, you can keep the entire profit from each order, leading to higher profit margins and increased business sustainability.</p>
      </div>
      <div class="col-md-4 mx-auto">
        <h4>Customer Data Ownership</h4>
        <p>Having ownership of customer data enables you to better understand preferences and behaviors, allowing for personalized marketing efforts and improved customer engagement</p>
      </div>
      <div class="col-md-4 mx-auto">
        <h4>Control Over Pricing and Menu</h4>
        <p>The flexibility to set prices and manage menu offerings independently allows restaurants to adapt to market changes and customer demands without interference.</p>
      </div>
    </div>
    
  </div>

  <!-- Learn More -->
  <div class="container text-center my-5">
      <h1>Want to know the Ingredients that Make Our Pizza App Stand Out?</h1>
  
      <div class="container my-5 why-choose-us-container">
        <h2 class="text-center">FAQ`s</h2>
    
        
          
            <h4>What is your online food ordering system, and how does it benefit my restaurant?</h4>
            <p>Our online food ordering system is a robust platform designed to streamline the ordering process for restaurants. It benefits your establishment by expanding your reach to a wider customer base, increasing order accuracy, reducing operational complexities, and enhancing customer convenience, leading to improved sales and customer satisfaction.</p>
          
          
            <h4>Is your system customizable to fit the unique needs of my restaurant?</h4>
            <p>Yes, our system is highly customizable. We understand that each restaurant has unique requirements. Our platform allows for customization in menu layout, item categorization, pricing, promotions, and branding to align perfectly with your restaurant`s identity and specific needs.</p>
          
          
            <h4>How does the ordering process work for customers using this system?</h4>
            <p>Customers using our system can easily browse through your restaurant`s menu, select items, customize orders as desired, add to cart, and proceed to checkout seamlessly. The intuitive interface simplifies the process, ensuring a user-friendly and efficient ordering experience.</p>
          
          
            <h4>What types of payment methods are supported by your system?</h4>
            <p>Our system supports a variety of payment methods including credit/debit cards, digital wallets, and cash on delivery, offering flexibility for customers to choose their preferred payment option</p>
          
          
            <h4>Can I integrate this system with my existing website or mobile app?</h4>
            <p>Yes, our system offers seamless integration with your existing website or mobile app. This integration ensures a consistent and unified user experience across all platforms.</p>

            <h4>How secure is the payment process for both my restaurant and customers?</h4>
            <p>Security is a top priority. Our system employs robust encryption and industry-standard security protocols to ensure that all transactions are secure for both your restaurant and your customers, safeguarding sensitive information.</p>

            <h4>Do you offer analytics or reporting features to track orders and customer data?</h4>
            <p>Yes, our system provides comprehensive analytics and reporting features. Track order trends, customer preferences, sales data, and more. This data-driven insight aids in making informed business decisions.</p>

            <h4>Are there any setup fees or ongoing costs associated with using your system?</h4>
            <p>We offer flexible pricing plans tailored to your restaurant`s needs. There might be setup fees depending on the plan chosen, and ongoing costs will vary based on the services and features selected.</p>

            <h4>Is there a contract or commitment required to use your online ordering system?</h4>
            <p>Yes, we usually have a service agreement outlining the terms and conditions of using our system, though the specifics can be discussed based on your preferences and requirements.</p>

            <h4>How can I ensure my restaurant`s branding and identity are reflected in the online ordering process?</h4>
            <p>Our system allows for extensive customization, ensuring that your restaurant`s branding, logo, color schemes, and overall identity are prominently featured throughout the ordering process, providing a consistent brand experience.</p>

            <h4>Is the system compatible with different devices such as tablets, smartphones, etc.?</h4>
            <p>Absolutely, our system is designed to be compatible with various devices, including tablets, smartphones, desktops, and more, ensuring accessibility for both your customers and your staff.</p>

          
        </div>

  </div>

  @include('_partials.footer')
@endsection