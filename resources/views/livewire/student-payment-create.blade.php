<div class="p-3">
  <h3 class="h5">Recieve Payment</h3>

  @if (session()->has('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
  @endif

  <div class="form-group">
    <label for="">Amount</label>
    <input type="text" class="form-control" wire:model.defer="amount">
    @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Deposited by</label>
    <input type="text" class="form-control" wire:model.defer="deposited_by">
    @error('deposited_by') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="receivePayment">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitStudentPaymentReceiveMode')">Cancel</button>
</div>
