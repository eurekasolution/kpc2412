    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', '남성', '여성', '신입직원'],
          ['2004',  1000,      400, 100],
          ['2005',  1170,      460, 150],
          ['2006',  660,       1120, 130],
          ['2007',  1030,      540, 170]
        ]);

        var options = {
            title: '직원 분포',
            curveType: 'function',
            legend: { position: 'bottom' },
            series: {
                0: { color: '#FF0000' }, // 남성: 빨강
                1: { color: '#00FF00' }, // 여성: 초록
                2: { color: '#0000FF' }  // 신입직원: 파랑
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('kpcchart'));

        chart.draw(data, options);
      }
    </script>
    <div class="row">
        <div id="kpcchart" style="width: 900px; height: 500px"></div>
    </div>

