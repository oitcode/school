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
      <h1 class="display-4 text-light">Careers</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Job opportunities at our schhol
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
  <div class="row">

    <div class="col-md-8">
      <h3>Vacancies</h3>

      <p class="text-secondary">
        Please see the below listed open vacancies. Please apply for 
        your desired position.
      </p>

      @if ($vacancies != null && count($vacancies) > 0)
        <div class="border">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($vacancies as $vacancy)
                <tr>
                  <td class="text-secondary">
                    {{ $loop->iteration }}
                  </td>

                  <td>
                    <a href="">
                    {{ $vacancy->title }}
                    </a>
                  </td>

                  <td>
                    <a href="">
                      Apply
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <p class="text-danger">
          No vacancies to show. Please check again in future. 
        </p>
      @endif
    </div>

    <div class="col-md-4">
      <h3>Upload resume</h3>
      <p class="text-secondary">
        Please upload your resume. We will see if any position available for you.
      </p>
      @livewire ('careers-resume-submission-create')
    </div>
  </div>
</div>


@endsection
