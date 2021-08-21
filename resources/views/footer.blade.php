<footer class="border-top">
  <div class="container-fluid bg-light">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">

          <div class="mb-3">
            <h3 class="h5">
              <img src="{{ asset('storage/' . $school->logo_image_path) }}" width="25" height="25">
              {{ $school->name }}
            </h3>
          </div>

          <div class="mb-1">
            <i class="fa fa-map-marker mr-2 border border-primary rounded-circle p-2 text-info"></i>
            {{ $school->address }}
          </div>

          <div class="mb-1">
            <i class="fa fa-phone mr-2 border border-primary rounded-circle p-2 text-info"></i>
            {{ $school->phone }}
          </div>

          <div class="mb-1">
            <i class="fa fa-envelope mr-2 border border-primary rounded-circle p-2 text-info"></i>
            {{ $school->email }}
          </div>
        </div>

        <div class="col-md-4 mb-4 mb-md-0">
          <h3 class="h4">Useful links</h3>
            <a href="{{ route('careers') }}" class="text-dark">
            Careers
            </a>
          <br />
            <a href="{{ route('academic-calendar') }}" class="text-dark">
            Academic Calendar
            </a>
          <br />
            <a href="{{ route('admission-form') }}" class="text-dark">
              Admission Form
            </a>
        </div>
        <div class="col-md-4">
          <h3 class="h4">Connect</h3>
          @foreach ($socialMediaLinks as $socialMediaLink)
            <a href="{{ $socialMediaLink->url }}" target="_blank">
              @if (strtolower($socialMediaLink->media_name) === 'facebook')
                <i class="fa fa-facebook mr-2 border border-primary rounded-circle p-2"></i>
              @elseif (strtolower($socialMediaLink->media_name) === 'twitter')
                <i class="fa fa-twitter mr-2 border border-primary rounded-circle p-2"></i>
              @elseif (strtolower($socialMediaLink->media_name) === 'youtube')
                <i class="fa fa-youtube mr-2 border border-primary rounded-circle p-2"></i>
              @else
                {{ $socialMediaLink->media_name }}
              @endif
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid border-top">
    <div class="container text-center py-3">
      &copy; 2021 {{ $school->name }}
      &nbsp;&nbsp;
      |
      &nbsp;&nbsp;
      <span class="text-muted">
        Developed by
        <a href="https://oit.com.np">
          OIT
        </a>
      </span>
    </div>
  </div>

</footer>
