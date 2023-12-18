@extends('_layouts.main')
<head>

    <title>ITRetina - Contact Us</title>

</head>
@section('body')

<!-- Contact Details Section -->
<div class="container my-5">
      <h1 class="text-center mb-4">Reach Us At</h1>
      <div class="row">
        <div class="col-lg-6">
          <div class="d-flex flex-column">
            <div class="mb-3">
              <h5>USA, Texas</h5>
              <p>
                827 Overdell Dr Sugarland TX 77479<br />
                +18015574513
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="d-flex flex-column ">
            <div class="mb-3">
              <h5>Pakistan, Karachi</h5>
              <p>
                <br />
                +923132604692
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <h5>Email</h5>
        <p>
          <a href="mailto:info@itretina.com">info@itretina.com</a>
        </p>
      </div>
    </div>


<!-- Footer -->
@include('_partials.footer')
    @endsection