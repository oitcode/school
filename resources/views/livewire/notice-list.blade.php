<div class="card">
  <div class="card-body p-0">
    @if ($notices != null && count($notices) > 0)
    <table class="table table-sm  table-hover table-valign-middle">
      <thead>
        <tr>
          <th>Date</th>
          <th>Title</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($notices as $notice)
          <tr>
            <td>
              {{ $notice->publish_date }}
            </td>
            <td>
              {{ $notice->title }}
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
        No notice
      </span>
    @endif
  </div>
</div>
