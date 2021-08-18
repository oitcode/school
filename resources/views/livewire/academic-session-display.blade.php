<div class="p-0">

  <div class="bg-light border p-2">

    <div class="float-left mr-3">
      <button class="btn" wire:click.prevent="enterCreateAcademicSessionOclassMode">
        <i class="fas fa-plus text-secondary mr-2"></i>
        Add class
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn" wire:click.prevent="enterPublishFeesMode">
        <i class="fas fa-coins text-secondary mr-2"></i>
        Publish fees invoice
      </button>
    </div>

    @if (false)
    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-sticky-note text-secondary mr-2"></i>
        Add note
      </button>
    </div>
    @endif

    <div class="float-left mr-3">
      <button class="btn" wire:click="enterViewFeesStructureMode">
        <i class="fas fa-tag text-secondary mr-2"></i>
        View Fees Structure
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-tag text-secondary mr-2"></i>
        Misc
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


  <div class="row">

    <div class="col-md-6">

      <div class="row p-2 border-bottom" style="margin: auto;">
        <div class="col-md-2">
          Academic Session
        </div>
        <div class="col-md-6">
          {{ $academicSession->name }}
        </div>
      </div>

      @if ($publishFeesMode)
        @livewire('academic-session-publish-fees-invoice', ['academicSession' => $academicSession,])
      @endif

      @if ($createAcademicSessionOClassMode)
        @livewire('academic-session-o-class-create', ['academicSession' => $academicSession,])
      @endif


      <div class="row p-2 border-bottom" style="margin: auto;">
        <div class="col-md-2">
          Total Students
        </div>
        <div class="col-md-6">
          {{ $academicSession->getTotalStudents() }}
        </div>
      </div>

      <h3 class="h5 my-3 ml-2">Fees</h3>
      @if (count($academicSession->feesTerms) > 0)
      <table class="table table-sm">
        <thead>
          <tr>
            <th>Term</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($academicSession->feesTerms as $feesTerm)
            <tr>
              <td>
                {{ $feesTerm->term }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      @else
        <div class="text-secondary p-2">
          No fees yet
        </div>
      @endif
    </div>

    <div class="col-md-6">
      @if ($viewFeesStructureMode)
        @livewire ('fees-structure-display', ['feesStructure' => $academicSession->feesStructure,])
      @endif
    </div>

  </div>


</div>
