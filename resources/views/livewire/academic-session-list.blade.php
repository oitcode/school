<div class="card">
  <div class="card-body p-0">
  
    @if (!is_null($academicSessions) && count($academicSessions) > 0)
      <table class="table table-hover table-valign-middle">
        <thead>
          <tr class="bg-light text-secondary border-top">
            <th class="text-info">Session</th>
            <th class="text-info">Action</th>
          </tr>
        </thead>
  
        <tbody>
          @foreach($academicSessions as $academicSession)
          <tr>
            <td>
              <a class="text-dark" href="" wire:click.prevent="$emit('displayAcademicSession', {{ $academicSession }})">
                {{ $academicSession->name }}
              </a>
              @if ($academicSession->status === 'current')
                <span class="badge badge-pill badge-success ml-2">
                  Current
                </span>
              @endif
            </td>
  
            <td>
              <span class="btn btn-tool btn-sm mr-2" wire:click="$emit('updateAcademicSession', {{ $academicSession }})">
                <i class="fas fa-pencil-alt text-primary"></i>
              </span>
              <span class="btn btn-tool btn-sm" wire:click="$emit('confirmDeleteAcademicSession', {{ $academicSession }})">
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
  
  </div>
</div>
