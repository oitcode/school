<div class="p-0">


  <div class="bg-light border p-2">
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


  @if ($publishFeesMode)
    @livewire('academic-session-publish-fees-invoice', ['academicSession' => $academicSession,])
  @endif

  <div class="row p-2 border-bottom" style="margin: auto;">
    <div class="col-md-2">
      Academic Session
    </div>
    <div class="col-md-6">
      <strong>
        {{ $academicSession->name }}
      </strong>
    </div>
  </div>

  <div class="row p-2 border-bottom" style="margin: auto;">
    <div class="col-md-2">
      Status
    </div>
    <div class="col-md-6">
      <span class="badge badge-success badge-pill">
        New
      </span>
    </div>
  </div>

</div>
