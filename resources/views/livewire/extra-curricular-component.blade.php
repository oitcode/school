<div class="card card-outline card-light">
  <div class="card-header p-2" {{-- style="background-color: #d0d0e8 !important;" --}} >
    <h3 class="card-title mt-1">
      Extra Curricular
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>

      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCategoryCreateMode">
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
    @if ($categoryCreateMode)
      @livewire('extra-curricular-category-component')
    @elseif ($updateMode)
      @livewire('extra-curricular-update', ['extraCurricular' => $updatingExtraCurricular,])
    @elseif ($createMode)
      @livewire('extra-curricular-create')
    @else
      @livewire('extra-curricular-list')
    @endif

    @if ($deleteMode)
      @livewire('extra-curricular-delete-confirm', ['deletingExtraCurricular' => $deletingExtraCurricular,])
    @endif
  </div>

</div>
