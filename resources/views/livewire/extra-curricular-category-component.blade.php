<div class="p-2">

  <div class="form-group">
      <label for="name">Title</label>
      <input type="text" class="form-control" id="" placeholder="Name" wire:model.defer="name">
      @error('name') <span class="text-danger">{{ $message }}</span>@enderror
  </div>

  <div class="form-group">
      <label for="comment">Comment</label>
      <input type="text" class="form-control" wire:model.defer="comment" placeholder="Comment">
      @error('comment') <span class="text-danger">{{ $message }}</span>@enderror
  </div>

  <div class="mx-2 my-4">
    @if ($updateMode)
      <button class="btn btn-sm btn-success mr-3" wire:click="update">Update</button>
    @else
      <button class="btn btn-sm btn-success mr-3" wire:click="store">Save</button>
    @endif
    <button class="btn btn-sm btn-secondary" wire:click="$emit('exitCategoryCreate')">Cancel</button>
  </div>

  {{-- TODO --}}
  @if (false)
  <table class="table table-bordered mt-5">
      <thead>
          <tr class="bg-primary text-white">
              <th>No.</th>
              <th>Category</th>
              <th>Comment</th>
              <th>Action</th>
          </tr>
      </thead>

      <tbody>
          @foreach($extraCurricularCategories as $extraCurricularCategory)
          <tr>
              <td>{{ $extraCurricularCategory->extra_curricular_category_id }}</td>
              <td>{{ $extraCurricularCategory->name }}</td>
              <td>{{ $extraCurricularCategory->comment }}</td>
              <td>
              <button wire:click="edit({{ $extraCurricularCategory->extra_curricular_category_id }})" class="btn btn-primary btn-sm">Edit</button>
              <button wire:click="delete({{ $extraCurricularCategory->extra_curricular_category_id }})" class="btn btn-danger btn-sm">Delete</button>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  @endif

</div>
