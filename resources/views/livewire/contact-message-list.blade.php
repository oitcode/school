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
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        @endif

        <tbody>
          @foreach($contactMessages as $contactMessage)
          <tr>
            <td class="text-secondary">
                 {{ $loop->iteration }}
            </td>

            <td class="">
                 {{ $contactMessage->sender_name }}
            </td>

            <td class="text-secondary">
                 {{ $contactMessage->sender_email }}
            </td>

            <td class="text-secondary">
                 {{ $contactMessage->sender_phone }}
            </td>

            <td>
              <a wire:click.prevent="$emit('displayContactMessage', {{ $contactMessage }})" href="">
                {{ \Illuminate\Support\Str::limit($contactMessage->message, 75, $end=' ...') }}
              </a>
            </td>

            <td>
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
            </td>

            <td>
              <span class="btn btn-tool btn-sm mr-2" wire:click="$emit('updateContactMessage', {{ $contactMessage }})">
                <i class="fas fa-pencil-alt text-primary"></i>
              </span>
              <span class="btn btn-tool btn-sm" wire:click="$emit('confirmDeleteContactMessage', {{ $contactMessage }})">
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
