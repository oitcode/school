<div>
  @if ($memos != null && count($memos) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr>
        <th>Date</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($memos as $memo)
        <tr>
          <td class="text-secondary">
            {{ $memo->publish_date }}
          </td>
          <td class="text-secondary">
            <a href="">
              {{ \Illuminate\Support\Str::limit($memo->body, 100, $end=' ...') }}
            </a>
          </td>
          <td>
            <span class="btn btn-tool btn-sm" wire:click="">
              <i class="fas fa-pencil-alt text-primary mr-3"></i>
            </span>
            <span class="btn btn-tool btn-sm" wire:click="$emit('confirmDeleteMemo', {{ $memo }})">
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
