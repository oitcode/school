<div>

  <h4 class="h5 m-3">Pending fees</h4>
  
  @if (count($student->getPendingFeesInvoices()) > 0)
  <table class="table table-sm table-hover">
    <thead>
      <tr class="text-secondary">
        <th class="border-0-rm">Term</th>
        <th class="border-0-rm">Amount</th>
        <th class="border-0-rm">Payment Status</th>
        <th class="border-0-rm">Pending amount</th>
        <th class="border-0-rm">Action</th>
      </tr>
    </thead>
  <tbody>
      @foreach ($student->getPendingFeesInvoices() as $feesInvoice)
        <tr>
  
          <td class="text-dark border-0">
            {{ $feesInvoice->feesTerm->term }}
          </td>
  
          <td class="text-dark border-0">
            {{ $feesInvoice->amount }}
          </td>
  
          <td class="border-0">
            @if (strtolower($feesInvoice->payment_status) === 'pending')
              <span class="badge badge-danger badge-pill">
                Pending
              </span>
            @elseif (strtolower($feesInvoice->payment_status) === 'partially_paid')
              <span class="badge badge-warning badge-pill">
                Partially Paid
              </span>
            @else
              <span class="badge badge-secondary badge-pill">
                {{ $feesInvoice->payment_status }}
              </span>
            @endif
          </td>

          <td class="text-dark border-0">
            {{ $feesInvoice->getPendingAmount() }}
          </td>
  
          <td class="text-dark border-0">
            <button class="btn" wire:click="enterStudentFeesPaymentCreateMode({{ $feesInvoice }})">
              <i class="fas fa-dollar-sign mr-2"></i>
              Receive payment
            </button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <div class="p-2 text-secondary">
      No records
    </div>
  @endif

  
  @if ($studentFeesPaymentCreateMode)
    @livewire ('student-fees-payment-create', ['feesInvoice' => $payingFeesInvoice,])
  @endif


  <h4 class="h5 m-3">Paid Fees</h4>
  
  @if (count($student->getPaidFeesInvoices()) > 0)
  <table class="table table-sm table-hover">
    <thead>
      <tr class="text-secondary">
        <th class="border-0-rm">Term</th>
        <th class="border-0-rm">Amount</th>
        <th class="border-0-rm">Payment Status</th>
        <th class="border-0-rm">Action</th>
      </tr>
    </thead>
  
    <tbody>
      @foreach ($student->getPaidFeesInvoices() as $feesInvoice)
        <tr>
  
          <td class="text-dark border-0">
            {{ $feesInvoice->feesTerm->term }}
          </td>
  
          <td class="text-dark border-0">
            {{ $feesInvoice->amount }}
          </td>
  
          <td class="border-0">
            @if (strtolower($feesInvoice->payment_status) === 'pending')
              <span class="badge badge-light badge-pill">
                Pending
              </span>
            @elseif (strtolower($feesInvoice->payment_status) === 'paid')
              <span class="badge badge-success badge-pill">
                Paid
              </span>
            @elseif (strtolower($feesInvoice->payment_status) === 'partially_paid')
              <span class="badge badge-warning badge-pill">
                Partially Paid
              </span>
            @else
              <span class="badge badge-secondary badge-pill">
                {{ $feesInvoice->payment_status }}
              </span>
            @endif
          </td>
  
          <td class="text-dark border-0">
            <i class="fas fa-dollar-sign mr-2"></i>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <div class="p-2 text-secondary">
      No records
    </div>
  @endif

</div>

