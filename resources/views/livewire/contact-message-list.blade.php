<div class="card shadow-none">
  <div class="card-body p-0">

    <div wire:loading class="p-2 text-info">
      Loading ...
    </div>


    @if (!is_null($contactMessages) && count($contactMessages) > 0)
      <table class="table table-sm  table-hover table-valign-middle">
        @if (true)
        <thead>
          <tr class="text-secondary border-top">
            <th>ID</th>
            <th>Sender Email</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        @endif

        <tbody>
          @foreach($contactMessages as $contactMessage)
          <tr>
            <td>
                 {{ $loop->iteration }}
            </td>

            <td>
                 {{ $contactMessage->sender_email }}
            </td>

            <td>
                 {{ $contactMessage->message }}
            </td>

            <td>
                 {{ $contactMessage->status }}
            </td>

            <td>
              <span class="btn btn-tool btn-sm">
                <i class="fas fa-pencil-alt text-primary mr-3" wire:click=""></i>
              </span>
              <span class="btn btn-tool btn-sm" wire:click="">
                <i class="fas fa-trash text-danger"></i>
              </span>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <div class="px-3 mt-2 text-muted">
        <small>
          No contact messages to display.
        </small>
      </div>
    @endif
  </div>
</div>
