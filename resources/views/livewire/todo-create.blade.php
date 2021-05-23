<div class="p-3">
  <h3>Create New Todo</h3>

  <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control" wire:model.defer="title">
    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control" rows="3" wire:model.defer="body"></textarea>
    @error('body') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Status</label>
    <select class="custom-select" wire:model.defer="status">
      <option selected>Pending</option>
      <option>Done</option>
      <option>Deferred</option>
      <option>Dropped</option>
    </select>
    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
</div>
