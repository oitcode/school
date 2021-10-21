<div class="card">
  <div class="card-body p-0">
  
    <div class="bg-light border p-2">
      <div class="float-left mr-3">
        <button class="btn" wire:click.prevent="enterCreateOClassSectionMode">
          <i class="fas fa-plus text-secondary mr-2"></i>
            Add section
        </button>
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
  
    @if ($createOClassSectionMode)
      @livewire ('o-class-section-create', ['oClass' => $oClass,])
    @endif
  
    <div class="my-2">
      <div class="row border-bottom py-2 pl-2 h6" style="margin:auto;">
        <div class="col-md-2">
          Total Sections
        </div>
        <div class="col-md-6">
          {{ count($oClass->sections) }}
        </div>
      </div>
  
  
  
        @if ($oClass->sections != null && count($oClass->sections) > 0)
        <table class="table table-sm table-hover table-valign-middle">
          <thead>
            <tr>
              <th>Section</th>
              <th>Students</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($oClass->sections as $section)
              <tr>
                <td>
                  <a class="text-secondary" wire:click.prevent="" href="">
                    {{ $section->name }}
                  </a>
                </td>
  
                <td>
                  <a class="text-secondary">
                    {{ count($section->students) }}
                  </a>
                </td>
  
              </tr>
            @endforeach
          </tbody>
        </table>
        @else
          <div class="m-3 text-secondary">
          No sections
          </div>
        @endif
  
    </div>
  
  
  </div>
</div>
