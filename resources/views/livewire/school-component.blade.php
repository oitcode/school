<div class="card card-outline card-light">
  <div class="card-header p-2 border-0">
    <h3 class="card-title mt-1 ml-3">
      School
    </h3>
    <div class="card-tools mx-3">
      @if ($school == null)
        <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
          <i class="fas fa-plus"></i>
        </button>
      @else
        <button class="btn btn-sm btn-outline-info px-3" wire:click="enterUpdateMode">
          <i class="fas fa-pencil-alt"></i>
        </button>
      @endif
    </div>
  </div>


  <div class="card-body p-0">

    @if ($createMode)
      @livewire ('school-create')
    @elseif ($updateMode)
      @livewire ('school-update', ['school' => $school])
    @else
      @livewire ('school-display')
    @endif

  </div>
</div>
