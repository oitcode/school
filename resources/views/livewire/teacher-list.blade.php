<div>
  @if ($teachers != null && count($teachers) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr>
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
          <td>
            {{ $loop->iteration }}
          </td>
          <td>
            {{ $teacher->name }}
          </td>
          <td>
            {{ $teacher->email }}
          </td>
          <td>
            {{ $teacher->phone }}
          </td>
          <td>
            <span class="btn btn-tool btn-sm">
              <i class="fas fa-pencil-alt text-primary mr-3" wire:click=""></i>
            </span>
            <span class="btn btn-tool btn-sm" wire:click="">
              <i class="fas fa-trash text-danger"></i>
            </span>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <span class="text-danger">
      No teacher
    </span>
  @endif
</div>
