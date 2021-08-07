<div class="m-3">
  <h2>Update Mainpage Content</h2>

  <div class="form-group">
    <label for="">Body</label>
    <textarea rows="5" class="form-control" wire:model.defer="body">
    </textarea>
    @error('body') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <img src="{{ asset('storage/' . $mainpageContent->image_path) }}" style="height:50px; width:50px;">
      <label for="">Image</label>
      <input type="file" wire:model="image">
      @error('image') <span class="error">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="update">Update</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitUpdate')">Cancel</button>
</div>
