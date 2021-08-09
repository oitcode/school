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
    <div class="container py-4 text-light">
      <h1 class="display-4">
      {{ $school->name }}
      </h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead">
              {{ $school->slogan }}
            </span>
          </p>
          <a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a>
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

@if (!is_null($mainpageContents) && count($mainpageContents) > 0)

  {{-- To track odd/even content --}}
  @php
    $i = 0;
  @endphp

  @foreach ($mainpageContents as $mainpageContent)
    <div class="container-fluid border-top py-5 @if ($i % 2 == 1) bg-light @endif">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-8 justify-content-center align-self-center" style="font-size: 1.1em !important;">
            {{ $mainpageContent->body}}
          </div>
          <div class="col-md-4">
            <img src="{{ asset('storage/' . $mainpageContent->image_path) }}" class="img-fluid">
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </div>

    @php
      $i++;
    @endphp

  @endforeach
@else
  <div class="container py-5">
    <h2>
      COMING SOON!!
    </h2>
  </div>
@endif

@endsection
