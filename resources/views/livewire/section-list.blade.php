<div>

  <div class="bg-light border p-2">
    <div class="float-left mr-3">
      <button class="btn" wire:click="showFilter">
        <i class="fas fa-filter text-secondary mr-2"></i>
        Filter
      </button>
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

  @if ($sections != null && count($sections) > 0)

  <div class="border pl-2 p-1">
    Total: {{ count($sections) }}
  </div>

  <table class="table table-sm table-hover">
    <thead>
      <tr class="bg-light text-secondary">
        <th>Section</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($sections as $section)
        <tr>

          <td>
            <a class="text-dark" href="" wire:click.prevent="$emit('displaySection', {{ $section }})">
              {{ $section->oClass->name }}
              {{ $section->name }}
            </a>
          </td>

          <td class="text-secondary">
            {{ count($section->students) }}
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
