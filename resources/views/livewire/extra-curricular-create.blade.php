<div wire:ignore.self class="modal" tabindex="-1" role="dialog" data-backdrop="static" id="extraCurricularCreateModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New Extra Curricular</h5>
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">
          <i class="fas fa-times"></i>
        </button>
      </div>

      <div class="modal-body p-0">
        <form>
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

        </form>
        <div class="mx-2 my-4">
          <button wire:click="store" class="btn btn-sm btn-success mr-3">Save</button>
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
        </div>


      </div>
    </div>
  </div>
</div>

<script>
    /* Show the modal on load */
    $(document).ready(function () {
       $('#extraCurricularCreateModal').modal('show');
    });

    /* Toggle the modal.  */
    window.livewire.on('toggleExtraCurricularCreateModal', () => {
        $('#extraCurricularCreateModal').modal('hide');
    });


   /* Destroy the modal on hide */
   $('#extraCurricularCreateModal').on('hidden.bs.modal', function () {
       window.livewire.emit('destroyExtraCurricularCreate');
   });

</script>
