<div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" id="extraCurricularCategoryCreateModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New Extra Curricular Category</h5>
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">
          <i class="fas fa-times"></i>
        </button>
      </div>

      <div class="modal-body">
        <form>
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

        </form>

        <div class="mx-2 my-4">
          @if($updateMode)
            <button wire:click="update" class="btn btn-sm btn-success mr-3">Update</button>
          @else
            <button wire:click="store" class="btn btn-sm btn-success mr-3">Save</button>
          @endif
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
        </div>

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


      </div>
    </div>
  </div>
</div>

<script>
    /* Show the modal on load */
    $(document).ready(function () {
       $('#extraCurricularCategoryCreateModal').modal('show');
    });

    /* Toggle the modal.  */
    window.livewire.on('toggleExtraCurricularCategoryCreateModal', () => {
        $('#extraCurricularCategoryCreateModal').modal('hide');
    });


   /* Destroy the modal on hide */
   $('#extraCurricularCategoryCreateModal').on('hidden.bs.modal', function () {
       window.livewire.emit('destroyExtraCurricularCategoryCreate');
   });

</script>
