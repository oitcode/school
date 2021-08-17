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
      <h1 class="display-4 text-light">Notice</h1>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="container py-3">
    <h2>{{ $notice->title }}</h2>
    <div class="">
      <small>
        <span class="text-secondary mr-1">
          Published:
        </span>
        {{ $notice->publish_date }}

        &nbsp;&nbsp;&nbsp;&nbsp;

        <span class="text-secondary mr-1">
          Notice ID:
        </span>
        {{ $notice->notice_id }}
      </small>
    </div>

    <hr />
    
    <div class="mb-3">
      {{ $notice->description }}
    </div>

    <hr />

    <h3 class="text-secondary">Share</h3>

    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank">
      <img src="{{ asset('img/fb-1.png') }}" width="30" height="30" alt="" class="mr-1">
    </a>
    <img src="{{ asset('img/twitter-1.png') }}" width="30" height="30" alt="" class="mr-1">

  </div>
</div>


@endsection
