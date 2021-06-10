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
      <img src="{{ asset('img/fb-1.png') }}" width="25" height="25" alt="" class="mr-1">
      <img src="{{ asset('img/twitter-1.png') }}" width="25" height="25" alt="" class="mr-1">
    </div>
    <div class="clearfix">
    </div>
  </div>
</div>
