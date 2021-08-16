<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Fees
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>

      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterFacilityCategoryCreateMode">
        <i class="fas fa-folder-plus"></i>
      </button>

      @if (false)
      <span class="">
          <input type="text" wire:model.defer="patientSearchName" wire:keydown.enter="search" class="">
          <button class="btn btn-sm text-info text-bold" wire:click="search">
            Go
          </button>
      </span>
      @endif
    </div>
  </div>


  <div class="card-body p-0">

  @livewire ('fees-list')

  </div>

</div>
