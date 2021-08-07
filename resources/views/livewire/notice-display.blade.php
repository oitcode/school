<div class="p-2">
  @if (false)
    <h3 class="h4 mb-3">Notice Display</h3>
  @endif

  <div class="mb-3">
    <h3 class="h4">
      {{ $notice->title }}
    </h3>
    <div class="">
      <small>
        <span class="text-secondary mr-1">
          Published:
        </span>
        {{ $notice->publish_date }}

        &nbsp;&nbsp;&nbsp;&nbsp;

        <span class="text-secondary mr-1">
          Notice ID:
        </span>
        {{ $notice->notice_id }}
      </small>
    </div>
  </div>

  <hr />

  <div class="mb-3">
    {{ $notice->description }}
  </div>

  <button type="submit" class="btn btn-danger" wire:click="$emit('exitDisplay')">Close</button>
</div>
