<div>
  <div class="card">
    <div class="card-body p-0">
    
      <div class="bg-light border p-2">
    
    
        <div class="float-left mr-3">
          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-users text-secondary mr-2"></i>
              Sections
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" wire:click="enterCreateOClassSectionMode">
                <i class="fas fa-plus text-secondary mr-2"></i>
                Create new section
              </button>
              <button class="dropdown-item" wire:click="enterOClassSectionListMode">
                <i class="fas fa-list text-secondary mr-2"></i>
                View sections
              </button>
            </div>
          </div>
        </div>

        <div class="float-right mr-3">
          <button class="btn text-danger" wire:click="$emit('exitDisplay')">
            <i class="fas fa-times mr-2"></i>
            Close
          </button>
        </div>
    
        <div class="float-right mr-3">
          <button class="btn text-secondary" wire:click="$refresh">
            <i class="fas fa-sync mr-2 text-primary"></i>
            Refresh
          </button>
        </div>

        <div class="float-right mr-3" wire:loading>
          <div class="spinner-border text-primary" role="status">
          </div>
          <span>Loading ...</span>
        </div>

    
        <div class="clearfix">
        </div>
      </div>

    
      <div class="row px-2 py-4 border-bottom h6" style="margin: auto;">
        <div class="col-md-2">
          Class
        </div>
        <div class="col-md-6 text-primary">
          {{ $oClass->name }}
        </div>
      </div>
    
      <div class="row px-2 py-4 border-bottom h6" style="margin: auto;">
        <div class="col-md-2">
          Academic Session
        </div>
        <div class="col-md-6 text-primary">
          {{ $oClass->academicSession->name }}
          @if ($oClass->academicSession->status === 'current')
            <span class="badge badge-pill badge-success ml-3">
              Current
            </span>
          @endif
        </div>
      </div>
    
    
      <div class="my-2">
        <div class="row py-2 pl-2 h6" style="margin:auto;">
          <div class="col-md-2">
            Total Sections
          </div>
          <div class="col-md-6">
            {{ count($oClass->sections) }}
          </div>
        </div>
    
      </div>
    
    </div>
  </div>


  @if ($createOClassSectionMode)
    @livewire ('o-class-section-create', ['oClass' => $oClass,])
  @endif

  @if ($oClassSectionListMode)
    @livewire ('o-class-section-list', ['oClass' => $oClass,])
  @endif

</div>
