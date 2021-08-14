<div>

  @if ($vacancies != null && count($vacancies) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr class="text-secondary">
        <th>#</th>
        <th>Title</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($vacancies as $vacancy)
        <tr>
          <td class="text-secondary">
            {{ $loop->iteration }}
          </td>
          <td>
            <a class="text-dark" href="">
              {{ $vacancy->title }}
            </a>
          </td>
          <td>
            @if (strtolower($vacancy->status) === 'open')
              <span class="badge badge-success badge-pill">
                Open
              </span>
            @elseif (strtolower($vacancy->status) === 'closed')
              <span class="badge badge-danger badge-pill">
                Closed
              </span>
            @else
              <span class="badge badge-secondary badge-pill">
                {{ $vacancy->status }}
              </span>
            @endif
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
