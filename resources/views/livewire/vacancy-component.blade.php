<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Vacancy
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>


  <div class="card-body p-0">

    @if ($createMode)
      @livewire ('vacancy-create')
    @elseif ($updateMode)
      @livewire ('vacancy-update', ['vacancy' => $updatingVacancy,])
    @else
      @livewire ('vacancy-list')
    @endif

  </div>
</div>
