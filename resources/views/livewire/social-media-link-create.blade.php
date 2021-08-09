<div class="p-2">
  <h3>Create New Social Media Link</h3>

  <div class="form-group">
    <label for="">Social media name</label>
    <input type="text" class="form-control" wire:model.defer="media_name">
    @error('media_name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">URL</label>
    <input type="text" class="form-control" wire:model.defer="url">
    @error('url') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
</div>
