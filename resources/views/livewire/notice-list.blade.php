<div>
  @if ($notices != null && count($notices) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr class="text-secondary">
        <th>Date</th>
        <th>Title</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($notices as $notice)
        <tr>
          <td class="text-secondary">
            {{ $notice->publish_date }}
          </td>
          <td>
            <a class="text-dark" wire:click.prevent="$emit('displayNotice', {{ $notice }})" href="">
              {{ $notice->title }}
            </a>
          </td>
          <td>
            <span class="badge badge-primary badge-pill">
              {{ $notice->status }}
            </span>
          </td>
          <td>
            <span class="btn btn-tool btn-sm border rounded-circle mr-2" wire:click="$emit('updateNotice', {{ $notice }})">
              <i class="fas fa-pencil-alt text-primary"></i>
            </span>
            <span class="btn btn-tool btn-sm border rounded-circle" wire:click="$emit('confirmDeleteNotice', {{ $notice }})">
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
