<div class="p-2">

  <h3>Create new facility</h3>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" id="" wire:model.defer="name" placeholder="Title">
    @error('name') <span class="text-danger">{{ $message }}</span>@enderror
  </div>

  <div class="form-group">
    <label>Category</label>
    <select class="custom-select" wire:model.defer="facility_category_id">
      <option>---</option>
      @foreach ($facilityCategories as $facilityCategory)
        <option value="{{ $facilityCategory->facility_category_id }}">{{ $facilityCategory->title }}</option>
      @endforeach
    </select>
    @error('facility_category_id') <span class="text-danger">{{ $message }}</span>@enderror
  </div>

  <div class="form-group">
    <label>Info</label>
    <textarea rows="3" class="form-control" wire:model.defer="info" placeholder="Info">
    </textarea>
    @error('info') <span class="text-danger">{{ $message }}</span>@enderror
  </div>

  <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control" wire:model="image">
    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  @if (false)
  <div class="form-group">
    <label>Comment</label>
    <input type="text" class="form-control" wire:model.defer="comment" placeholder="Comment">
    @error('comment') <span class="text-danger">{{ $message }}</span>@enderror
  </div>
  @endif

  <div class="my-2">
    <button class="btn btn-sm btn-success mr-3" wire:click="store">Save</button>
    <button type="button" class="btn btn-sm btn-secondary" wire:click="$emit('exitCreate')">Cancel</button>
  </div>

</div>
