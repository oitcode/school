<div class="p-2">
  <h3 class="h5">Create New Student</h3>

  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" wire:model.defer="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button class="btn btn-primary" wire:click="store">Submit</button>
  <button class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
</div>
