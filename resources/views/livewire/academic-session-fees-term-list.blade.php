<div class="card">
  <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th class="text-info">
            Fees invoice term
          </th>
          <th class="text-info">
            Published date
          </th>
          <th class="text-info">
            Amount
          </th>
          <th class="text-info">
            Amount received
          </th>
          <th class="text-info">
            Amount pending
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($feesTerms as $feesTerm)
          <tr>
            <td>
              {{ $feesTerm->term }}
            </td>
            <td>
              {{ $feesTerm->fees_publish_date }}
            </td>
            <td class="">
              {{ $feesTerm->getFeesInvoicesTotal() }}
            </td>
            <td class="text-success">
              {{ $feesTerm->getFeesInvoicesReceivedAmount() }}
            </td>
            <td class="text-danger">
              {{ $feesTerm->getFeesInvoicesPendingAmount() }}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>
</div>
