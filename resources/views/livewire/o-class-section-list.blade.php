<div class="card">
  <div class="card-body p-0">
    @if ($sections != null && count($sections) > 0)
    <div class="table-responsive">
      <table class="table table table-hover table-valign-middle">
        <thead>
          <tr>
            <th class="text-info">Section</th>
            <th class="text-info">Students</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sections as $section)
            <tr>
              <td>
                {{ $section->name }}
              </td>
      
              <td>
                {{ count($section->students) }}
              </td>
      
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @else
      <div class="m-3 text-secondary">
        No sections
      </div>
    @endif
  </div>
</div>
