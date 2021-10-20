<div>
  <div class="card">
    <div class="card-body p-0">
    
      <div class="bg-light border p-2">
    
        <div class="float-left mr-3">
          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ $academicSession->name }}
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
    
        <div class="float-left mr-3">
          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-users text-secondary mr-2"></i>
              Classes
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" wire:click="enterCreateAcademicSessionOclassMode">
                <i class="fas fa-plus text-secondary mr-2"></i>
                Add Class
              </button>
              <button class="dropdown-item" wire:click="enterOClassListMode">
                <i class="fas fa-list text-secondary mr-2"></i>
                View Classes
              </button>
            </div>
          </div>
        </div>
    
        <div class="float-left mr-3">
          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-rupee-sign text-secondary mr-2"></i>
              Fees Invoice
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" wire:click="enterPublishFeesMode">
                <i class="fas fa-coins text-secondary mr-2"></i>
                Publish fees invoice
              </button>
              <button class="dropdown-item" wire:click="enterFeesTermListMode">
                <i class="fas fa-list text-secondary mr-2"></i>
                View fees invoices
              </button>
            </div>
          </div>
        </div>

        <div class="float-left mr-3">
          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-dollar-sign text-secondary mr-2"></i>
              Fees Structure
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              @if ($academicSession->feesStructure)
                <button class="dropdown-item" wire:click="enterFeesStructureUpdateMode">
                  <i class="fas fa-pencil-alt text-secondary mr-2"></i>
                  Edit fees structure
                </button>
              @else
                <button class="dropdown-item" wire:click="enterFeesStructureCreateMode">
                  <i class="fas fa-plus text-secondary mr-2"></i>
                  Create Fees Structure
                </button>
              @endif
              <button class="dropdown-item" wire:click="enterFeesStructureViewMode">
                <i class="fas fa-list text-secondary mr-2"></i>
                View fees structure
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
    
        <div class="clearfix">
        </div>
      </div>
    
    
      <div class="">
    
          <div class="row px-2 py-4 border-bottom h5" style="margin: auto;">
            <div class="col-md-2">
              Academic Session
            </div>
            <div class="col-md-6 text-primary">
              {{ $academicSession->name }}
              @if ($academicSession->status === 'current')
                <span class="badge badge-pill badge-success ml-3">
                  Current
                </span>
              @endif
            </div>
          </div>
    
          <div class="row px-2 py-4 border-bottom h5" style="margin: auto;">
            <div class="col-md-2">
              Total Students
            </div>
            <div class="col-md-6 text-primary">
              {{ $academicSession->getTotalStudents() }}
            </div>
          </div>
    
    
      </div>
    
    </div>
  </div>

  @if ($publishFeesMode)
    @livewire('academic-session-publish-fees-invoice', ['academicSession' => $academicSession,])
  @elseif ($createAcademicSessionOClassMode)
    @livewire('academic-session-o-class-create', ['academicSession' => $academicSession,])
  @elseif ($feesStructureMode)
    @if ($viewFeesStructureMode)
      @livewire ('fees-structure-display', ['feesStructure' => $academicSession->feesStructure,])
    @endif
  
    @if ($createAcademicSessionFeesStructureMode)
      @livewire ('academic-session-fees-structure-create', ['academicSession' => $academicSession,])
    @endif
  @elseif ($feesStructureCreateMode)
    @livewire ('academic-session-fees-structure-create', ['academicSession' => $academicSession,])
  @elseif ($feesStructureUpdateMode)
    @livewire ('academic-session-fees-structure-update', ['academicSession' => $academicSession,])
  @elseif ($feesStructureViewMode)
    @livewire ('academic-session-fees-structure-view', ['academicSession' => $academicSession,])
  @elseif ($oClassListMode)
    @livewire ('academic-session-o-class-list', ['academicSession' => $academicSession,])
  @elseif ($feesTermListMode)
    @livewire ('academic-session-fees-term-list', ['academicSession' => $academicSession,])
  @endif
<div>
