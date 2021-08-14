<div class="p-0">

  <div class="bg-light border p-2">
    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-user text-secondary mr-2"></i>
        Add guardian
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-arrow-up text-secondary mr-2"></i>
        Promote
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-sticky-note text-secondary mr-2"></i>
        Add note
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-tag text-secondary mr-2"></i>
        Misc
      </button>
    </div>

    <div class="float-right mr-3">
      <button class="btn text-danger" wire:click="$emit('exitDisplay')">
        <i class="fas fa-times mr-2"></i>
        Close
      </button>
    </div>

    <div class="clearfix">
    </div>
  </div>


  <div>
      <h3 class="h4 mt-3 ml-3">
        {{ $student->name }}
      </h3>
  </div>


  <div class="row p-2 border-bottom text-secondary" style="margin: auto;">
    <div class="col-md-2">
      Class
    </div>
    <div class="col-md-6">
      {{ $student->oClass->name }}
    </div>
  </div>

  <div class="row p-2 border-bottom text-secondary" style="margin: auto;">
    <div class="col-md-2">
      Address
    </div>
    <div class="col-md-6">
      TODO
    </div>
  </div>

  <div class="row p-2 border-bottom text-secondary" style="margin: auto;">
    <div class="col-md-2">
      Guardian
    </div>
    <div class="col-md-6">
      TODO
    </div>
  </div>

  <div class="my-3">
    <h4 class="h5 m-3">Fees</h4>

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
    </table>
  </div>
  <div class="my-3">
    <h4 class="h5 m-3">Academic record</h4>

    <table class="table table-sm table-hover">
      <thead>
        <tr>
          <th>Session</th>
          <th>Exam</th>
          <th>Result</th>
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


</div>
