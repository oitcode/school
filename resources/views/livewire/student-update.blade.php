<div class="p-2">

  <h3 class="h5 my-2">
    Update student
  </h3>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="">Name</label>
        <input type="email" class="form-control" wire:model.defer="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
      </div>

      <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" wire:model.defer="email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
      </div>

      <div class="form-group">
        <label for="">Phone</label>
        <input type="text" class="form-control" wire:model.defer="phone">
        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
      </div>

      <div class="form-group">
        <label for="">Address</label>
        <input type="text" class="form-control" wire:model.defer="address">
        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <div class="col-md-2">
    </div>

    <div class="col-md-4">

      @if ($image_file)
          <img src="{{ $image_file->temporaryUrl() }}" width="100" height="100">
      @else
        @if ($student->image_file_path)
          <img src="{{ asset('storage/' . $student->image_file_path) }}" style="max-height:100px; max-width:100ps;">
        @else
          <i class="fas fa-user-graduate fa-8x text-secondary"></i>
        @endif
      @endif

      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" wire:model="image_file">
        @error('image_file') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-primary" wire:click="update">Update</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitUpdate')">Cancel</button>
</div>
