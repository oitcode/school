<div class="m-3">
  <h2>Update Principals Message</h2>

  <div class="form-group">
    <label for="">Principal's Name</label>
    <input type="text" class="form-control" wire:model.defer="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Principal's Email</label>
    <input type="text" class="form-control" wire:model.defer="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Principal's Phone</label>
    <input type="text" class="form-control" wire:model.defer="phone">
    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Message</label>
    <textarea rows="5" class="form-control" wire:model.defer="message">
    </textarea>
    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <img src="{{ asset('storage/' . $principalsMessage->image_path) }}" style="max-height:100px; max-width:100px;">
      <label for="">New Image</label>
      <input type="file" wire:model="image">
      @error('image') <span class="error">{{ $message }}</span> @enderror
  </div>


  <button type="submit" class="btn btn-primary" wire:click="update">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitUpdate')">Cancel</button>
</div>
