@extends('layouts.app')

@section('content')

<div class="container-fluid bg-light o-overlaid p-0">
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

    <img src="{{ asset('img/fb-1.png') }}" width="30" height="30" alt="" class="mr-1">
    <img src="{{ asset('img/twitter-1.png') }}" width="30" height="30" alt="" class="mr-1">

  </div>
</div>


@endsection
