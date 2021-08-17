<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Fees Structure
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>


  <div class="card-body p-0">

    @if ($displayMode)
      @livewire ('fees-structure-display', ['feesStructure' => $displayingFeesStructure,])
    @elseif ($updateMode)
      @livewire ('fees-structure-update', ['feesStructure' => $updatingFeesStructure,])
    @else
      @livewire ('fees-structure-list')
    @endif

  </div>

</div>
