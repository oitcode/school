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
          </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>
</div>
