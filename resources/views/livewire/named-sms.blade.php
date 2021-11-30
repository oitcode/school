<div class="p-2">

  <h2>Send SMS</h2>

  @if (false)
  <div class="form-group">
    <label for="">Phone</label>
    <input type="text" class="form-control" wire:model.defer="phone">
    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
  @endif

  <div class="form-group">
    <label for="">File</label>
    <input type="file" class="form-control" wire:model="contacts_file">
    @error('contacts_file') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="">Message</label>
    <input type="text" class="form-control" wire:model.defer="message">
    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  @if ($startMode)
    <button type="submit" class="btn btn-primary" wire:click="preview">Upload</button>
  @elseif ($previewMode)
    <button type="submit" class="btn btn-primary" wire:click="sendSms">Send</button>
  @endif
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>

  @if ($previewMode)

    Total Lines {{ $totLines }}
    <br />

    <table class="table table-sm table-hover table-striped">
      <thead>
        <tr class="bg-light table-info">
          <th>#</th>
          <th>Name</th>
          <th>Phone</th>
        </tr>
      <thead>

      <tbody>
        @foreach ($contacts as $contact)
          <tr>
            <td>
              {{ $loop->iteration }}
            </td>
            @foreach ($contact as $value)
              <td>{{ $value }}</td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</div>
