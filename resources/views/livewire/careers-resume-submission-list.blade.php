<div class="card shadow-none">
  <div class="card-body p-0">

    <div wire:loading class="p-2 text-info">
      Loading ...
    </div>


    @if (!is_null($careersResumeSubmissions) && count($careersResumeSubmissions) > 0)
      <table class="table table-sm  table-hover table-valign-middle">
        <thead>
          <tr class="text-secondary border-top">
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Resume</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($careersResumeSubmissions as $careersResumeSubmission)
          <tr>
            <td class="text-secondary">
                 {{ $loop->iteration }}
            </td>

            <td class="">
                 {{ $careersResumeSubmission->name }}
            </td>

            <td class="text-secondary">
                 {{ $careersResumeSubmission->email }}
            </td>

            <td class="text-secondary">
                 {{ $careersResumeSubmission->phone }}
            </td>

            <td class="text-secondary">
              <a href="" wire:click.prevent="resumeDownload({{ $careersResumeSubmission }})">
                Download
                &nbsp;&nbsp;
                <i class="fas fa-download"></i>
              </a>
            </td>

            <td>
              <span class="badge badge-success badge-pill">
                New
              </span>
            </td>

            <td>
              <span class="btn btn-tool btn-sm mr-2" wire:click="">
                <i class="fas fa-pencil-alt text-primary"></i>
              </span>
              <span class="btn btn-tool btn-sm" wire:click="">
                <i class="fas fa-trash text-danger"></i>
              </span>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <div class="px-3 mt-2 text-muted">
        <small>
          No resume submissions.
        </small>
      </div>
    @endif
  </div>
</div>
