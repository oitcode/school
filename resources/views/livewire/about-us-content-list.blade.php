<div>
  @if ($aboutUsContents != null && count($aboutUsContents) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr class="text-secondary">
        <th>Content</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($aboutUsContents as $aboutUsContent)
        <tr>
          <td>
            <a class="text-dark" wire:click.prevent="" href="">
              {{ \Illuminate\Support\Str::limit($aboutUsContent->body, 100, $end=' ...') }}
            </a>
          </td>
          <td>
            <img src="{{ asset('storage/' . $aboutUsContent->image_path) }}" style="height:50px; width:50px;">
          </td>
          <td>
            <span class="btn btn-tool btn-sm border rounded-circle mr-2" wire:click="">
              <i class="fas fa-pencil-alt text-primary"></i>
            </span>
            <span class="btn btn-tool btn-sm border rounded-circle" wire:click="">
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
