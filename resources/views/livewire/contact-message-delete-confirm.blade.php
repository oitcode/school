<div>
      <div class="modal enter" tabindex="-1" role="dialog" data-backdrop="static" id="contactMessageDeleteConfirmModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">
                <i class="fas fa-exclamation-triangle text-danger mr-2"></i>
                Confirm Delete
              </h5>
            </div>
      
            <div class="modal-body p-0">
              <div class="p-3">
                <p>
                  Do you really want to delete ?
                </p>
                <div class="row text-muted">
                  <div class="col">
                    <strong>
                      Contact Message ID
                    </strong>
                    <br />
                    {{ $deletingContactMessage->contact_message_id }}
                  </div>
                  <div class="col">
                    <strong>
                      Email
                    </strong>
                    <br />
                    {{ $deletingContactMessage->sender_email }}
                  </div>
                </div>
              </div>

              <div class="mx-2 mb-3">
                <button wire:click="$emit('deleteContactMessage', {{ $deletingContactMessage }})" class="btn btn-sm btn-danger mr-3" data-dismiss="modal">Delete</button>
                <button wire:click="$emit('exitDelete')" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
              </div>
      
            </div>
          </div>
        </div>
      </div>
      
      <script>
          /* Show the modal on load */
          $(document).ready(function () {
             $('#contactMessageDeleteConfirmModal').modal('show');
          });
      </script>
</div>
