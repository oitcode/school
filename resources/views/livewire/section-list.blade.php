<div class="card">
  <div class="card-body p-0">

    <div class="bg-light border p-2">

      <div class="float-left mr-3">
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ $displayAcademicSession->name }}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            @foreach ($academicSessions as $item)
              <button class="dropdown-item" wire:click="setDisplayingAcademicSession({{ $item }})">
                {{ $item->name }}
              </button>
            @endforeach
          </div>
        </div>
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

      <div class="border pl-2 p-1 py-3">
        Total Sections: {{ count($sections) }}
      </div>

      <table class="table table-sm table-hover">
        <thead>
          <tr class="bg-light">
            <th class="text-info">Section</th>
            <th class="text-info">Students</th>
            <th class="text-info">Action</th>
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
                <span class="btn btn-tool btn-sm mr-2" wire:click="$emit('updateSection', {{ $section }})">
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
</div>
