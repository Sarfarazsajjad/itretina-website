<section class="faq-sec mt-5">
    <div class="container">
        <h2 class="sec-title text-center mb-3">
            Want to know the Ingredients that Make Our <span>Pizza App</span> Stand Out?
        </h2>

        <h2 class="sec-title text-center mb-3" style="font-size: 25px; padding-top: 20px;">
            <span>Frequently</span> Asked Questions
        </h2>

        @foreach ($faqs as $faq)
            <button class="accordion sub-title-style mt-5 pl-4">
                {{ $faq['question'] }}
                <img src="/assets/images/down-icon.png">
            </button>
            <div class="panel">
                <p>{{ $faq['answer'] }}</p>
            </div>
        @endforeach

    </div>
</section>
