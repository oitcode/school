@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light o-overlaid p-0">
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

<div class="border-top py-3">
  <div class="container">
  </div>
</div>


@endsection
