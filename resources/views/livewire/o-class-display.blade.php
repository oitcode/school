<div class="p-0">

  <div class="bg-light border p-2">
    <div class="float-left mr-3">
      <button class="btn" wire:click.prevent="enterAddStudentMode">
        <i class="fas fa-user text-secondary mr-2"></i>
          Add new student
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn" wire:click.prevent="enterUploadStudentsFileMode">
        <i class="fas fa-upload text-secondary mr-2"></i>
        Upload students
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

    <div class="clearfix">
    </div>
  </div>

  <div>

    <div class="float-left mr-3">
      <h3 class="h4 mt-3 ml-3">
        {{ $oClass->name }}
      </h3>
    </div>

    <div class="float-left text-secondary mt-3">
      <small>
        {{ $oClass->academicSession->name }}
      </small>
    </div>


    <div class="clearfix">
    </div>

  </div>



  @if ($addStudentMode)
    @livewire ('student-create', ['o_class_id' => $oClass->o_class_id, 'native' => false,])
  @endif

  @if ($uploadStudentsFileMode)
    @livewire ('o-class-students-file-upload', ['o_class_id' => $oClass->o_class_id,])
  @endif

  <div class="my-2">
    <h3 class="h4 m-3">Students</h3>
    @if ($oClass->students != null && count($oClass->students) > 0)
    <table class="table table-sm table-hover table-valign-middle">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($oClass->students as $student)
          <tr>
            <td class="text-secondary">
              {{ $loop->iteration }}
            </td>
            <td>
              <a class="text-secondary" wire:click.prevent="" href="">
                {{ $student->name }}
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    @else
      <div class="m-3 text-secondary">
      No Students
      </div>
    @endif

</div>
