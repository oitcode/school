<div>

    <h3>Publish Fees Invoice</h3>

    <div wire:loading>
      Processing ...
    </div>
  
    <div class="form-group">
      <label for="">Term</label>
      <input type="text" class="form-control" wire:model.defer="term">
      @error('term') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
    <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>

</div>
