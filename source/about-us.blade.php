@extends('_layouts.main')
<head>

    <title>ITRetina - IT Services</title>

</head>
@section('body')
<!-- Our Mission -->

@include('_partials.center-text-heading',
['title' => 'Introduction to Our IT Services',
'desc' => 'We don`t just offer IT services; we craft comprehensive solutions that are meticulously
        tailored to meet the unique requirements of your business. Our dedicated team of proficient experts specializes in
        multiple domains of IT excellence, each designed to empower your business for success'])

        
<!-- Our Values -->

@include('_partials.center-text-heading',
['title' => 'Our Core Values',
'desc' => 'Our vision is to be a driving force in the digital age, crafting software solutions that inspire innovation,
        empower individuals
        and businesses, and transform industries. We are dedicated to pushing the boundaries of what technology can
        achieve, always striving
        to exceed expectations and redefine what`s possible. Our commitment is to deliver cutting-edge software that not
        only enhances lives
        but also contributes to a more interconnected and sustainable world. With a focus on user-centric design and a
        passion for excellence,
        we`re shaping a future where software is synonymous with progress, positive change, and limitless possibilities.'])


        <!-- our story -->

        @include('_partials.center-text-heading',
        ['title' => 'Birth of ITRetina',
        'desc' => 'In the early days of my career, I started at a small call center post-graduation. They didn`t have much work, so I 
        used my skills to craft a website for them. Meanwhile, the digital world was booming with Twitter and Facebook. Inspired, I began 
        my own projects mirroring these platforms. They offered me shares, but it fell through. Quietly, I started looking elsewhere. 
        Luckily, I found a promising local startup and leaped into that world, leaving the call center for a more stable position. Saving 
        from that job, I bought an office space. I brought in young talents and fresh graduates, creating a space where skills and new 
        tech converged. Together, we learned, trained, and tackled projects. But it wasn`t easy. Resources were scarce, and time 
        management was a puzzle, especially working nights while juggling a day job. We had to build our network from scratch, investing 
        time in training and balancing multiple responsibilities. We shifted offices multiple times, facing challenges that tested our 
        resilience. Despite the hurdles, we persisted. Gradually, we started landing clients from the UK and corporate projects, even as 
        some team members came and went. Our goal remained steady: building our expertise and products. With more investor support and 
        resources, we keep moving forward, committed to growth amidst the ongoing journey.'])



<!-- Footer -->
@include('_partials.it-footer')
    @endsection