<div class="p-2">

  <h3 class="h4">
    {{ $student->name }}
  </h3>
  <hr />

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Class
    </div>
    <div class="col-md-6">
      <strong>
        {{ $student->oClass->name }}
      </strong>
    </div>
  </div>

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Address
    </div>
    <div class="col-md-6">
      <strong>
        TODO
      </strong>
    </div>
  </div>

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Guardian
    </div>
    <div class="col-md-6">
      <strong>
        TODO
      </strong>
    </div>
  </div>

  <div class="my-3">
    <h4 class="h5">Fees</h4>
    <hr />

    <table class="table table-sm table-hover">
      <thead>
        <tr>
          <th>Session</th>
          <th>Term</th>
          <th>Payment Status</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($student->feesInvoices as $feesInvoice)
          <tr>
            <td class="text-secondary">
              {{ $feesInvoice->oClass->academicSession->name }}
            </td>

            <td class="text-primary">
              {{ $feesInvoice->term }}
            </td>
            <td>
              @if (strtolower($feesInvoice->payment_status) === 'pending')
                <span class="badge badge-danger badge-pill">
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
          </tr>
        @endforeach
      </tbody>
    <table>
    </table>
  </div>

  <button type="submit" class="btn btn-danger" wire:click="$emit('exitDisplay')">Close</button>

</div>
