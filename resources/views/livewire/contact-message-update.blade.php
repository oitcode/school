<div class="p-3">

  <div class="form-group">
    <label for="">Email Address</label>
    <input type="email" class="form-control" wire:model.defer="sender_email" readonly>
    @error('sender_email') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Phone</label>
    <input type="text" class="form-control" wire:model.defer="sender_phone" readonly>
    @error('sender_phone') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Status</label>
    <select class="custom-select" wire:model.defer="status">
      <option>---</option>
        <option>new</option>
        <option>progress</option>
        <option>old</option>
    </select>
  </div>

  <div class="form-group">
    <label for="">Message</label>
    <textarea class="form-control" rows="3" wire:model.defer="message" readonly></textarea>
    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="update">Update</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitUpdate')">Cancel</button>
</div>
