<div class="">
  <h3 class="">
    Academic Session
  </h3>

  <div class="bg-white border p-2">

    <div class="float-left mr-3">
      <button class="btn" wire:click="enterCreateMode">
        <i class="fas fa-plus text-secondary mr-2"></i>
        New Academic Session
      </button>
    </div>

    @if (false)
    <div class="float-right mr-3">
      <button class="btn text-danger" wire:click="$emit('exitDisplay')">
        <i class="fas fa-times mr-2"></i>
        Close
      </button>
    </div>

    <div class="float-right mr-3">
      <button class="btn text-primary" wire:click="$refresh">
        <i class="fas fa-sync mr-2"></i>
        Refresh
      </button>
    </div>
    @endif

    <div class="clearfix">
    </div>
  </div>

  @if ($createMode)
    @livewire ('academic-session-create')
  @elseif ($displayMode)
    @livewire ('academic-session-display', ['academicSession' => $displayingAcademicSession,])
  @elseif ($updateMode)
    @livewire ('academic-session-update', ['academicSession' => $updatingAcademicSession,])
  @else
    @livewire ('academic-session-list')
  @endif

  @if ($deleteMode)
    @livewire ('academic-session-delete-confirm', ['deletingAcademicSession' => $deletingAcademicSession,])
  @endif

</div>
