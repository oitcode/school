<div class="p-2">
  <h3 class="h5">Update Class</h3>

  <div class="my-3">
    Academic Session: {{ $updatingOClass->academicSession->name }}
  </div>

  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" wire:model.defer="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="update">Update</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitUpdate')">Cancel</button>
</div>
