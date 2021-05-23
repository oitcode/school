<div class="p-3">
  <h3>Create New Memo</h3>

  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control" rows="3" wire:model.defer="body"></textarea>
    @error('body') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
</div>
