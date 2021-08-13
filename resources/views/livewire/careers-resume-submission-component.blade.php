<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Resume Submission
    </h3>
  </div>

  <div class="card-body p-0">

    @if ($createMode)
      @livewire ('academic-session-create')
    @elseif ($displayMode)
      @livewire ('academic-session-display', ['academicSession' => $displayingAcademicSession,])
    @else
      @livewire ('careers-resume-submission-list')
    @endif

  </div>
</div>
