<div class="card">
<div class="card-body">

  <h3 class="h5">Upload students from file</h3>

  <div wire:loading class="text-primary">
    <div class="spinner-border text-primary" role="status">
    </div>
     Processing ...
  </div>

  @if ($startMode)
    <button type="submit" class="btn btn-primary" wire:click="preview">Upload</button>
  @elseif ($previewMode)
    <button type="submit" class="btn btn-primary" wire:click="importFromFile">Import</button>
  @endif
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitAddNewStudentsFromFileMode')">Cancel</button>


  <div class="form-group">
    <label for="">File</label>
    <input type="file" class="form-control" wire:model="students_file">
    @error('students_file') <span class="text-danger">{{ $message }}</span> @enderror
  </div>



  @if ($previewMode)

    Total Lines {{ $totLines }}
    <br />

    <table class="table table-sm table-hover table-striped">
      <thead>
        <tr class="bg-light table-info">
          <th>#</th>
          <th>Student</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Parent</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Pending balance</th>
        </tr>
      <thead>

      <tbody>
        @foreach ($lines as $line)
          <tr>
            <td>
              {{ $loop->iteration }}
            </td>
            @foreach ($line as $value)
              <td>{{ $value }}</td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif

</div>
</div>
