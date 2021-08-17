<div>

  @if ($feesStructures != null && count($feesStructures) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr class="text-secondary">
        <th>#</th>
        <th>Academic Session</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($feesStructures as $feesStructure)
        <tr>

          <td class="text-secondary">
            {{ $loop->iteration }}
          </td>

          <td>
            <a class="text-dark" href="" wire:click.prevent="$emit('displayFeesStructure', {{ $feesStructure }})">
              {{ $feesStructure->academicSession->name }}
            </a>
          </td>

          <td>
            <span class="btn btn-tool btn-sm mr-2" wire:click="$emit('updateFeesStructure', {{ $feesStructure }})">
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
