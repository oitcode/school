<div class="container-fluid border-bottom py-2">
  <div class="container text-primary">
    <div class="float-left mr-3 mb-3 mb-md-0">
      <i class="fa fa-envelope mr-2 border border-primary rounded-circle p-2"></i>
      {{ $school->email }}
    </div>
    <div class="float-left mr-3 mb-xs-3">
      <i class="fa fa-phone mr-2 border border-primary rounded-circle p-2"></i>
      {{ $school->phone }}
    </div>
    <div class="float-right mr-3">
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
    <div class="clearfix">
    </div>
  </div>
</div>
