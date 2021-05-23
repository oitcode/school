@extends('layouts.app')

@section('content')

<div class="container-fluid bg-light o-overlaid p-0">
  <div class="o-overlay">
    <div class="container py-4">
      <h1 class="display-4 text-light">Extra Curriculars</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Extra Curricular Activities
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

    @if ($extraCurricularCategories != null && count($extraCurricularCategories) > 0)
        @foreach ($extraCurricularCategories as $extraCurricularCategory)
          @if (count($extraCurricularCategory->extraCurriculars) > 0)
            <div class="container-fluid">
              <div class="container py-3 border-top">
                <h2>
                  {{ $extraCurricularCategory->name }}
                </h2>
                <div class="row">
                @foreach ($extraCurricularCategory->extraCurriculars as $extraCurricular)
                  <div class="col-md-4">
                    <div class="card mb-3">
                      <div class="card-body">
                      <img src="{{ asset('storage/' . $extraCurricular->image_path) }}">
                        <h3 class="card-title">
                        {{ $extraCurricular->name }}
                        </h3>
                        <p class="card-text">
                          {{ $extraCurricular->description }}
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
            </div>
          </div>
          @endif
        @endforeach
      </div>
    @else
      <span class="text-danger">
        No extra curricular to show
      </span>
    @endif

@endsection
