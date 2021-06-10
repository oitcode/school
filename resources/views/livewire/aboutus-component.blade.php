<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      About Us
    </h3>
    <div class="card-tools mx-3">
      @if ($aboutUs === null)
        <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
          <i class="fas fa-plus"></i>
        </button>
      @else
        <button class="btn btn-sm btn-outline-info px-3" wire:click="enterUpdateMode">
          <i class="fas fa-pencil-alt"></i>
        </button>
      @endif
    </div>
  </div>

  <div class="card-body p-0">
    @if (!$createMode && !$updateMode)
      @if ($aboutUs != null)
        <table class="table table-sm  table-hover table-valign-middle">
          <thead>
            <tr>
              <th>#</th>
              <th>Paragraph</th>
              <th>Image</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                1
              </td>
              <td>
                {{ $aboutUs->paragraph_1 }}
              </td>
              <td>
                <img src="{{ asset('storage/' . $aboutUs->image_path_1) }}" class="img-fluid">
              </td>
            </tr>

            @if ($aboutUs->paragraph_2)
              <tr>
                <td>
                  2
                </td>
                <td>
                  {{ $aboutUs->paragraph_2 }}
                </td>
                <td>
                  <img src="{{ asset('storage/' . $aboutUs->image_path_2) }}" class="img-fluid">
                </td>
              </tr>
            @endif

            @if ($aboutUs->paragraph_3)
              <tr>
                <td>
                  3
                </td>
                <td>
                  {{ $aboutUs->paragraph_3 }}
                </td>
                <td>
                  <img src="{{ asset('storage/' . $aboutUs->image_path_3) }}" class="img-fluid">
                </td>
              </tr>
            @endif
          </tbody>
        </table>
      @else
        <p class="text-muted p-3">
          No about us content. Please add new.
        </p>
      @endif
    @endif


    @if ($createMode)
      @livewire ('aboutus-create')
    @endif

    @if ($updateMode)
      @livewire ('aboutus-update', ['aboutUs' => $aboutUs])
    @endif
  </div>
</div>
