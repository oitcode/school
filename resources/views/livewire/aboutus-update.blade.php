<div class="m-3">
  <h2>Update About Us</h2>


  <div class="form-group">
    <label for="">Paragraph 1</label>
    <textarea rows="5" class="form-control" wire:model.defer="paragraph_1">
    </textarea>
    @error('paragraph_1') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <img src="{{ asset('storage/' . $aboutUs->image_path_1) }}" class="img-fluid">
      <label for="">New Image</label>
      <input type="file" wire:model="image1">
      @error('image1') <span class="error">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Paragraph 2</label>
    <textarea rows="5" class="form-control" wire:model.defer="paragraph_2">
    </textarea>
    @error('paragraph_2') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <img src="{{ asset('storage/' . $aboutUs->image_path_2) }}" class="img-fluid">
      <label for="">New Image</label>
      <input type="file" wire:model="image1">
      @error('image2') <span class="error">{{ $message }}</span> @enderror
  </div>


  <div class="form-group">
    <label for="">Paragraph 3</label>
    <textarea rows="5" class="form-control" wire:model.defer="paragraph_3">
    </textarea>
    @error('paragraph_3') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <img src="{{ asset('storage/' . $aboutUs->image_path_3) }}" class="img-fluid">
      <label for="">New Image</label>
      <input type="file" wire:model="image1">
      @error('image3') <span class="error">{{ $message }}</span> @enderror
  </div>


  <button type="submit" class="btn btn-primary" wire:click="update">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitUpdate')">Cancel</button>
</div>
