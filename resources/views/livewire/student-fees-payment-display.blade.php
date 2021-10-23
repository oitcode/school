<div class="card mt-3">
  <div class="card-body">

    <div>
      <div class="float-right mr-3">
        <button class="btn btn-secondary">
          Print
        </button>
      </div>
      <div class="float-right mr-3">
        <button class="btn btn-primary">
          Download
        </button>
      </div>

      <div class="clearfix">
      </div>
    </div>

    <div class="mt-5">
      <div class="float-left bg-light text-secondary p-3">
          Student: {{ $student->name }}
        <br/>
          Address: {{ $student->address }}
      </div>

      <div class="float-right mr-3 text-secondary">
        {{ $school->name }}
        <br/>
        {{ $school->address }}
        <br/>
        {{ $school->phone }}
        <br/>
        {{ $school->email }}
        <br/>
      </div>

      <div class="clearfix">
      </div>
    </div>

    @foreach ($feesPayments as $feesPayment)
      <div class="my-5">

        <div class="float-left bg-light text-secondary p-3">
            Submitted by: {{ $feesPayment->submitted_by }}
        </div>
        <div class="float-right bg-light text-secondary p-3">
            Receipt no: {{ $feesPayment->fees_payment_id }}
          <br/>
            Date: {{ $feesPayment->payment_date }}
          <br/>
        </div>

        <div class="clearfix">
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="bg-info text-white" style="width: 50%;">
                Item
              </th>
              <th class="bg-info text-white">
                Total amount
              </th>
              <th class="bg-info text-white">
                Paid amount
              </th>
            </tr>
          </thead>

          <tbody>
              <tr>
                <td>
                  Monthly fees - {{ $feesPayment->feesInvoice->feesTerm->term }}
                </td>
                <td>
                  {{ $feesPayment->feesInvoice->amount }}
                </td>
                <td>
                  {{ $feesPayment->amount }}
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    @endforeach

    @if (false)
    <h3 class="h5">Fees payment</h3>
        <h4 class="h6">
        </h4>
        <div>
          Student:
          {{ $feesPayment->feesInvoice->student->name }}
        </div>
        <div>
          Fees term:
          {{ $feesPayment->feesInvoice->feesTerm->term }}
        </div>
        <div>
          Submitted by:
          {{ $feesPayment->submitted_by }}
        </div>
        <div>
          Submitted date:
          {{ $feesPayment->payment_date }}
        </div>
    @endif
</div>
