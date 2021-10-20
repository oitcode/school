<div class="">
  <h3 class="">
    Section
  </h3>

  @if ($displayMode)
    @livewire ('section-display', ['section' => $displayingSection,])
  @elseif ($updateMode)
    @livewire ('section-update', ['updatingSection' => $updatingSection,])
  @else
    @livewire ('section-list')
  @endif

</div>
