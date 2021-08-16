<div class="p-3">

  @if (session()->has('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
  @endif

  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" wire:model.defer="sender_name">
    @error('sender_name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Email Address</label>
    <input type="email" class="form-control" wire:model.defer="sender_email">
    @error('sender_email') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Phone</label>
    <input type="text" class="form-control" wire:model.defer="sender_phone">
    @error('sender_phone') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Message</label>
    <textarea class="form-control" rows="3" wire:model.defer="message"></textarea>
    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
  @if (false)
    <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
  @endif
</div>
