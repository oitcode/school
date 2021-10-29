<x-create-box title="Create new user">

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
    <label for="">Password</label>
    <input type="password" class="form-control" wire:model.defer="password">
    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Confirm Password</label>
    <input type="password" class="form-control" wire:model.defer="password_confirm">
    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
  
  <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreateMode')">Cancel</button>

</x-create-box>
