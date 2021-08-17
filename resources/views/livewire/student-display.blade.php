<div class="p-0">

  <div class="bg-light border p-2">
    <div class="float-left mr-3">
      <button class="btn" wire:click="enterAddGuardianMode">
        <i class="fas fa-user text-secondary mr-2"></i>
        Add guardian
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn">
        <i class="fas fa-arrow-up text-secondary mr-2"></i>
        Promote
      </button>
    </div>

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

    <div class="float-right mr-3">
      <button class="btn text-danger" wire:click="$emit('exitDisplay')">
        <i class="fas fa-times mr-2"></i>
        Close
      </button>
    </div>

    <div class="float-right mr-3">
      <button class="btn text-primary" wire:click="$refresh">
        <i class="fas fa-sync mr-2"></i>
        Refresh
      </button>
    </div>

    <div class="clearfix">
    </div>
  </div>

  @if ($addGuardianMode)
    @livewire ('student-add-guardian', ['student' => $student,])
  @endif


  <div>
      <h3 class="h4 mt-3 ml-3">
        {{ $student->name }}
      </h3>
  </div>


  <div class="row">
    <div class="col-md-6">
      <div class="row p-2 border-bottom-rm text-secondary" style="margin: auto;">
        <div class="col-md-2">
          Class
        </div>
        <div class="col-md-6">
          {{ $student->oClass->name }}
        </div>
      </div>

      <div class="row p-2 border-bottom-rm text-secondary" style="margin: auto;">
        <div class="col-md-2">
          Address
        </div>
        <div class="col-md-6">
          @if ($student->address)
            {{ $student->address }}
          @else
            <small class="text-secondary">
              No Info
            </small>
          @endif
        </div>
      </div>

      <div class="row p-2 border-bottom-rm text-secondary" style="margin: auto;">
        <div class="col-md-2">
          Guardian
        </div>
        <div class="col-md-6">
          @if (count($student->guardians) > 0)
            @foreach ($student->guardians as $guardian)
              {{ $guardian->name }}
              <small>
                <span class="badge badge-pill">
                  {{ $guardian->pivot->type }}
                </span>
              </small>
            @endforeach
          @else
            <small class="text-secondary">
              No Info
            </small>
          @endif
        </div>
      </div>
    </div>

    <div class="col-md-2">
    </div>

    <div class="col-md-4">
      @if (false)
      <img src="{{ asset('img/logo_1.png') }}" width="100" height="100">
      @endif

      @if ($student->image_file_path)
        <img src="{{ asset('storage/' . $student->image_file_path) }}" style="max-height:100px; max-width:100ps;">
      @else
        <i class="fas fa-user-graduate fa-8x text-secondary"></i>
      @endif
    </div>
  </div>

  <div class="my-3">
    <h4 class="h5 m-3">Fees</h4>

    @if ($displayFeesMode)
      <button class="btn btn-sm mx-2 mb-2 text-primary" wire:click="exitDisplayFeesMode">
        Hide
      </button>
    @else
      <button class="btn btn-sm mx-2 mb-2 text-primary" wire:click="enterDisplayFeesMode">
        Show
      </button>
    @endif

    @if ($displayFeesMode)
      @if (count($student->feesInvoices) > 0)
      <table class="table table-sm table-hover">
        <thead>
          <tr class="text-secondary">
            <th class="border-0-rm">Term</th>
            <th class="border-0-rm">Amount</th>
            <th class="border-0-rm">Payment Status</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($student->feesInvoices as $feesInvoice)
            <tr>

              <td class="text-dark border-0">
                {{ $feesInvoice->feesTerm->term }}
              </td>

              <td class="text-dark border-0">
                {{ $feesInvoice->amount }}
              </td>

              <td class="border-0">
                @if (strtolower($feesInvoice->payment_status) === 'pending')
                  <span class="badge badge-light badge-pill">
                    Pending
                  </span>
                @elseif (strtolower($feesInvoice->payment_status) === 'paid')
                  <span class="badge badge-success badge-pill">
                    Paid
                  </span>
                @elseif (strtolower($feesInvoice->payment_status) === 'partially_paid')
                  <span class="badge badge-warning badge-pill">
                    Partially Paid
                  </span>
                @else
                  <span class="badge badge-secondary badge-pill">
                    {{ $feesInvoice->payment_status }}
                  </span>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      @else
        <div class="p-2 text-secondary">
          No records
        </div>
      @endif
    @endif
  </div>
  <div class="my-3">
    <h4 class="h5 m-3">Academic record</h4>

    @if (false)
    <table class="table table-sm table-hover">
      <thead>
        <tr class="text-secondary">
          <th>Session</th>
          <th>Exam</th>
          <th>Result</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($student->feesInvoices as $feesInvoice)
          <tr>
            <td class="text-secondary">
              {{ $feesInvoice->oClass->academicSession->name }}
            </td>

            <td class="text-primary">
              {{ $feesInvoice->term }}
            </td>
            <td>
              @if (strtolower($feesInvoice->payment_status) === 'pending')
                <span class="badge badge-danger badge-pill">
                  Pending
                </span>
              @elseif (strtolower($feesInvoice->payment_status) === 'paid')
                <span class="badge badge-success badge-pill">
                  Paid
                </span>
              @elseif (strtolower($feesInvoice->payment_status) === 'partially_paid')
                <span class="badge badge-warning badge-pill">
                  Partially Paid
                </span>
              @else
                <span class="badge badge-secondary badge-pill">
                  {{ $feesInvoice->payment_status }}
                </span>
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    @else
      <div class="p-2 text-secondary">
        No records
      </div>
    @endif
  </div>


</div>
