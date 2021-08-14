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


    @if (!is_null($extraCurriculars) && count($extraCurriculars) > 0)
      <table class="table table-sm  table-hover table-valign-middle">
        <thead>
          <tr class="text-secondary border-top">
            <th>ID</th>
            <th>Name</th>
            <th>Cateogory</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($extraCurriculars as $extraCurricular)
          <tr>
            <td class="text-secondary">
                 {{ $extraCurricular->extra_curricular_id }}
            </td>

            <td>
              <a class="text-dark" href="">
                {{ $extraCurricular->name }}
              </a>
            </td>

            <td>
              <span class="badge badge-primary badge-pill">
                {{ $extraCurricular->extraCurricularCategory->name }}
              </span>
            </td>

            <td class="text-secondary">
              {{ $extraCurricular->description }}
            </td>

            <td>
              <span class="btn btn-tool btn-sm mr-2" wire:click="$emit('updateExtraCurricular', {{ $extraCurricular }})">
                <i class="fas fa-pencil-alt text-primary"></i>
              </span>
              <span class="btn btn-tool btn-sm" wire:click="$emit('confirmDeleteExtraCurricular', {{ $extraCurricular }})">
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
