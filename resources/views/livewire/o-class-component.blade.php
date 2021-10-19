<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Class
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>


  <div class="card-body p-0">


    @if ($createMode)
      @livewire ('o-class-create')
    @elseif ($updateMode)
      @livewire ('o-class-update', ['updatingOClass' => $updatingOClass,])
    @elseif ($displayMode)
      @livewire ('o-class-display', ['oClass' => $displayingOClass,])
    @else
      @livewire ('o-class-list')
    @endif

    @if ($deleteMode)
      @livewire ('o-class-delete-confirm', ['deletingOClass' => $deletingOClass,])
    @endif

  </div>
</div>
