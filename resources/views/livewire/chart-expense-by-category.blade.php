<div class="card">
  <div class="card-body p-0">

    <div class="bg-light border p-2">

      <div class="float-left mr-3">
        <div class="form-group">
          <label for="">Start date</label>
          <input type="date" class="form-control" wire:model.defer="start_date">
          @error('start_date') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      </div>

      <div class="float-left mr-3">
        <div class="form-group">
          <label for="">End date</label>
          <input type="date" class="form-control" wire:model.defer="end_date">
          @error('end_date') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      </div>

      <div class="float-left mr-3">
        <br />
        <button class="btn btn-primary mt-1" wire:click="setQueryDates">
          Go
        </button>
      </div>

      <div class="float-right mr-3">
        <button class="btn text-primary" wire:click="closeInner">
          <i class="fas fa-times mr-2"></i>
          Reset
        </button>
      </div>

      <div class="float-right mt-2 mr-3 text-secondary" wire:loading.delay>
          Loading ...
      </div>

      <div class="clearfix">
      </div>

    </div>

    @if ($innerMode)
      @livewire ('chart-expense-by-category-inner', ['start_date' => $start_date, 'end_date' => $end_date,])
    @endif
  </div>
</div>
