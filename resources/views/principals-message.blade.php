@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light p-0" 
  style="background-image: @if ($frontpageTheme != null)
                             url({{ asset('storage/' . $frontpageTheme->hero_image_path) }})
                           @else
                             url({{ asset('img/hero-image-1.jpg') }})
                           @endif
                           ;
                           background-size: cover;
                           background-position: center;">
  <div class="o-overlay">
    <div class="container py-4">
      <h1 class="display-4 text-light">Principals Message</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Message from our principal
            </span>
          </p>
        </div>
        <div class="col-md-6">
          @if (false)
          <img src="{{ asset('img/hero-1.jpg') }}" alt="Card image foo" class="img-fluid">
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@if ($principalsMessage !== null)
  <div class="container-fluid my-5">
    <div class="container">
      <div class="row d-flex h-100">
        <div class="col-md-6 justify-content-center align-self-center">
          {{ $principalsMessage->message }}
        </div>
        <div class="col-md-4">
          <img src="{{ asset('storage/' . $principalsMessage->image_path) }}" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
@else
  <div class="container text-danger p-3">
    No principals message.
  </div>
@endif

@endsection
