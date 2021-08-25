<div class="p-0">

  <div class="bg-light border p-2">
    <div class="float-left mr-3">
      <button class="btn" wire:click.prevent="enterCreateOClassSectionMode">
        <i class="fas fa-plus text-secondary mr-2"></i>
          Add section
      </button>
    </div>

    @if (false)
    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-sticky-note text-secondary mr-2"></i>
        Add note
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-tag text-secondary mr-2"></i>
        Misc
      </button>
    </div>
    @endif

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

  <div>

    <div class="float-left mr-3">
      <h3 class="h4 mt-3 ml-3">
        {{ $oClass->name }}
      </h3>
    </div>

    <div class="float-left text-secondary mt-3">
      <small>
        {{ $oClass->academicSession->name }}
      </small>
    </div>


    <div class="clearfix">
    </div>

  </div>


  @if ($createOClassSectionMode)
    @livewire ('o-class-section-create', ['oClass' => $oClass,])
  @endif

  <div class="my-2">
    <h3 class="h4 m-3">Sections</h3>

    <div class="row border-bottom py-2 pl-2" style="margin:auto;">
      <div class="col-md-4">
        Total
      </div>
      <div class="col-md-4">
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
