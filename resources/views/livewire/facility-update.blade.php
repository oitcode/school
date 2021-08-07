<div>
  <h3>Update Facility</h3>

  <div class="form-group form-inline m-0">
      <div class="input-group w-100">
        <div class="input-group-prepend w-25">
          <div class="input-group-text w-100">
            <i class="fas fa-pencil-alt mr-3"></i>
          </div>
        </div>
        <input type="text" class="form-control" wire:model.defer="name" placeholder="Title">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
  </div>

  <div class="form-group form-inline m-0">
      <div class="input-group w-100">
        <div class="input-group-prepend w-25">
          <div class="input-group-text w-100">
            Category
          </div>
        </div>
        <select class="custom-select" wire:model.defer="facility_category_id">
          <option>---</option>
          @foreach($facilityCategories as $facilityCategory)
            <option value="{{ $facilityCategory->facility_category_id }}">{{ $facilityCategory->title }}</option>
          @endforeach
        </select>
      </div>
  </div>

  <div class="form-group form-inline m-0">
      <div class="input-group w-100">
        <div class="input-group-prepend w-25">
          <div class="input-group-text w-100">
            <i class="fas fa-comment mr-3"></i>
          </div>
        </div>
        <textarea rows="3" class="form-control" wire:model.defer="info" placeholder="Info">
        </textarea>
        @error('info') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
  </div>

  <div class="form-group form-inline m-0">
      <div class="input-group w-100">
        <div class="input-group-prepend w-25">
          <div class="input-group-text w-100">
            <i class="fas fa-comment mr-3"></i>
          </div>
        </div>
        <input type="text" class="form-control" wire:model.defer="comment" placeholder="Comment">
        @error('comment') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
  </div>

  <div class="p-2">
    <button wire:click="update" class="btn btn-sm btn-success mr-3">Update</button>
    <button wire:click="$emit('exitUpdate')" type="button" class="btn btn-sm btn-secondary">Cancel</button>
  </div>
</div>
