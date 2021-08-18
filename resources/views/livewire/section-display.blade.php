<div class="p-0">

  <div class="bg-light border p-2">

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


  <div>
      <h3 class="h4 mt-3 ml-3">
        {{ $section->oClass->name }}
        {{ $section->name }}
      </h3>
  </div>

  @if ($addNewStudentMode)
    @livewire ('student-create', ['section_id' => $section->section_id, 'native' => false,])
  @endif

  @if ($addNewStudentsFromFileMode)
    @livewire ('o-class-students-file-upload', ['section_id' => $section->section_id,])
  @endif


  <div class="row">
    <div class="col-md-6">

      <div class="row p-2 border-bottom-rm text-secondary" style="margin: auto;">
        <div class="col-md-2">
          Total Students
        </div>
        <div class="col-md-6">
          {{ count($section->students) }}
        </div>
      </div>
    </div>

    <div class="col-md-2">
    </div>

    <div class="col-md-4">
    </div>
  </div>

</div>
