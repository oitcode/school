<div class="m-3">
  <h2>Create Principals Message</h2>
  <div class="form-group">
    <label for="">Message</label>
    <textarea rows="5" class="form-control" wire:model.defer="message">
    </textarea>
    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <label for="">Image</label>
      <input type="file" class="form-control" wire:model="image">
      @error('image') <span class="text-danger">{{ $message }}</span> @enderror
  </div>


  <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
</div>
