<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Social Media Links
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>


  <div class="card-body p-0">

    @if ($createMode)
      @livewire ('social-media-link-create')
    @elseif ($updateMode)
      @livewire ('social-media-link-update', ['socialMediaLink' => $updatingSocialMediaLink,])
    @else
      @livewire ('social-media-link-list')
    @endif

    @if ($deleteMode)
      @livewire ('social-media-link-delete-confirm', ['deletingSocialMediaLink' => $deletingSocialMediaLink,])
    @endif

  </div>
</div>
