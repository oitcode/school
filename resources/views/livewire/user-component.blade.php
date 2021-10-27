<x-box-component title="Users">
  <x-slot name="menuItems">
    @can ('create-user')
      <x-menu-item fa-class="fas fa-plus" title="Create user" click-method="enterCreateMode" />
    @endcan
    <x-menu-item fa-class="fas fa-list" title="List users" click-method="enterListMode" />
  </x-slot>

  <!-- Flash message div -->
  @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show col-md-4 mx-3 my-2" role="alert">
      {{ session('message') }}
      <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  @if ($createMode)
    @livewire ('user-create')
  @elseif ($listMode)
    @livewire ('user-list')
  @endif

</x-box-component>
