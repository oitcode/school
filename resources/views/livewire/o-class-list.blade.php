<div>

  <div class="bg-light border p-2">
    <div class="float-left mr-3">
      @if (true)
        <button class="btn" wire:click="hideFilter">
          <i class="fas fa-filter text-secondary mr-2"></i>
          Filter
        </button>
      @else
        <button class="btn" wire:click="showFilter">
          <i class="fas fa-filter text-secondary mr-2"></i>
          Hide Filter
        </button>
      @endif
    </div>

    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-tag text-secondary mr-2"></i>
        Misc
      </button>
    </div>

    <div class="float-right mr-3">
      <button class="btn text-primary" wire:click="$refresh">
        <i class="fas fa-sync mr-2"></i>
        Refresh
      </button>
    </div>

    <div class="float-right mt-2 mr-3 text-secondary" wire:loading.delay>
        Loading ...
    </div>

    <div class="clearfix">
    </div>
  </div>

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
