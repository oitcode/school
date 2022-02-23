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
      <h1 class="display-4 text-light">Academic Calendar</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              School Calendar
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

<div class="container py-5">
  Academic session: <span class="text-secondary"> 2078</span>


  @if (false)
  <h3>July</h3>
  <div class="border">
   @php
     $i = 0;
   @endphp
    <table class="table">
      <thead>
        <tr class="bg-light">
          <th>Day</th>
          <th>Date</th>
          <th>Event</th>
        </tr>
      </thead>
      <tbody>
        @for ($i= 0; $i <= 30; $i++)
                @if ($i % 7 == 0 )
                  @php
                  $day = 'Sun';
                  @endphp
                @else
                  @php
                  $day = 'Mon';
                  @endphp
                @endif
          <tr @if ($day == 'Sun') class="text-danger" style="background: #fee"@endif>
            <td>{{ $day }}</td>
            <td>2021-04-21</td>
            <td class="">First term</td>
          </tr>
        @endfor
      </tbody>
    </table>
  </div>
  @endif

  <div class="text-secondary">
    Please contact administration.
  </div>



</div>


@endsection
