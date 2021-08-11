<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Academic Session
    </h3>
    <span class="badge badge-pill badge-primary m-2">
      @if ($createMode)
        Create
      @elseif ($displayMode)
        Display
      @elseif ($updateMode)
        Update
      @else
        List
      @endif
    </span>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>

  <div class="card-body p-0">

    @if ($createMode)
      {{-- Academic session create --}}
      <div class="p-3">
        <h3>Create New Academic Session</h3>
      
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" wire:model.defer="name">
          @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      
        <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
        <button type="submit" class="btn btn-danger" wire:click="exitCreateMode">Cancel</button>
      </div>
      {{-- // Academic session create // --}}

    @else

      {{-- Academic session list --}}
      @if (!is_null($academicSessions) && count($academicSessions) > 0)
        <table class="table table-sm  table-hover table-valign-middle">
          <thead>
            <tr class="text-secondary border-top">
              <th>Session</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($academicSessions as $academicSession)
            <tr>
              <td>
                <a href="">
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
      {{-- // Academic session list // --}}

    @endif

  </div>
</div>
