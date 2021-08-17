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

    <div class="bg-light border p-2">

      <div class="float-left mr-3">
        <button class="btn">
          <span class="badge">
            Session
          </span>
          {{ $currentAcademicSession->name }}
        </button>
      </div>

      @if (false)
      <div class="float-left mr-3">
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ $currentMode ?? 'Mode' }}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Create</a>
            <a class="dropdown-item" href="" wire:click.prevent="enterListMode">List</a>
            <a class="dropdown-item" href="#">Display</a>
            <a class="dropdown-item" href="#">Update</a>
            <a class="dropdown-item" href="#">Delete</a>
          </div>
        </div>
      </div>
      @endif

      <div class="float-left mr-3">
        <button class="btn" wire:click="enterFeesStructureCreateMode">
          <i class="fas fa-plus text-secondary mr-2"></i>
          Fees structure
        </button>
      </div>


      <div class="float-right mr-3">
        <button class="btn text-primary" wire:click="$refresh">
          <i class="fas fa-sync mr-2"></i>
          Refresh
        </button>
      </div>

      <div class="float-right mt-2 mr-3 text-secondary" wire:loading.delay>
          Loading ...
      </div>

      <div class="clearfix">
      </div>
    </div>


    @if ($createFeesStructureMode)
      @livewire ('fees-structure-create')
    @else
    @endif

    @if ($listMode)
      @livewire ('fees-list')
    @endif

    @if (true)
      @livewire ('fees-term-list', ['academicSession' => $currentAcademicSession,])
    @endif

  </div>

</div>
