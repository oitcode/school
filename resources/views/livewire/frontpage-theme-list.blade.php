<div class="card shadow-none">
  <div class="card-body p-0">

    @if (!is_null($frontpageThemes) && count($frontpageThemes) > 0)
      <table class="table table-sm  table-hover table-valign-middle">
        <thead>
          <tr class="text-secondary border-top">
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($frontpageThemes as $frontpageTheme)
          <tr>
            <td class="text-secondary">
                 {{ $loop->iteration }}
            </td>

            <td class="text-secondary">
                 {{ $frontpageTheme->name }}
            </td>

            <td>
              <span class="btn btn-tool btn-sm mr-2" wire:click="$emit('updateFrontpageTheme', {{ $frontpageTheme }})">
                <i class="fas fa-pencil-alt text-primary"></i>
              </span>
              <span class="btn btn-tool btn-sm" wire:click="$emit('confirmDeleteFrontpageTheme', {{ $frontpageTheme }})">
                <i class="fas fa-trash text-danger"></i>
              </span>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <div class="px-3 mt-2 text-muted">
        <small>
          No records to display.
        </small>
      </div>
    @endif
  </div>
</div>
