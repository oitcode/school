<div class="">
  <h3 class="">
    Student
  </h3>

  @if ($createMode)
    @livewire ('student-create')
  @elseif ($displayMode)
    @livewire ('student-display', ['student' => $displayingStudent,])
  @elseif ($updateMode)
    @livewire ('student-update', ['student' => $updatingStudent,])
  @else
    @livewire ('student-list')
  @endif

</div>
