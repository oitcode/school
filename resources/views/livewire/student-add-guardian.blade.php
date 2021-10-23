<div class="card">
  <div class="card-body">
    <h3 class="h5">Create New Guardian</h3>
  
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" wire:model.defer="name">
      @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <div class="form-group">
      <label for="">Email</label>
      <input type="email" class="form-control" wire:model.defer="email">
      @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <div class="form-group">
      <label for="">Phone</label>
      <input type="email" class="form-control" wire:model.defer="phone">
      @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <div class="form-group">
      <label for="">Address</label>
      <input type="email" class="form-control" wire:model.defer="address">
      @error('address') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <div class="form-group">
      <label for="">Status</label>
      <select class="custom-select" wire:model.defer="type">
        <option>Primary</option>
        <option>Secondary</option>
      </select>
      @error('type') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
    <button type="submit" class="btn btn-danger" wire:click="$emit('exitAddGuardian')">Cancel</button>
  </div>
</div>
