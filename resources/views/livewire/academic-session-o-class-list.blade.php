<div class="card">
  <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th class="text-info">
            Class
          </th>
          <th class="text-info">
            Total students
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($oClasses as $oClass)
          <tr>
            <td>
              {{ $oClass->name }}
            </td>
            <td>
              {{ $oClass->getTotalStudents() }}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>
</div>
