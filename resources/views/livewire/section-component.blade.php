<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Section
    </h3>
  </div>


  <div class="card-body p-0">

    @if ($displayMode)
      @livewire ('section-display', ['section' => $displayingSection,])
    @elseif ($updateMode)
      @livewire ('section-update', ['updatingSection' => $updatingSection,])
    @else
      @livewire ('section-list')
    @endif

  </div>
</div>
