<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Academic Session
    </h3>
    <span class="badge badge-pill badge-primary m-2">
      @if ($createMode)
        Create
      @elseif ($displayMode)
        Display
      @elseif ($updateMode)
        Update
      @else
        List
      @endif
    </span>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>

  <div class="card-body p-0">

    @if ($createMode)
      @livewire ('academic-session-create')
    @elseif ($displayMode)
      @livewire ('academic-session-display', ['academicSession' => $displayingAcademicSession,])
    @else
      @livewire ('academic-session-list')
    @endif

  </div>
</div>
