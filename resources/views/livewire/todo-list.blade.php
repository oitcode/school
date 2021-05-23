<div>

  @if ($searchToolBoxShow)
    <!-- Search Tool box -->
    <div class="row bg-light p-0 border" style="margin: auto;">

      <div class="col-md-1 p-0 bg-info-x border text-muted">
        <div>
          <div class="mx-2">
            ID
          </div>
          <div>
            <input type="text" class="form-control" placeholder="ID" wire:model.defer="searchData.id" />
          </div>
        </div>
      </div>

      <div class="col-md-2 p-0 bg-info-x border text-muted">
        <div>
          <div class="mx-2">
            Title
          </div>
          <div>
            <input type="text" class="form-control" placeholder="Title" wire:model.defer="searchData.title" />
          </div>
        </div>
      </div>


      <div class="col-md-2 p-0 bg-info-x border text-muted">
        <div>
          <div class="mx-2">
            Status
          </div>
          <div>
            <select class="form-control" wire:model.defer="searchData.status">
              <option value="all">All</option>
              <option value="pending">Pending</option>
              <option value="done">Done</option>
              <option value="dropped">Dropped</option>
              <option value="deferred">Deferred</option>
            </select>
          </div>
        </div>
      </div>

      <div class="col-md-1 px-2">
        <div>
          <div>
            &nbsp;
          </div>
          <div>
            <button class="btn btn-info" wire:click="search">
              Go
            </button>
          </div>
        </div>
      </div>



    </div>
    <!-- Search Tool box -->
  @else
    <div class="p-2">
      <button class="btn btn-sm btn-outline-info border-0" wire:click="toggleSearchToolBox">
        Filter
      </button>
    </div>
  @endif

  <div class="clearfix p-2 bg-light border">
    <div class="float-left mr-3">
      <small>
        Records: {{ $todoCount }}
      </small>
    </div>
    <div class="float-left mr-3">
      <small>
        Display: {{ $todoDisplayCount }}
      </small>
    </div>
  </div>

  @if ($todos != null && count($todos) > 0)
  <table class="table table-sm  table-hover table-valign-middle">
    <thead>
      <tr>
        <th>Date</th>
        <th>Title</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($todos as $todo)
        <tr>
          <td>
            {{ $todo->publish_date }}
          </td>
          <td>
            {{ $todo->title }}
          </td>
          <td>
            {{ $todo->status }}
          </td>
          <td>
            <span class="btn btn-tool btn-sm" wire:click="$emit('updateTodo', {{ $todo }})">
              <i class="fas fa-pencil-alt text-primary mr-3"></i>
            </span>
            <span class="btn btn-tool btn-sm">
              <i class="fas fa-trash text-danger mr-3" wire:click="$emit('confirmDeleteTodo', {{ $todo }})"></i>
            </span>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <span class="text-danger">
      No todo
    </span>
  @endif
</div>
