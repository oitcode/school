<div class="card card-outline card-light">
  <div class="card-header p-2" {{-- style="background-color: #d0d0e8 !important;" --}} >
    <h3 class="card-title mt-1">
      Notices
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>


  <div class="card-body p-0">

    @if ($createMode)
      @livewire ('notice-create')
    @elseif ($updateMode)
      @livewire ('notice-update', ['notice' => $updatingNotice,])
    @elseif ($displayMode)
      @livewire ('notice-display', ['notice' => $displayingNotice,])
    @else
      @livewire ('notice-list')
    @endif

    @if ($deleteMode)
      @livewire ('notice-delete-confirm', ['deletingNotice' => $deletingNotice,])
    @endif
  </div>
</div>
