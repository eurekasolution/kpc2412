<?php
    $today = Date('Y-m-d');

    echo "today = $today <br>";

?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['시간', '접속'],
          <?php
            for($i=0; $i<=23; $i++)
            {
                $sql = "select count(*) as count from log 
                        where time>='$today $i:00:00' and
                        time<='$today $i:59:59'";
                $result = mysqli_query($conn, $sql);
                $data = mysqli_fetch_array($result);

                
                echo "['$i:00', $data[count] ],";
            }
          ?>
        ]);

        var options = {
            title: '클릭수',
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

    <script>
        // 3초마다 새로고침
        setTimeout(function() {
            window.location.reload();
        }, 3000);
    </script>