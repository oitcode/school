<div>
  @if ($mainpageContents != null && count($mainpageContents) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr>
        <th>Content</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mainpageContents as $mainpageContent)
        <tr>
          <td>
            <a wire:click.prevent="$emit('displayMainpageContent', {{ $mainpageContent }})" href="">
              {{ \Illuminate\Support\Str::limit($mainpageContent->body, 100, $end=' ...') }}
            </a>
          </td>
          <td>
            <img src="{{ asset('storage/' . $mainpageContent->image_path) }}" style="height:50px; width:50px;">
          </td>
          <td>
            <span class="btn btn-tool btn-sm border rounded-circle mr-2" wire:click="$emit('updateMainpageContent', {{ $mainpageContent }})">
              <i class="fas fa-pencil-alt text-primary"></i>
            </span>
            <span class="btn btn-tool btn-sm border rounded-circle" wire:click="$emit('confirmDeleteMainpageContent', {{ $mainpageContent }})">
              <i class="fas fa-trash text-danger"></i>
            </span>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <div class="p-2 text-muted">
      No content
    </div>
  @endif
</div>
