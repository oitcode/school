<div class="p-3">
  <h3 class="h5">Create Fees Payment</h3>

  <div class="py-3">

    <div class="row py-2">
      <div class="col-md-2">
        Student Name
      </div>
      <div class="col-md-4">
        {{ $feesInvoice->student->name }}
      </div>
    </div>

    <div class="row py-2">
      <div class="col-md-2">
        Current class
      </div>
      <div class="col-md-4">
        {{ $feesInvoice->student->getCurrentSection()->oClass->name }}
        {{ $feesInvoice->student->getCurrentSection()->name }}
      </div>
    </div>

    <hr />

    <div class="row py-2">
      <div class="col-md-2">
        Term
      </div>
      <div class="col-md-4">
        @if ($feesInvoice->feesTerm)
          {{ $feesInvoice->feesTerm->term }}
        @endif
      </div>
    </div>

    <div class="row py-2">
      <div class="col-md-2">
        Fees Date
      </div>
      <div class="col-md-4">
        {{ $feesInvoice->date }}
      </div>
    </div>

    <div class="row py-2">
      <div class="col-md-2">
        Amount
      </div>
      <div class="col-md-4">
        {{ $feesInvoice->amount }}
      </div>
    </div>

  </div>

  <div class="form-group">
    <label for="">Submitted by</label>
    <input type="text" class="form-control" wire:model.defer="submitted_by">
    @error('submitted_by') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Amount</label>
    <input type="text" class="form-control" wire:model.defer="amount">
    @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitStudentFeesPaymentCreateMode')">Cancel</button>
</div>
