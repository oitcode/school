<div class="card shadow-none">
  <div class="card-body p-0">

    <div wire:loading class="p-2 text-info">
      Loading ...
      {{--
      <div class="spinner-grow spinner-grow-sm" role="status">
        <span class="sr-only">Loading...</span>
       </div>
      --}}
    </div>


    @if (!is_null($facilities) && count($facilities) > 0)
      <table class="table table-sm  table-hover table-valign-middle">
        @if (true)
        <thead>
          <tr class="text-secondary border-top">
            <th>ID</th>
            <th>Title</th>
            <th>Cateogory</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        @endif

        <tbody>
          @foreach($facilities as $facility)
          <tr>
            <td>
                 {{ $facility->facility_id }}
            </td>

            <td>
              {{ $facility->name }}
            </td>

            <td class="text-muted">
              {{ $facility->facilityCategory->title }}
            </td>

            <td>
              {{ $facility->info }}
            </td>

            <td>
              <span class="btn btn-tool btn-sm">
                <i class="fas fa-pencil-alt text-primary mr-3" wire:click="$emit('updateFacility', {{ $facility }})"></i>
              </span>
              <span class="btn btn-tool btn-sm" wire:click="$emit('confirmDeleteFacility', {{ $facility }})">
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
