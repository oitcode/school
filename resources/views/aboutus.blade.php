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
      About us
      </h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead">
              Learn more about us
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


<div class="container-fluid border-bottom">
  <div class="container border-bottom py-5">

    <div class="card border-0">
      <div class="card-body">

        <div class="row">

          <div class="col-md-3">
            <div class="card text-white bg-primary">
              <div class="card-header">
                <h3 class="card-title">
                  Established
                </h3>
              </div>
              <div class="card-body h1">
                1984 AD
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card text-white bg-success">
              <div class="card-header">
                <h3 class="card-title">
                  Classes
                </h3>
              </div>
              <div class="card-body h1">
                5 - 10
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card text-white bg-info">
              <div class="card-header">
                <h3 class="card-title">
                  Total students
                </h3>
              </div>
              <div class="card-body h1">
                525
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card text-dark bg-warning">
              <div class="card-header">
                <h3 class="card-title">
                  Teachers
                </h3>
              </div>
              <div class="card-body h1">
                TODO
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

  </div>
</div>

@if (!is_null($aboutUsContents) && count($aboutUsContents) > 0)

  {{-- To track odd/even content --}}
  @php
    $i = 0;
  @endphp

  @foreach ($aboutUsContents as $aboutUsContent)
    {{--
    <div class="container-fluid border-top py-5 @if ($i % 2 == 1) bg-dark text-light @endif" style="font-size: 1.1em;">
    --}}

    <div class="container-fluid bg-light p-0 border" 
        style="font-size: 1.2em;
          @if ($i % 2 == 1 )
            /* background-image:url({{ asset('img/cool-2.jpg') }}); */
          @else
            background-image:url({{ asset('img/cool-4.jpg') }});
          @endif
            background-size: cover;
            background-position: center;
        ">


        <div class="container py-5">
          <div class="row d-flex">
            @if ($i % 2 == 0)
              <div class="col-md-8 justify-content-center align-self-center" style="font-size: 1.1em !important;">
                {{ $aboutUsContent->body}}
              </div>
              <div class="col-md-4">
                <img src="{{ asset('storage/' . $aboutUsContent->image_path) }}" class="img-fluid rounded-circle">
              </div>
            @else
              <div class="col-md-4">
                <img src="{{ asset('storage/' . $aboutUsContent->image_path) }}" class="img-fluid rounded-circle">
              </div>
              <div class="col-md-8 justify-content-center align-self-center" style="font-size: 1.1em !important;">
                {{ $aboutUsContent->body}}
              </div>
            @endif
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
