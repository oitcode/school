<div class="card card-outline card-light">
  <div class="card-header p-2" {{-- style="background-color: #d0d0e8 !important;" --}} >
    <h3 class="card-title mt-1">
      School
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterUpdateMode">
        <i class="fas fa-pencil-alt"></i>
      </button>
    </div>
  </div>


  <div class="card-body p-0">

    {{-- TODO: Flash message not shown --}}

    @if (session()->has('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif

    @if (! $updateMode)
      <table class="table table-sm table-hover table-valign-middle text-secondary">
        <tr>
          <th>School Name</th>
          <td>{{ $school->name }}</td>
        </tr>
        <tr>
          <th>Address</th>
          <td>{{ $school->address }}</td>
        </tr>
        <tr>
          <th>Phone</th>
          <td>{{ $school->phone }}</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>{{ $school->email }}</td>
        </tr>
        <tr>
          <th>Slogan</th>
          <td>{{ $school->slogan }}</td>
        </tr>
      </table>
    @endif

    @if ($updateMode)
      @livewire ('school-update', ['school' => $school])
    @endif

    @if (false)
      @livewire ('school-create')
    @endif
  </div>
</div>
