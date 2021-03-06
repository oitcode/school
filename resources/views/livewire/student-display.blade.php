<div class="p-0">

  <div class="bg-light border p-2">
    <div class="float-left mr-3">
      <button class="btn text-secondary" wire:click="enterAddGuardianMode">
        <i class="fas fa-user mr-2"></i>
        Add guardian
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn text-secondary">
        <i class="fas fa-arrow-up mr-2"></i>
        Promote
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn text-secondary" wire:click="enterDisplayFeesMode">
        <i class="fas fa-dollar-sign mr-2"></i>
        Fees
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn text-secondary">
        <i class="fas fa-book mr-2"></i>
        Academic
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn text-secondary">
        <i class="fas fa-sticky-note mr-2"></i>
        Add note
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn text-secondary" wire:click="enterSendSmsMode">
        <i class="fas fa-envelope mr-2"></i>
        SMS
      </button>
    </div>

    <div class="float-left mr-3">
      <button class="btn text-secondary">
        <i class="fas fa-tag mr-2"></i>
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

    <div class="float-right mr-3" wire:loading>
      <div class="spinner-border text-primary" role="status">
      </div>
      <span>Loading ...</span>
    </div>

    <div class="clearfix">
    </div>
  </div>




  <div class="card">
    <div class="card-body">

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
              {{ $student->getCurrentSection()->oClass->name }}
              {{ $student->getCurrentSection()->name }}
            </div>
          </div>

          @if (false)
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
          @endif

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
            <i class="fas fa-user-graduate fa-4x text-secondary"></i>
          @endif
        </div>
      </div>
    </div>
  </div>

  @if ($sendSmsMode)
    @livewire ('student-send-sms', ['student' => $student,])
  @endif


  @if ($displayFeesMode)
    @livewire ('student-fees-component', ['student' => $student,])
  @endif

  @if ($addGuardianMode)
    @livewire ('student-add-guardian', ['student' => $student,])
  @endif

</div>
