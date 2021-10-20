<div class="card">
  <div class="card-body">
  
    <h3 class="h5">Update Academic Session</h3>
    
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" wire:model.defer="name">
      @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <div class="form-group">
      <label for="">Status</label>
      <select class="custom-select" wire:model.defer="status">
        <option value="current">Current</option>
        <option value="past">Past</option>
        <option value="future">Future</option>
        <option value="default">Default</option>
      </select>
      @error('status') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    
    <button type="submit" class="btn btn-primary" wire:click="update">Update</button>
    <button type="submit" class="btn btn-danger" wire:click="$emit('exitUpdate')">Cancel</button>
  
  </div>
</div>
