@extends('_layouts.main')

@section('title', 'ITRetina - Pizza app')

@section('body')



<section class="banner home-banner" id="banner-layer"
    style="background-image: url('{{ $page->baseUrl }}/assets/images/banner-bg.svg'); background-size: cover; background-position: center;">
    <img class="banner-shape1" src="{{ $page->baseUrl }}/assets/images/banner-shap1.svg" alt="Banner Shape 1" />
    <img class="banner-shape2" src="{{ $page->baseUrl }}/assets/images/banner-shap2.svg" alt="Banner Shape 2" />

    @php
        $title = 'Pizza App';
        $buttonLink = 'contact-us';
        $buttonText = 'Get More Info';
        $desc1 = 'Welcome to the future of Pizza restaurant operations! Our innovative application is your recipe for streamlined food ordering, designed to empower your business. Embrace a new era of efficiency and customer satisfaction as you efficiently manage orders and customize your menu. With our app, you`re in control of creating a delightful dining experience for your customers.

                                        ';
    @endphp

    @include('_partials.burger-pizza', compact('title', 'buttonLink', 'buttonText', 'desc1'))



</section>


<!-- Include Banner Section -->
@include('_partials.pizza-burger-dynamic', [
    'banner_heading' => 'Your Ultimate ',
    'banner_subheading' => 'Pizza Experience',
    'banner_description' => 'Pizza App is a versatile mobile application, developed with Flutter, empowers restaurant owners to efficiently manage their menus and orders on various platforms. The robust Node.js back end, enhanced by TypeScript and TypeORM, simplifies data management, ensuring a smooth experience. Additionally, our `Pizza App` admin panel website, built using Angular and HTML, provides an intuitive interface for restaurant owners to effortlessly control menus and orders, ensuring an efficient and user-friendly experience for their customers',
    'banner_button_text' => 'Get More Info',
    'banner_button_link' => 'contact-us.html',
    'banner_image_url' => '/assets/images/pizza-app.jpeg'
])

@include('_partials.highlights-section-burger-app', [
    'startup_section_title' => 'Key ',
    'startup_section_subtitle' => 'Highlights',
    'highlights' => [
        ['title' => '', 'description' => 'It provides a responsive and consistent user experience across various platforms, including iOS and Android. It offers a user-friendly interface for managing system data, users, and configurations. Angular`s component-based architecture enhances modularity and maintainability. It handles data storage, retrieval, and business logic, providing APIs for the mobile application and web admin panel.'],
        ['title' => '', 'description' => ''],
        ['title' => '', 'description' => ''],
    ]
])

@include('_partials.set-us-part', [
    'heading' => 'Why Choose Our ',
    'subheading' => 'Pizza App?',

    'cards' => [
        [
            'image' => '/assets/images/i.png',
            'title' => 'Branded Customer Experience',
            'description' => 'Say goodbye to the complexities of traditional order management. Our app streamlines and simplifies the process, enhancing efficiency.'
        ],
        [
            'image' => '/assets/images/ii.png',
            'title' => 'Customer Data Ownership
',
            'description' => 'Having ownership of customer data enables you to better understand preferences and behaviors, allowing for personalized marketing efforts and improved customer engagement

'
        ],
        [
            'image' => '/assets/images/iii.png',
            'title' => 'Faster Order Processing',
            'description' => 'The capability for restaurants to receive and process orders immediately leads to quicker order preparation and delivery, enhancing customer satisfaction and retention.

'
        ],
        [
            'image' => '/assets/images/iv.png',
            'title' => 'Higher Profit Margins
',
            'description' => 'By avoiding third-party fees, you can keep the entire profit from each order, leading to higher profit margins and increased business sustainability.

'
        ],
        [
            'image' => '/assets/images/v.png',
            'title' => 'Control Over Pricing and Menu
',
            'description' => 'The flexibility to set prices and manage menu offerings independently allows restaurants to adapt to market changes and customer demands without interference.

.'
        ]
    ]



])

@php
    $faqs = [
        [
            'question' => 'What is your online food ordering system, and how does it benefit my restaurant?',
            'answer' => '                    Our online food ordering system is a robust platform designed to streamline the ordering process for restaurants. It benefits your establishment by expanding your reach to a wider customer base, increasing order accuracy, reducing operational complexities, and enhancing customer convenience, leading to improved sales and customer satisfaction.
                    '
        ],
        [
            'question' => 'What are the key benefits of choosing a React Native app development company?',
            'answer' => 'Choosing a React Native app development company offers several benefits, including cost savings...'
        ],
        [
            'question' => 'Is your system customizable to fit the unique needs of my restaurant?
                    ',
            'answer' => 'Yes, our system is highly customizable. We understand that each restaurant has unique requirements. Our platform allows for customization in menu layout, item categorization, pricing, promotions, and branding to align perfectly with your restaurant`s identity and specific needs.'
        ],
        [
            'question' => ' How does the ordering process work for customers using this system?',
            'answer' => 'Customers using our system can easily browse through your restaurant`s menu, select items, customize orders as desired, add to cart, and proceed to checkout seamlessly. The intuitive interface simplifies the process, ensuring a user-friendly and efficient ordering experience.'
        ],
        [
            'question' => ' What types of payment methods are supported by your system?',
            'answer' => '
                                        Our system supports a variety of payment methods including credit/debit cards, digital wallets, and cash on delivery, offering flexibility for customers to choose their preferred payment option'
        ],
        [
            'question' => 'Can I integrate this system with my existing website or mobile app?',
            'answer' => 'Yes, our system offers seamless integration with your existing website or mobile app. This integration ensures a consistent and unified user experience across all platforms'
        ],
        [
            'question' => ' How secure is the payment process for both my restaurant and customers?
                    ',
            'answer' => '
                                                Security is a top priority. Our system employs robust encryption and industry-standard security protocols to ensure that all transactions are secure for both your restaurant and your customers, safeguarding sensitive information.


                                            '
        ],
        [
            'question' => ' Do you offer analytics or reporting features to track orders and customer data?
                    ',
            'answer' => 'Yes, our system provides comprehensive analytics and reporting features. Track order trends, customer preferences, sales data, and more. This data-driven insight aids in making informed business decisions.
                    '
        ],
        [
            'question' => ' Is the system compatible with different devices such as tablets, smartphones, etc.?
                    ',
            'answer' => 'Absolutely, our system is designed to be compatible with various devices, including tablets, smartphones, desktops, and more, ensuring accessibility for both your customers and your staff.'
        ],

        // Add more FAQs as needed
    ];
@endphp

@include('_partials.faq', ['faqs' => $faqs])



<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

@endsection