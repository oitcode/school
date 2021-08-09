<div class="card card-outline card-light">
  <div class="card-header p-2" {{-- style="background-color: #d0d0e8 !important;" --}} >
    <h3 class="card-title mt-1">
      Frontpage Theme
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>


  <div class="card-body p-0">

    @if ($createMode)
      @livewire('frontpage-theme-create')
    @elseif ($updateMode)
      @livewire('frontpage-theme-update', ['frontpageTheme' => $updatingFrontpageTheme,])
    @else
      @livewire('frontpage-theme-list')
    @endif

  </div>

</div>
