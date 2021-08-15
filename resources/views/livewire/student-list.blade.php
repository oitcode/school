<div>

  <div class="bg-light border p-2">
    <div class="float-left mr-3">
      @if ($filterDisplay)
        <button class="btn" wire:click="hideFilter">
          <i class="fas fa-filter text-secondary mr-2"></i>
          Hide Filter
        </button>
      @else
        <button class="btn" wire:click="showFilter">
          <i class="fas fa-filter text-secondary mr-2"></i>
          Show Filter
        </button>
      @endif
    </div>

    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-tag text-secondary mr-2"></i>
        Misc
      </button>
    </div>

    <div class="float-right mt-2 mr-3 text-secondary" wire:loading.delay>
        Loading ...
    </div>

    <div class="clearfix">
    </div>
  </div>

  @if ($filterDisplay)
    <div class="p-2">

      <div class="float-left mr-3">
        <div class="form-group">
          <label class="text-secondary">Name</label>
          <input type="text" class="form-control" wire:model.defer="searchData.studentName" wire:keydown.enter="search">
          @error('searchData.studentName') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      </div>

      <div class="float-left mr-3">
        <div class="form-group">
          <label class="text-secondary">Session</label>
          <select class="custom-select" wire:model="searchData.academicSessionId" wire:change="updateSelectedAcademicSession">
            <option>---</option>
            @foreach ($academicSessions as $academicSession)
              <option value="{{ $academicSession->academic_session_id}}">{{ $academicSession->name }}</option>
            @endforeach
          </select>
          @error('searchData.academicSessionId') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      </div>

      <div class="float-left mr-3">
        <div class="form-group">
          <label class="text-secondary">Class</label>
          @if ($selectedAcademicSession)
            <select class="custom-select" wire:model="searchData.oClassId">
              @foreach ($selectedAcademicSession->oClasses as $oClass)
                <option value="{{ $oClass->o_class_id }}">{{ $oClass->name }}</option>
              @endforeach
            </select>
            @error('search_o_class_id') <span class="text-danger">{{ $message }}</span> @enderror
          @else
            <div class="text-secondary">
              <small>
                Select academic session first
              </small>
            </div>
          @endif
        </div>
      </div>

      <div class="float-left mr-3">
        <div class="form-group">
          <label class="text-secondary">Parent Name</label>
          <input type="text" class="form-control" wire:model.defer="searchData.parentName" wire:keydown.enter="search">
          @error('search_parent_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      </div>

      <div class="float-left mr-3">
        <div class="form-group">
          <br />
          <button class="btn text-primary mt-2 mr-3" wire:click="search">
            <i class="fas fa-search mr-1"></i>
            Search
          </button>
        </div>
      </div>

      <div class="clearfix">
      </div>
    </div>
  @endif

  @if ($students != null && count($students) > 0)

  <div class="border pl-2 p-1">
    Total: {{ count($students) }}
  </div>

  <table class="table table-sm table-hover">
    <thead>
      <tr class="bg-light text-secondary">
        <th>#</th>
        <th>Name</th>
        <th>Class</th>
        <th>Guardian</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
        <tr>
          <td class="text-secondary">
            {{ $loop->iteration }}
          </td>

          <td>
            <a class="text-dark" href="" wire:click.prevent="$emit('displayStudent', {{ $student }})">
              {{ $student->name }}
            </a>
          </td>

          <td class="text-secondary">
              {{ $student->oClass->name }}
          </td>

          <td class="text-secondary">
            @if (count($student->guardians) > 0)
              @foreach ($student->guardians as $guardian)
                {{ $guardian->name }}
              @endforeach
            @else
              <small class="text-secondary">
                No Info
              </small>
            @endif
          </td>

          <td>
            <span class="btn btn-tool btn-sm mr-2" wire:click="">
              <i class="fas fa-pencil-alt text-primary"></i>
            </span>
            <span class="btn btn-tool btn-sm" wire:click="">
              <i class="fas fa-trash text-danger"></i>
            </span>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  @else
    <div class="p-2 text-muted">
      No records to display
    </div>
  @endif
</div>
