<div class="p-2">
  <h3 class="h5">Create New Student</h3>

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
    <input type="text" class="form-control" wire:model.defer="phone">
    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Address</label>
    <input type="text" class="form-control" wire:model.defer="address">
    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <hr />

  <div class="form-group">
    <label for="">Starting Pending Balance</label>
    <input type="text" class="form-control" wire:model.defer="starting_pending_balance">
    @error('starting_pending_balance') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button class="btn btn-primary" wire:click="store">Submit</button>

  @if ($native)
    <button class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
  @else
    <button class="btn btn-danger" wire:click="$emit('exitCreateStudent')">Cancel</button>
  @endif
</div>
