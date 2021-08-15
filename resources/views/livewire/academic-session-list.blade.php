<div>

  @if (!is_null($academicSessions) && count($academicSessions) > 0)
    <table class="table table-sm  table-hover table-valign-middle">
      <thead>
        <tr class="bg-light text-secondary border-top">
          <th>Session</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach($academicSessions as $academicSession)
        <tr>
          <td>
            <a class="text-dark" href="" wire:click.prevent="$emit('displayAcademicSession', {{ $academicSession }})">
              {{ $academicSession->name }}
            </a>
          </td>

          <td>
            <span class="btn btn-tool btn-sm mr-2" wire:click="">
              <i class="fas fa-pencil-alt text-primary"></i>
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
    <div class="p-2 text-muted">
      No records to display.
    </div>
  @endif

<div>
