<div class="p-2">

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Sender Name
    </div>
    <div class="col-md-6">
      <strong>
        John Doe
      </strong>
    </div>
  </div>

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Sender Phone
    </div>
    <div class="col-md-6">
      {{ $contactMessage->sender_phone }}
    </div>
  </div>

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Sender Email
    </div>
    <div class="col-md-6">
      {{ $contactMessage->sender_email }}
    </div>
  </div>

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Status
    </div>
    <div class="col-md-6">
      @if (strtolower($contactMessage->status) === 'new')
        <span class="badge badge-success badge-pill">
          New
        </span>
      @elseif (strtolower($contactMessage->status) === 'progress')
        <span class="badge badge-warning badge-pill">
          Progress
        </span>
      @else
        <span class="badge badge-danger badge-pill">
          {{ $contactMessage->status }}
        </span>
      @endif
    </div>
  </div>

  <div class="row p-2 border-bottom">
    <div class="col-md-2">
      Message
    </div>
    <div class="col-md-6">
      {{ $contactMessage->message }}
    </div>
  </div>

  <div class="m-2">
    <button type="submit" class="btn btn-danger" wire:click="$emit('exitDisplay')">Close</button>
  </div>
</div>
