<div class="p-2">
  <div class="form-group">
    <label for="">School Name</label>
    <input type="email" class="form-control" wire:model.defer="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Address</label>
    <input type="text" class="form-control" wire:model.defer="address">
    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Logo</label>
    <img src="{{ asset('storage/' . $school->logo_image_path) }}" style="max-height:50px; max-width:50px;">
    <input type="file" wire:model="logo_image">
    @error('logo_image') <span class="error">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Phone</label>
    <input type="text" class="form-control" wire:model.defer="phone">
    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" wire:model.defer="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Slogan</label>
    <input type="text" class="form-control" wire:model.defer="slogan">
    @error('slogan') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Comment</label>
    <input type="text" class="form-control" wire:model.defer="comment">
    @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="update">
    <span class="spinner-grow spinner-grow-sm" wire:loading.delay></span>
    Update
  </button>

  <button type="submit" class="btn btn-danger" wire:click="$emit('exitUpdate')">Cancel</button>
</div>
