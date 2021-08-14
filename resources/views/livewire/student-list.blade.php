<div>
  @if ($students != null && count($students) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr class="text-secondary">
        <th>#</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
        <tr>
          <td class="text-secondary">
            {{ $loop->iteration }}
          </td>
          <td>
            <a class="text-dark" href="" wire:click.prevent="$emit('displayStudent', {{ $student }})">
              {{ $student->name }}
            </a>
          </td>
          <td>
            <span class="btn btn-tool btn-sm border rounded-circle mr-2" wire:click="">
              <i class="fas fa-pencil-alt text-primary"></i>
            </span>
            <span class="btn btn-tool btn-sm border rounded-circle" wire:click="">
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
