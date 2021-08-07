<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Contact Messages
    </h3>
  </div>

  <div class="card-body p-0">

    @if ($updateMode)
      @livewire ('contact-message-update', ['contactMessage' => $updatingContactMessage,])
    @elseif ($displayMode)
      @livewire ('contact-message-display', ['contactMessage' => $displayingContactMessage,])
    @else
      @livewire ('contact-message-list')
    @endif

    @if ($deleteMode)
      @livewire ('contact-message-delete-confirm', ['deletingContactMessage' => $deletingContactMessage,])
    @endif
  </div>
</div>
