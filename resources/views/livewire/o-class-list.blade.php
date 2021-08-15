<div>
  @if ($oClasses != null && count($oClasses) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr class="text-secondary">
        <th>Name</th>
        <th>Academic Session</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($oClasses as $oClass)
        <tr>
          <td>
            <a class="text-dark" wire:click.prevent="$emit('displayOClass', {{ $oClass }})" href="">
              {{ $oClass->name }}
            </a>
          </td>
          <td class="text-secondary">
            {{ $oClass->academicSession->name }}
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
      No records to display
    </div>
  @endif
</div>
