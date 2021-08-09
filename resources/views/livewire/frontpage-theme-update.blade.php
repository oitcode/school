<div class="m-3">
  <h2>Update Theme </h2>
  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" wire:model.defer="name" />
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <label for="">Hero image</label>
      <br />
      <img src="{{ asset('storage/' . $frontpageTheme->hero_image_path) }}" width="50" height="50">
      <input type="file" wire:model="new_hero_image">
      @error('new_hero_image') <span class="error">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="update">Update</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitUpdate')">Cancel</button>
</div>
