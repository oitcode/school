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
      <h1 class="display-4 text-light">Noticeboard</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Latest notices.
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
    @if ($notices != null && count($notices) > 0)
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Date</th>
            <th>Notice</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($notices as $notice)
          <tr>
            <td>{{ $notice->created_at->toDateString() }}</td>
            <td>
              <strong>
                <a href="{{ route('notice-display', $notice->notice_id) }}">
                  {{ $notice->title }}
                </a>
              </strong>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @if (false)
            @foreach ($notices as $notice)
              <div class="card mb-3">
                <div class="card-body">
                  <h3 class="card-title">
                  {{ $notice->title }}
                  </h3>
                  <p class="card-text">
                    {{ $notice->description }}
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            @endforeach
      @endif
    @else
      <span class="text-danger">
        No notice to show
      </span>
    @endif
  </div>
</div>

@endsection
