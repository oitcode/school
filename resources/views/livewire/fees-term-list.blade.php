<div class="card shadow-none">
  <div class="card-body p-0">

    @if (!is_null($feesTerms) && count($feesTerms) > 0)
      <table class="table table-sm  table-hover table-valign-middle">
        <thead>
          <tr class="text-secondary border-top">
            <th>#</th>
            <th>Term</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($feesTerms as $feesTerm)
          <tr>
            <td class="text-secondary">
                 {{ $loop->iteration }}
            </td>

            <td>
              <a class="text-dark" href="">
                {{ $feesTerm->term }}
              </a>
            </td>

            <td>
              <span class="btn btn-tool btn-sm mr-2" wire:click="">
                <i class="fas fa-pencil-alt text-primary"></i>
              </span>
              <span class="btn btn-tool btn-sm" wire:click="">
                <i class="fas fa-trash text-danger"></i>
              </span>


              @if (false)
              <div class="float-left mr-3">
                <div class="dropdown">
                  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ $currentMode ?? 'Mode' }}
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Create</a>
                    <a class="dropdown-item" href="" wire:click.prevent="enterListMode">List</a>
                    <a class="dropdown-item" href="#">Display</a>
                    <a class="dropdown-item" href="#">Update</a>
                    <a class="dropdown-item" href="#">Delete</a>
                  </div>
                </div>
              </div>
              @endif


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
