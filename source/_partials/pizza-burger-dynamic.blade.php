<!-- resources/views/_partials/banner.blade.php -->
<section id="banner-layer">
    <div class="container">
        <div class="row">
            <div class="banner-content text-left col-md-6" id="banner-content">
                <h1 style="text-align:left;">
                    {{ $banner_heading }} <span>{{ $banner_subheading }}</span>
                </h1>
                <p style="text-align:left;">
                    {{ $banner_description }}
                </p>
                <a class="gredient-btn site-btn solan-banner-btn-cus" href="{{ $banner_button_link }}">
                    {{ $banner_button_text }}
                </a>
            </div>
            <div class="banner-side-img text-center col-md-6">
                <img src="{{ $banner_image_url }}" alt="Banner Image"/>
            </div>
        </div>
    </div>
</section>
