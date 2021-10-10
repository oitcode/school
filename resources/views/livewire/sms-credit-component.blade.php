<div class="card">
  <div class="card-header">
    <h2 class="card-title">
      SMS Credit
    </h2>
  </div>

  <div class="card-body p-0">

    <div class="row p-2 border" style="margin:auto;">
      <div class="col-md-4">
        Credit Available
      </div>
      <div class="col-md-4">
        {{ $response['credits_availabe'] }}
      </div>
    </div>

    <div class="row p-2 border" style="margin:auto;">
      <div class="col-md-4">
        Credits Consumed
      </div>
      <div class="col-md-4">
        {{ $response['credits_consumed'] }}
      </div>
    </div>

  </div>
</div>
