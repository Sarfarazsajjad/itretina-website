<!-- Calls to Action -->
<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<div class="container cta-container">
    <div class="row">
        <!-- IT Services -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-elevation">
                <div class="card-body">
                    <h2 class="card-title">{{ $page->homePageButtonITText }}</h2>
                    <p class="card-text">Custom software development, cloud services, IT support, and more.</p>
                    <a href= "" class="btn btn-primary elevated-button">Explore Our IT
                        Solutions</a>
                </div>
            </div>
        </div>
        <!--Billing Services -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-elevation">
                <div class="card-body">
                    <h2 class="card-title">{{ $page->homePageButtonBillingText }}</h2>
                    <p class="card-text">Efficient and reliable billing services for hospitals, clinics, and
                        doctors.</p>
                    <a href="" class="btn btn-primary elevated-button">Discover Our
                        Billing Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
</html>