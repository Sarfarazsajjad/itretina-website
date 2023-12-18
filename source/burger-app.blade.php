@extends('_layouts.main')
@section('body')
<!-- Hero Section -->
<div class="container text-center my-5">
    <h1>Burger App</h1>

    <p class="card-text">Step into the next frontier of burger dining with our revolutionary app! Get ready to
        turbocharge your
        restaurant`s operations with our innovative solution. It`s your ticket to a future of unparalleled efficiency
        and
        ecstatic
        customers. Effortlessly manage orders and create a menu as unique as your imagination. With our app, you`re the
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
            <p>The `Burger App` is a dynamic mobile application, crafted using Flutter, aimed at empowering restaurant
                proprietors to
                efficiently handle their menu and orders across various digital platforms. Supported by a resilient
                Node.js
                backend,
                fortified with the prowess of TypeScript and TypeORM, it simplifies data management, ensuring a smooth
                and
                hassle-free
                experience. In addition, our `Burger App` admin panel website, constructed with Angular and HTML, offers
                an
                instinctive interface for restaurant owners to seamlessly oversee menu items and orders, guaranteeing a
                user-friendly
                and efficient experience for their valued customers.</p>

            <h3>Key Highlights:</h3>
            <ul>
                <li><strong>Real-Time Order Tracking: </strong>Customers can track the status of their pizza orders in
                    real-time, providing transparency and reassurance about the delivery process.</li>
                <li><strong> Multi-Platform Compatibility: </strong>The app is accessible across multiple platforms,
                    making it
                    easy for customers to order from their preferred devices, whether it`s a smartphone, tablet, or
                    computer.
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
            <p>Our customer support team is committed to ensuring a seamless experience, ready to assist with any
                questions
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
@include('_partials.footer')
@endsection