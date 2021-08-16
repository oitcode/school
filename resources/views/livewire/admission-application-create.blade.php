<div>

    @if (session()->has('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif

    <div class="row mb-3">

      <div class="col-md-6">
        <h3 class="h5">Student Info</h3>
  
        <div class="form-group">
          <label for="">Name *</label>
          <input type="text" class="form-control" wire:model.defer="student_name">
          @error('student_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control" wire:model.defer="student_email">
          @error('student_email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Phone</label>
          <input type="text" class="form-control" wire:model.defer="student_phone">
          @error('student_phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Address</label>
          <input type="text" class="form-control" wire:model.defer="student_address">
          @error('student_address') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Class *</label>
          <input type="text" class="form-control" wire:model.defer="o_class">
          @error('o_class') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      </div>

      <div class="col-md-4">

        <h3 class="h5">Student Photo</h3>
  
        @if ($image_file)
          <div class="">
            <img src="{{ $image_file->temporaryUrl() }}" width="100" height="100">
          </div>
        @endif

        <div class="form-group">
          <label>Image</label>
          <input type="file" class="form-control" wire:model="image_file">
          @error('image_file') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <h3 class="h5">Student Resume</h3>
  
        <div class="form-group">
          <label>Resume file</label>
          <input type="file" class="form-control" wire:model="resume_file">
          @error('resume_file') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <h3 class="h5">Academic session</h3>
  
        <div class="form-group">
          <label>Academic session *</label>
          <select class="custom-select" wire:model.defer="academic_session_id">
            <option>---</option>
            @foreach ($academicSessions as $academicSession)
              <option value="{{ $academicSession->academic_session_id }}">{{ $academicSession->name }}</option>
            @endforeach
          </select>
          @error('academic_session_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

      </div>

    </div>


    <div class="row mb-3">
      <div class="col-md-6" >
        <h3 class="h5">Primary Guardian</h3>
  
        <div class="form-group">
          <label for="">Name *</label>
          <input type="text" class="form-control" wire:model.defer="primary_guardian_name">
          @error('primary_guardian_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control" wire:model.defer="primary_guardian_email">
          @error('primary_guardian_email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Phone *</label>
          <input type="text" class="form-control" wire:model.defer="primary_guardian_phone">
          @error('primary_guardian_phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Address</label>
          <input type="text" class="form-control" wire:model.defer="primary_guardian_address">
          @error('primary_guardian_address') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      </div>

      <div class="col-md-6" >
        <h3 class="h5">Secondary Guardian</h3>
  
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" wire:model.defer="secondary_guardian_name">
          @error('secondary_guardian_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control" wire:model.defer="secondary_guardian_email">
          @error('secondary_guardian_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Phone</label>
          <input type="text" class="form-control" wire:model.defer="secondary_guardian_phone">
          @error('secondary_guardian_phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Address</label>
          <input type="text" class="form-control" wire:model.defer="secondary_guardian_address">
          @error('secondary_guardian_address') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6" >
        <h3 class="h5">Old School Info</h3>
  
        <div class="form-group">
          <label for="">Old school name</label>
          <input type="text" class="form-control" wire:model.defer="old_school_name">
          @error('old_school_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Old school location</label>
          <input type="text" class="form-control" wire:model.defer="old_school_location">
          @error('old_school_location') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="">Old school class</label>
          <input type="text" class="form-control" wire:model.defer="old_school_class">
          @error('old_school_class') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

      </div>

      <div class="col-md-6" >
      </div>
    </div>

    <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
    <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
</div>
