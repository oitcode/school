<div class="m-3">
  <h2>Create New Theme </h2>
  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" wire:model.defer="name" />
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <label for="">Hero image</label>
      <input type="file" wire:model="hero_image">
      @error('hero_image') <span class="error">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
</div>
