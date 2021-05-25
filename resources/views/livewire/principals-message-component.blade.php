<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Principals Message
    </h3>
    <div class="card-tools mx-3">
      @if ($principalsMessage === null)
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
      @if ($principalsMessage != null)
        <table class="table table-sm  table-hover table-valign-middle">
          <tr>
            <th>Message</th>
            <td>{{ $principalsMessage->message }}</td>
          </tr>
          <tr>
            <th>Image</th>
            <td>
              <img src="{{ asset('storage/' . $principalsMessage->image_path) }}" class="img-fluid">
            </td>
          </tr>
        </table>
      @else
        <p class="text-muted p-3">
          No principals message. Please add new.
        </p>
      @endif
    @endif


    @if ($createMode)
      @livewire ('principals-message-create')
    @endif

    @if ($updateMode)
      @livewire ('principals-message-update', ['principalsMessage' => $principalsMessage])
    @endif
  </div>
</div>
