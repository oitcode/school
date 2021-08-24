<div>
  @if ($school != null)
    <table class="table table-sm table-hover table-borderless text-secondary">
      <tr>
        <th>School Name</th>
        <td>
          <strong>
            {{ $school->name }}
          </strong>
        </td>
      </tr>
      <tr>
        <th>Logo</th>
        <td>
          <img src="{{ asset('storage/' . $school->logo_image_path) }}" style="max-height:50px; max-width:50px;">
        </td>
      </tr>
      <tr>
        <th>Address</th>
        <td>{{ $school->address }}</td>
      </tr>
      <tr>
        <th>Phone</th>
        <td>{{ $school->phone }}</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>{{ $school->email }}</td>
      </tr>
      <tr>
        <th>Slogan</th>
        <td>{{ $school->slogan }}</td>
      </tr>
    </table>
  @else
    <div class="p-2 text-muted">
      Please add new school.
    </div>
  @endif
</div>
