<div class="card">
  <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr class="text-info">
          <th>
            <i class="fa fa-user mr-2"></i>
            Student
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
          <tr>
            <td>
              {{ $student->name }}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>
</div>
