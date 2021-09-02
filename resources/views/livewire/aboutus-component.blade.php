<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      About Us
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>

  <div class="card-body p-0">
    @if (!$createMode && !$updateMode)
      @livewire ('about-us-content-list')
    @endif


    @if ($createMode)
      @livewire ('about-us-content-create')
    @endif

    @if ($updateMode)
      @livewire ('aboutus-update', ['aboutUs' => $aboutUs])
    @endif
  </div>
</div>
