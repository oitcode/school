<div>
  <div class="card" >

    <div class="card-header p-2">
      <h2 class="card-title mt-1">
        User Profile
      </h2>
      <div class="card-tools mx-3">
        <button class="btn btn-sm btn-outline-info px-3" wire:click="enterUpdateMode">
          <i class="fas fa-pencil-alt"></i>
        </button>
      </div>
    </div>

    <div class="card-body p-0">

      <div class="row mb-2 p-2 border-bottom">
        <div class="col-md-4">
          Name
        </div>
        <div class="col-md-8">
          {{ $user->name }}
        </div>
      </div>

      <div class="row mb-2 p-2 border-bottom">
        <div class="col-md-4">
          Email
        </div>
        <div class="col-md-8">
          {{ $user->email }}
        </div>
      </div>

      <div class="row mb-2 p-2 border-bottom">
        <div class="col-md-4">
          Phone
        </div>
        <div class="col-md-8">
          +977 1234
        </div>
      </div>

      <div class="row mb-2 p-2">
        <div class="col-md-4">
          Role
        </div>
        <div class="col-md-8">
          <span class="badge badge-primary badge-pill">
            Admin
          </span>
        </div>
      </div>


    </div>
  </div>
</div>
