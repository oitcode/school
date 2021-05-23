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
          <td>
            {{ $memo->publish_date }}
          </td>
          <td>
            {{ $memo->body }}
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
    <span class="text-danger">
      No memo
    </span>
  @endif
</div>
