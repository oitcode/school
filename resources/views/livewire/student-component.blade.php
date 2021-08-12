<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Student
    </h3>
    <div class="card-tools mx-3">
    </div>
  </div>


  <div class="card-body p-0">

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
</div>
