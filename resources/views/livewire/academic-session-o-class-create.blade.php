<div class="card">
  <div class="card-body">
    <h3 class="h5">Add class for academic session</h3>
  
    <div class="form-group">
      <label for="">Class Name</label>
      <input type="text" class="form-control" wire:model.defer="name">
      @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
    <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreateAcademicSessionOclassMode')">Cancel</button>
  </div>
</div>
