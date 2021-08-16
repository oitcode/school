<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Admission Application
    </h3>

    <div class="card-tools mx-3">
    </div>
  </div>

  <div class="card-body p-0">

    <div class="bg-light border p-2">


      <div class="float-left mr-3">
        <button class="btn" wire:click="enterCreateMode">
          <i class="fas fa-plus text-secondary mr-2"></i>
          New
        </button>
      </div>

      <div class="float-left mr-3">
        <button class="btn">
          <i class="fas fa-arrow-up text-secondary mr-2"></i>
          Promote
        </button>
      </div>

      <div class="float-left mr-3">
        <button class="btn">
          <i class="fas fa-sticky-note text-secondary mr-2"></i>
          Add note
        </button>
      </div>

      <div class="float-left mr-3">
        <button class="btn">
          <i class="fas fa-tag text-secondary mr-2"></i>
          Misc
        </button>
      </div>

      <div class="float-right mr-3 pt-1">
        Mode
        <span class="badge badge-pill-rm">
          List
        <span>
      </div>

      <div class="clearfix">
      </div>
    </div>

    @livewire ('admission-application-list')

  </div>
</div>
