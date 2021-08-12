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
      <h1 class="display-4 text-light">Teachers</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Our teachers.
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

<div class="container-fluid">
  <div class="container py-3">

    @if ($teachers != null && count($teachers) > 0)
      <div class="row">
        @foreach ($teachers as $teacher)
          <div class="col-md-4">
            <div class="card mb-3 shadow-sm">
              <div class="card-body">
                <div>
                  <div class="float-left">
                    <h3 class="card-title mb-3">
                      {{ $teacher->name }}
                    </h3>
                  </div>
                  <div class="float-right">
                    <img src="{{ asset('img/phone-1.webp') }}" width="100" height="100" alt="" class="mr-1">
                  </div>
                  <div class="clearfix">
                  </div>
                </div>
                <p>
                 <img src="{{ asset('img/phone-1.webp') }}" width="25" height="25" alt="" class="mr-1">
                 {{ $teacher->phone }}
                </p>
                <p>
                  <img src="{{ asset('img/email-1.png') }}" width="25" height="25" alt="" class="mr-1">
                  {{ $teacher->email }}
                </p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <span class="text-danger">
        No content
      </span>
    @endif
  </div>
</div>

@endsection
