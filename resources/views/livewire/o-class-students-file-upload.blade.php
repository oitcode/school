<div class="p-2">

  <h3 class="h5">Upload students from file</h3>
  <div class="form-group">
    <label for="">File</label>
    <input type="file" class="form-control" wire:model="students_file">
    @error('students_file') <span class="text-danger">{{ $message }}</span> @enderror
  </div>


  <div wire:loading class="text-danger">
    Importing from file ...
  </div>

  @if ($previewMode)

    Total Lines {{ $totLines }}
    <br />

    <table class="table table-sm table-hover">
      <thead>
        <tr class="bg-light text-secondary">
          <th>Student</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Parent</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
        </tr>
      <thead>

      <tbody>
        @foreach ($lines as $line)
          <tr>
            @foreach ($line as $value)
              <td>{{ $value }}</td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif

  @if ($startMode)
    <button type="submit" class="btn btn-primary" wire:click="preview">Upload</button>
  @elseif ($previewMode)
    <button type="submit" class="btn btn-primary" wire:click="importFromFile">Import</button>
  @endif
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitUploadStudentsFile')">Cancel</button>

</div>
