<div class="p-2">

  <h2 class="h5 p-2 bg-light border">Send SMS</h2>

  <div class="my-2">
    @if (count($student->guardians) > 0)
      @foreach ($student->guardians as $guardian)
        <div class="my-2">
          Parent:
          {{ $guardian->name }}
        </div>
        <div class="my-2">
          Phone: 
          {{ $guardian->phone }}
        </div>
        @break
      @endforeach
    @else
      <small class="text-secondary">
        No Parent
      </small>
    @endif
  </div>

  <div class="form-group my-2">
    <label>Message</label>
    <textarea rows="5" class="form-control" wire:model.defer="message">
    </textarea>
    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="sendSms">Send SMS</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitSendSmsMode')">Cancel</button>
</div>
