<div>

  @if ($feesInvoices != null && count($feesInvoices) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr class="text-secondary">
        <th>#</th>
        <th>Student</th>
        <th>Guardian</th>
        <th>Term</th>
        <th>Amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($feesInvoices as $feesInvoice)
        <tr>
          <td class="text-secondary">
            {{ $loop->iteration }}
          </td>
          <td>
            <a class="text-dark" href="">
              {{ $feesInvoice->student->name }}
            </a>
          </td>
          <td>
              @foreach ($feesInvoice->student->guardians as $guardian)
                {{ $feesInvoice->student->guardian->name }}
                &nbsp;&nbsp;
              @endforeach
          </td>
          <td class="text-secondary">
            {{ $feesInvoice->term }}
          </td>
          <td class="text-secondary">
            {{ $feesInvoice->amount }}
          </td>
          <td>
            <span class="btn btn-tool btn-sm mr-2" wire:click="">
              <i class="fas fa-pencil-alt text-primary"></i>
            </span>
            <span class="btn btn-tool btn-sm mr-2" wire:click="">
              <i class="fas fa-trash text-danger"></i>
            </span>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <div class="p-2 text-muted">
      No records to display
    </div>
  @endif
</div>
