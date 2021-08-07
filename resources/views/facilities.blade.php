@extends('layouts.app')

@section('content')

<div class="container-fluid bg-light o-overlaid p-0">
  <div class="o-overlay">
    <div class="container py-4">
      <h1 class="display-4 text-light">Facilities</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Our Facilities
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

    @if ($facilities != null && count($facilities) > 0)
        <div class="row">
        @foreach ($facilities as $facility)
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-body">
                <h3 class="card-title">
                {{ $facility->name }}
                </h3>
                @if (false)
                  <p class="card-text">
                    {{ $facility->info }}
                  </p>
                @endif
                <a href="#" class="">Learn More</a>
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
