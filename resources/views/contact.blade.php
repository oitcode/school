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
      <h1 class="display-4 text-light">Contact Us</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Stay in touch.
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

<div class="container-fluid p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="text-dark">
            <img src="{{ asset('img/logo_1.png') }}" width="25" height="25" alt="" class="mr-1">
            {{ $school->name }}
          </h2>
          <br />

          <p class="mb-3">
            <img src="{{ asset('img/location-1.png') }}" width="25" height="25" alt="" class="mr-1">
            {{ $school->address }}
          </p>

          <p class="mb-3">
            <img src="{{ asset('img/phone-1.webp') }}" width="25" height="25" alt="" class="mr-1">
            {{ $school->phone }}
          </p>

          <p class="mb-3">
            <img src="{{ asset('img/email-1.png') }}" width="25" height="25" alt="" class="mr-1">
            {{ $school->email }}
          </p>

          <div class="mt-5">
            <h3 class="mb-4">Social Media</h3>
            @foreach ($socialMediaLinks as $socialMediaLink)
              <a href="{{ $socialMediaLink->url }}" target="_blank">
                @if (strtolower($socialMediaLink->media_name) === 'facebook')
                  <i class="fa fa-facebook mr-2 border border-primary rounded-circle p-2"></i>
                @elseif (strtolower($socialMediaLink->media_name) === 'twitter')
                  <i class="fa fa-twitter mr-2 border border-primary rounded-circle p-2"></i>
                @elseif (strtolower($socialMediaLink->media_name) === 'youtube')
                  <i class="fa fa-youtube mr-2 border border-primary rounded-circle p-2"></i>
                @else
                  {{ $socialMediaLink->media_name }}
                @endif
              </a>
            @endforeach
          </div>


         <div class="mt-5">
           <h3>
             Careers
           </h3>
           <a href="{{ route('careers') }}">
             See all vacancy
           </a>
         </div>


        </div>

        <div class="col-md-6">
          <h2>Message</h2>
          <p class="text-secondary">
            Send us a message if you have any questions or comments. We will
            get back to you as soon as possible.
          </p>
          @livewire ('contact-message-create')
        </div>
      </div>
    </div>
</div>
@endsection
