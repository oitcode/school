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
      <h1 class="display-4 text-light">Facilities</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Extracurriculars
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

@if ($extraCurricularCategories != null && count($extraCurricularCategories) > 0)

  {{-- To track odd/even content --}}
  @php
    $i = 0;
  @endphp

  @foreach ($extraCurricularCategories as $extraCurricularCategory)
    @foreach ($extraCurricularCategory->extraCurriculars as $extraCurricular)
      <div class="container-fluid border-bottom py-4 @if ($i % 2 == 1) bg-light @endif">
        <div class="container py-3" style="font-size: 1.1em !important;">
      
          <div class="row">

            <div class="col-md-8">
              <h3 class="card-title">
              {{ $extraCurricular->name }}
              </h3>

              <p class="card-text">
                {{ $extraCurricular->description }}
              </p>
            </div>

            <div class="col-md-4">
              <img src="{{ asset('storage/' . $extraCurricular->image_path) }}" class="img-fluid rounded-circle">
            </div>

          </div>
        </div>
      </div>

      @php
        $i++;
      @endphp

    @endforeach
  @endforeach
@else
  <div class="container text-danger my-4">
    No content
  </div>
@endif

@endsection
