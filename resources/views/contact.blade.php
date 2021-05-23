@extends('layouts.app')

@section('content')

<div class="container-fluid bg-light o-overlaid p-0">
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

<div class="container-fluid bg-light p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="text-dark">
            <img src="{{ asset('img/logo_1.png') }}" width="25" height="25" alt="" class="mr-1">
            {{ $school->name }}
          </h2>
          <br />
          <br />

          <img src="{{ asset('img/location-1.png') }}" width="25" height="25" alt="" class="mr-1">
          {{ $school->address }}
          <br />
          <br />

          <img src="{{ asset('img/phone-1.webp') }}" width="25" height="25" alt="" class="mr-1">
          {{ $school->phone }}
          <br />
          <br />

          <img src="{{ asset('img/email-1.png') }}" width="25" height="25" alt="" class="mr-1">
          {{ $school->email }}
        </div>

        <div class="col-md-6">
          <h2>Message</h2>
          <p class="text-secondary">
            Send us a message if you have any questions or comments. We will
            get back to you as soon as possible.
          </p>
          <form>
            <div class="form-group">
              <label for="">Email address</label>
              <input type="email" class="form-control" id="" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="">Phone</label>
              <input type="text" class="form-control" id="">
            </div>

            <div class="form-group">
              <label for="">Message</label>
              <textarea class="form-control" id="" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>

<div class="container-fluid bg-light py-4 border-top">
  <div class="container">
    <h3>
      Careers
    </h3>
    <a href="">
      See all vacancy
    </a>
  </div>
</div>
@endsection
