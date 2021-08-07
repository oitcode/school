@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light o-overlaid p-0">
  <div class="o-overlay">
    <div class="container py-4">
      <h1 class="display-4 text-light">About Us</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Best School
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

<div class="containter-fluid mt-4">
  <div class="container">
    <div class="row d-flex h-100">
      <div class="col-md-8 justify-content-center align-self-center">
        {{ $aboutUs->paragraph_1 }}
      </div>
      <div class="col-md-4">
        <img src="{{ asset('storage/' . $aboutUs->image_path_1) }}" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<div class="containter-fluid mt-4 bg-light border-top py-5">
  <div class="container">
    <div class="row d-flex h-100">
      <div class="col-md-8 justify-content-center align-self-center">
        {{ $aboutUs->paragraph_2 }}
      </div>
      <div class="col-md-4">
        <img src="{{ asset('storage/' . $aboutUs->image_path_2) }}" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<div class="containter-fluid mt-4 py-5 border-top">
  <div class="container">
    <div class="row d-flex h-100">
      <div class="col-md-8 justify-content-center align-self-center">
        {{ $aboutUs->paragraph_3 }}
      </div>
      <div class="col-md-4">
        <img src="{{ asset('storage/' . $aboutUs->image_path_3) }}" class="img-fluid">
      </div>
    </div>
  </div>
</div>

@endsection
