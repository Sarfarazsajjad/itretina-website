@extends('_layouts.main')

@section('title', 'ITRetina - Software Development')

@section('body')

<section class="banner home-banner" id="banner-layer" style="background-image: url('{{ $page->baseUrl }}/assets/images/banner-bg.svg'); background-size: cover; background-position: center;" >
<img class="banner-shape1"  src="{{ $page->baseUrl }}/assets/images/banner-shap1.svg" alt="Banner Shape 1" />
<img class="banner-shape2" src="{{ $page->baseUrl }}/assets/images/banner-shap2.svg" alt="Banner Shape 2" />


@include('_partials.same-title-desc',
['maintitlepage1' => 'Turning Ideas into Code, Code into Solutions',
 'buttonLink'=>'services/index.html',
 'buttonText'=>'Get More Info',

])

</section>

@include('_partials.same-sec-left-text',
['cardHeading2'=>'Custom Code, Tailored Solutions, Unique Results.',
'desc2' => 'We are a team of devoted experts who demonstrate excellence across various domains of software development. Our comprehensive software development services cover a wide spectrum of needs. In the realm of mobile applications, our experts excel in developing both native apps for iOS and Android and cross-platform solutions. This versatility extends your reach to a broader audience, and we`re dedicated to delivering seamless and engaging mobile experiences. On the web front, our development team harnesses the power of Codeigniter with PHP and Node.js with TypeScript, building robust and scalable web applications. Additionally, we specialize in crafting user-friendly interfaces using React.js and Angular, ensuring that your web applications are not only visually appealing but also highly intuitive and responsive.',
'image'=>'assets/images/web1.jpg',
'imageAlt'=>'Software Development'])

<div class="container sw">
            <h2 class="sec-title text-center" style="margin-top:30px;">What <span>Sets Us</span>  Apart?
            </h2>

        </div>

<div style="display:flex;">
     
    @include('_partials.set-us-part',
    ['image'=>'assets/images/i.png',
    'imageAlt'=>'Software Development',
    'Cardheadingsetus1'=>' Expertise',
    'cardparasetus' => 'Our team consists of highly skilled developers, designers, and project managers with extensive experience in the field. We are well-versed in various technologies and platforms, ensuring your project is in capable hands.',
    ])

    @include('_partials.set-us-part',
    ['image'=>'assets/images/ii.png',
    'imageAlt'=>'Software Development',
    'Cardheadingsetus1'=>' Custom Solutions',
    'cardparasetus' => 'We understand that one-size-fits-all solutions don`t work. Our approach is entirely tailored to your unique business needs. We closely collaborate with you to grasp your requirements and create software that`s a perfect fit.,'    ])

    @include('_partials.set-us-part',
    ['image'=>'assets/images/iii.png',
    'imageAlt'=>'Software Development',
    'Cardheadingsetus1'=>' Cutting-Edge Technologies',
    'cardparasetus' => 'We stay at the forefront of technology trends, utilizing the latest tools and frameworks to craft innovative solutions that provide your business with a competitive edge.',
    ])
</div>



@endsection