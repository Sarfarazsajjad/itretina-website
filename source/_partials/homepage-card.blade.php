<!-- Calls to Action -->
<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
        <!-- IT Services -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-elevation">
                <div class="card-body">
                    <h2 class="card-title">{{ $cardTitle }}</h2>
                    <p class="card-text">{{$cardText}}</p>
                    <a href= "/it-services" class="btn btn-primary elevated-button">{{$buttonText}}</a>
                </div>
            </div>
        </div> 
</html>