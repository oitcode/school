<div class="">
  <h3 class="">
    Class
  </h3>

  <div class="bg-white border p-2">
    <div class="float-left mr-3">
      <button class="btn" wire:click="enterCreateMode">
        <i class="fas fa-plus text-secondary mr-2"></i>
        Add Class
      </button>
    </div>

    <div class="clearfix">
    </div>
  </div>

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
