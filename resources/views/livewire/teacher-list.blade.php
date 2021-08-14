<div>
  @if ($teachers != null && count($teachers) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr class="text-secondary">
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($teachers as $teacher)
        <tr>
          <td class="text-secondary">
            {{ $loop->iteration }}
          </td>
          <td>
            <a class="text-dark" href="">
              {{ $teacher->name }}
            </a>
          </td>
          <td class="text-secondary">
            {{ $teacher->email }}
          </td>
          <td class="text-secondary">
            {{ $teacher->phone }}
          </td>
          <td>
            <span class="btn btn-tool btn-sm">
              <i class="fas fa-pencil-alt text-primary mr-3" wire:click="$emit('updateTeacher', {{ $teacher }})"></i>
            </span>
            <span class="btn btn-tool btn-sm" wire:click="">
              <i class="fas fa-trash text-danger" wire:click="$emit('confirmDeleteTeacher', {{ $teacher }})"></i>
            </span>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <div class="p-2 text-muted">
      No records to display
    </span>
  @endif
</div>
