<div class="container-fluid border-bottom py-2">
  <div class="container text-primary">
    <div class="float-left mr-3">
      <img src="{{ asset('img/email-1.png') }}" width="25" height="25" alt="" class="mr-1">
        {{ $school->email }}
    </div>
    <div class="float-left mr-3">
      <img src="{{ asset('img/phone-1.webp') }}" width="25" height="25" alt="" class="mr-1">
        {{ $school->phone }}
    </div>
    <div class="float-right mr-3">
      @foreach ($socialMediaLinks as $socialMediaLink)
        <a href="{{ $socialMediaLink->url }}" target="_blank">
          @if (strtolower($socialMediaLink->media_name) === 'facebook')
            <img src="{{ asset('img/fb-icon-1.png') }}" width="25" height="25" alt="" class="mr-1">
          @elseif (strtolower($socialMediaLink->media_name) === 'twitter')
            <img src="{{ asset('img/twitter-icon-1.png') }}" width="25" height="25" alt="" class="mr-1">
          @elseif (strtolower($socialMediaLink->media_name) === 'youtube')
            <img src="{{ asset('img/youtube-icon-1.png') }}" width="25" height="25" alt="" class="mr-1">
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
