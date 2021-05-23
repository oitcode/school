@extends('layouts.app')

@section('content')

<div class="container-fluid bg-light o-overlaid p-0">
  <div class="o-overlay">
    <div class="container py-4">
      <h1 class="display-4 text-light">Gallery</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              View our gallery
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
    @if ($galleries != null && count($galleries) > 0)
        @foreach ($galleries as $gallery)
          <h3>{{ $gallery->name }}</h3>
          <div class="row">
          @foreach ($gallery->galleryImages as $galleryImage)
            <div class="col-md-3 mb-3 p-3 border">
              <img src="{{ asset('storage/' . $galleryImage->image_path) }}" class="img-fluid">
            </div>
          @endforeach
          </div>
        @endforeach
      </div>
    @else
      <span class="text-danger">
        No gallery to show
      </span>
    @endif
  </div>
</div>

@endsection
