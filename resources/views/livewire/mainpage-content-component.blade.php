<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Mainpage
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>


  <div class="card-body p-0">

    @if ($createMode)
      @livewire ('mainpage-content-create')
    @elseif ($updateMode)
      @livewire ('mainpage-content-update', ['mainpageContent' => $updatingMainpageContent,])
    @else
      @livewire ('mainpage-content-list')
    @endif

    @if ($deleteMode)
      @livewire ('mainpage-content-delete-confirm', ['deletingMainpageContent' => $deletingMainpageContent,])
    @endif


  </div>

</div>
