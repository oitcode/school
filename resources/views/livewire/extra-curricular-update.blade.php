<div>
  <h3 class="h5 m-2">
    Update Extra Curricular
  </h3>

  <div class="form-group form-inline m-0">
      <div class="input-group w-100">
        <div class="input-group-prepend w-25">
          <div class="input-group-text w-100">
            <i class="fas fa-pencil-alt mr-3"></i>
          </div>
        </div>
        <input type="text" class="form-control" id="" wire:model.defer="name" placeholder="Name">
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
        <select class="custom-select" wire:model.defer="extra_curricular_category_id">
          <option>---</option>
          @foreach($extraCurricularCategories as $extraCurricularCategory)
            <option value="{{ $extraCurricularCategory->extra_curricular_category_id }}">{{ $extraCurricularCategory->name }}</option>
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
        <textarea rows="3" class="form-control" wire:model.defer="description" placeholder="Description">
        </textarea>
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
  </div>

  <div class="form-group">
      <img src="{{ asset('storage/' . $extraCurricular->image_path) }}" class="img-fluid">
      <input type="file" wire:model="image">
      @error('image') <span class="error">{{ $message }}</span> @enderror
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

  <div class="mx-2 my-4">
    <button wire:click="update" class="btn btn-sm btn-success mr-3">Update</button>
    <button wire:click="$emit('exitUpdate')" type="button" class="btn btn-sm btn-secondary">Cancel</button>
  </div>

</div>
