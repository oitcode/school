<div class="card card-outline card-light">
  <div class="card-header p-2" {{-- style="background-color: #d0d0e8 !important;" --}} >
    <h3 class="card-title mt-1">
      Teachers
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>


  <div class="card-body p-0">

    @if ($updateMode)
      @livewire ('teacher-update', ['teacher' => $updatingTeacher,])
    @elseif ($createMode)
      @livewire ('teacher-create')
    @else
      @livewire ('teacher-list')
    @endif

    @if ($deleteMode)
      @livewire ('teacher-delete-confirm', ['deletingTeacher' => $deletingTeacher,])
    @endif

  </div>
</div>
