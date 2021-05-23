<footer class="border-top">
  <div class="container-fluid bg-light">
    <div class="container py-3">
      <div class="row">
        <div class="col-md-4">
          <h3 class="h5">
            <img src="{{ asset('img/logo_1.png') }}" width="25" height="25" alt="" class="mr-1">
            {{ $school->name }}
          </h3>
          <br />
          <img src="{{ asset('img/location-1.png') }}" width="25" height="25" alt="" class="mr-1">
          {{ $school->address }}
          <br />
          <img src="{{ asset('img/phone-1.webp') }}" width="25" height="25" alt="" class="mr-1">
          {{ $school->phone }}
          <br />
          <img src="{{ asset('img/phone-1.webp') }}" width="25" height="25" alt="" class="mr-1">
          {{ $school->email }}
        </div>
        <div class="col-md-4">
          Facilities
          <br />
          Teachers
          <br />
          About Us
          <br />
          Academic Calendar
          <br />
          Admission Form
        </div>
        <div class="col-md-4">
          <h3 class="h4">Connect</h3>
          <img src="{{ asset('img/fb-1.png') }}" width="30" height="30" alt="" class="mr-1">
          <img src="{{ asset('img/twitter-1.png') }}" width="30" height="30" alt="" class="mr-1">
          <p class="mt-3">
            Careers
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid border-top border-bottom">
    <div class="container text-center py-3">
      &copy; 2021 {{ $school->name }}
    </div>
  </div>

</footer>
