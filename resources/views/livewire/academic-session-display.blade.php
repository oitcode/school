<div class="p-2">

  <div class="bg-light border-bottom py-2">
    <a href="" wire:click.prevent="enterPublishFeesMode">
      Publish fees invoice
    </a>
  </div>

  @if ($publishFeesMode)
    @livewire('academic-session-publish-fees-invoice', ['academicSession' => $academicSession,])
  @endif

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Academic Session
    </div>
    <div class="col-md-6">
      <strong>
        {{ $academicSession->name }}
      </strong>
    </div>
  </div>

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Status
    </div>
    <div class="col-md-6">
      @if (true)
        <span class="badge badge-success badge-pill">
          New
        </span>
      @elseif (true)
        <span class="badge badge-warning badge-pill">
          Progress
        </span>
      @else
        <span class="badge badge-danger badge-pill">
          TODO
        </span>
      @endif
    </div>
  </div>

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Message
    </div>
    <div class="col-md-6">
      TODO
    </div>
  </div>

  <div class="m-2">
    <button type="submit" class="btn btn-danger" wire:click="$emit('exitDisplay')">Close</button>
  </div>
</div>
