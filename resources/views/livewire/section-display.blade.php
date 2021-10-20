<div class="p-0">

  <div class="bg-white border p-2">

    <div class="float-left mr-3" wire:click="enterStudentListMode">
      <button class="btn">
        <i class="fas fa-users text-secondary mr-2"></i>
        Student List
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn" wire:click="enterAddNewStudentMode">
        <i class="fas fa-plus text-secondary mr-2"></i>
        Add new student
      </button>
    </div>

    <div class="float-left mr-3" wire:click="enterAddNewStudentsFromFileMode">
      <button class="btn">
        <i class="fas fa-file text-secondary mr-2"></i>
        Upload Students
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-sticky-note text-secondary mr-2"></i>
        Add note
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-tag text-secondary mr-2"></i>
        Misc
      </button>
    </div>

    <div class="float-right mr-3">
      <button class="btn text-danger" wire:click="$emit('exitDisplay')">
        <i class="fas fa-times mr-2"></i>
        Close
      </button>
    </div>

    <div class="float-right mr-3">
      <button class="btn text-primary" wire:click="$refresh">
        <i class="fas fa-sync mr-2"></i>
        Refresh
      </button>
    </div>

    <div class="clearfix">
    </div>
  </div>


  <div class="card">
    <div class="card-body">
      <div class="row px-2 py-4 border-bottom h5" style="margin: auto;">
        <div class="col-md-2">
          Section
        </div>
        <div class="col-md-6 text-primary">
          {{ $section->oClass->name }}
          {{ $section->name }}
        </div>
      </div>

      <div class="row px-2 py-4 border-bottom h6" style="margin: auto;">
        <div class="col-md-2">
          Academic Session
        </div>
        <div class="col-md-6 text-primary">
          {{ $section->oClass->academicSession->name }}
          @if ($section->oClass->academicSession->status === 'current')
            <span class="badge badge-pill badge-success ml-3">
              Current
            </span>
          @endif
        </div>
      </div>

      <div class="row p-2 border-bottom-rm" style="margin: auto;">
        <div class="col-md-2">
          Total Students
        </div>
        <div class="col-md-6">
          {{ count($section->students) }}
        </div>
      </div>
    </div>
  </div>

  @if ($addNewStudentMode)
    @livewire ('student-create', ['section_id' => $section->section_id, 'native' => false,])
  @endif

  @if ($addNewStudentsFromFileMode)
    @livewire ('o-class-students-file-upload', ['section_id' => $section->section_id,])
  @endif

  @if ($studentListMode)
    @livewire ('section-student-list', ['section' => $section,])
  @endif

</div>
