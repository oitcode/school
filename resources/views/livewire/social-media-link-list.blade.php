<div>
  @if ($socialMediaLinks != null && count($socialMediaLinks) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Link</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($socialMediaLinks as $socialMediaLink)
        <tr>
          <td class="text-secondary">
            {{ $loop->iteration }}
          </td>
          <td>
            <a wire:click.prevent="$emit('displaySocialMediaLink', {{ $socialMediaLink }})" href="">
              {{ $socialMediaLink->media_name }}
            </a>
          </td>
          <td>
            {{ $socialMediaLink->url }}
          </td>
          <td>
            <span class="btn btn-tool btn-sm border rounded-circle mr-2" wire:click="$emit('updateSocialMediaLink', {{ $socialMediaLink }})">
              <i class="fas fa-pencil-alt text-primary"></i>
            </span>
            <span class="btn btn-tool btn-sm border rounded-circle" wire:click="$emit('confirmDeleteSocialMediaLink', {{ $socialMediaLink }})">
              <i class="fas fa-trash text-danger"></i>
            </span>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <div class="p-2 text-muted">
      No records to display
    </div>
  @endif
</div>
