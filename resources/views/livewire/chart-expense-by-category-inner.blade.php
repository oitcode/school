<div>
  <!-- Chart's container -->
  <div id="chart" style="height: 300px;"></div>

  <script>
    const chart = new Chartisan({
      el: '#chart',
      url: "@chart('expense_by_category', ['startDate' => $start_date, 'endDate' => $end_date,])",
      hooks: new ChartisanHooks()
          .beginAtZero()
          .colors()
          .datasets([
              {
                  type: 'bar', backgroundColor: '#abe'
              },
          ])
    });
  </script>


</div>
