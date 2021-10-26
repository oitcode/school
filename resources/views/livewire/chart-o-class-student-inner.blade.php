<div>
  <!-- Chart's container -->
  <div id="chart" style="height: 300px;"></div>

  <script>
    const chart = new Chartisan({
      el: '#chart',
      url: "@chart('sample_chart', ['academicSession' => $displayAcademicSession])",
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
