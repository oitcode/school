<div class="p-2">
  <h3>Create New Class</h3>

  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" wire:model.defer="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label>Academic Session</label>
    <select class="custom-select" wire:model="academic_session_id">
      <option>---</option>
      @foreach ($academicSessions as $academicSession)
        <option value="{{ $academicSession->academic_session_id }}">{{ $academicSession->name }}</option>
      @endforeach
    </select>
    @error('academic_session_id') <span class="text-danger">{{ $message }}</span>@enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
</div>
