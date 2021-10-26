<div class="card">
  <div class="card-body p-0">
    <div class="bg-light border p-2">

      <div class="float-left mr-3 mt-1">
        <h3 class="h5 text-dark">Students by class</h3>
      </div>

      <div class="float-left mr-3">
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ $displayAcademicSession->name }}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            @foreach ($academicSessions as $item)
              <button class="dropdown-item" wire:click="setDisplayAcademicSession({{ $item }})">
                {{ $item->name }}
              </button>
            @endforeach
          </div>
        </div>
      </div>

      <div class="float-right mr-3">
        <button class="btn text-primary" wire:click="closeInner">
          <i class="fas fa-times mr-2"></i>
          Reset
        </button>
      </div>

      <div class="float-right mt-2 mr-3 text-secondary" wire:loading.delay>
          Loading ...
      </div>

      <div class="clearfix">
      </div>
    </div>

    @if ($innerMode)
      @livewire ('chart-o-class-student-inner', ['displayAcademicSession' => $displayAcademicSession,])
    @endif
    
  </div>
</div>
