<div class="p-2">

  <div class="p-2 border-bottom">
    <a  class="mr-3" href="" wire:click.prevent="enterAddStudentMode">
      Add new student
    </a>
    <a href="" wire:click.prevent="enterAddStudentMode">
      Upload students
    </a>
  </div>

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Academic session
    </div>
    <div class="col-md-6">
      <strong>
        {{ $oClass->academicSession->name }}
      </strong>
    </div>
  </div>

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Class
    </div>
    <div class="col-md-6">
      {{ $oClass->name }}
    </div>
  </div>

  @if ($addStudentMode)
    @livewire ('student-create', ['o_class_id' => $oClass->o_class_id,])
  @endif

  @if ($uploadStudentsFileMode)
    @livewire ('o-class-students-file-upload', ['o_class_id' => $oClass->o_class_id,])
  @endif

  <div class="my-2">
    <h3 class="h4">Students</h3>
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
              <a wire:click.prevent="" href="">
                {{ $student->name }}
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  <div class="m-2">
    <button type="submit" class="btn btn-danger" wire:click="$emit('exitDisplay')">Close</button>
  </div>
</div>
