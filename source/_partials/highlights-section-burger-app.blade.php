<!-- resources/views/_partials/startup.blade.php -->
<section class="startup-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mt-2 mb-2">
                <div class="startup-heading">
                    <h1 class="sec-title less-sm mb-0" style="font-size: 65px;">
                        {{ $startup_section_title }} <br> <span>{{ $startup_section_subtitle }}</span>
                    </h1>
                </div>
            </div>
            <div class="col-md-6 mt-2 mb-2 ">
                <div class="startup-pera">
                    @foreach($highlights as $highlight)
                        <p><b>{{ $highlight['title'] }}</b> {{ $highlight['description'] }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
