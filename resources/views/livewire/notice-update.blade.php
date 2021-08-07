<div class="p-3">
  <h3>Update Notice</h3>

  <div class="form-group">
    <label for="">Publish Date</label>
    <input type="text" class="form-control" wire:model.defer="publish_date">
    @error('publish_date') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control" wire:model.defer="title">
    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control" rows="3" wire:model.defer="description"></textarea>
    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label>Status</label>
    <select class="custom-select" wire:model.defer="status">
      <option>---</option>
        <option>new</option>
        <option>current</option>
        <option>old</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary" wire:click="update">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitUpdate')">Cancel</button>
</div>
