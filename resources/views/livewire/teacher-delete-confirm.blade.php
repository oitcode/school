<div>
      <div class="modal enter" tabindex="-1" role="dialog" data-backdrop="static" id="teacherDeleteConfirmModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">
                <i class="fas fa-exclamation-triangle text-danger mr-2"></i>
                Confirm Delete
              </h5>
              {{-- TODO --}}
              @if (false)
              <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">
                <i class="fas fa-times"></i>
              </button>
              @endif
            </div>
      
            <div class="modal-body p-0">
              <div class="p-3">
                <p>
                  Do you really want to delete ?
                </p>
                <div class="row text-muted">
                  <div class="col">
                    <strong>
                      Teacher ID
                    </strong>
                    <br />
                    {{ $deletingTeacher->teacher_id }}
                  </div>
                  <div class="col">
                    <strong>
                      Name
                    </strong>
                    <br />
                    {{ $deletingTeacher->name }}
                  </div>
                </div>
              </div>

              <div class="mx-2 mb-3">
                <button wire:click="$emit('deleteTeacher', {{ $deletingTeacher }})" class="btn btn-sm btn-danger mr-3" data-dismiss="modal">Delete</button>
                <button wire:click="$emit('exitDelete')" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
              </div>
      
            </div>
          </div>
        </div>
      </div>
      
      <script>
          /* Show the modal on load */
          $(document).ready(function () {
             $('#teacherDeleteConfirmModal').modal('show');
          });
      </script>
</div>
