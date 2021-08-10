<div class="p-2">
  <h3>Update Facility</h3>

  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" wire:model.defer="name" placeholder="Title">
    @error('name') <span class="text-danger">{{ $message }}</span>@enderror
  </div>

  <div class="form-group">
    <label>Category</label>
    <select class="custom-select" wire:model.defer="facility_category_id">
      <option>---</option>
      @foreach($facilityCategories as $facilityCategory)
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
    <label>Comment</label>
    <input type="text" class="form-control" wire:model.defer="comment" placeholder="Comment">
    @error('comment') <span class="text-danger">{{ $message }}</span>@enderror
  </div>

  <div>
    <button class="btn btn-sm btn-success mr-3" wire:click="update">Update</button>
    <button class="btn btn-sm btn-secondary" wire:click="$emit('exitUpdate')">Cancel</button>
  </div>
</div>
